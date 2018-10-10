<?php

namespace App\Http\Controllers\Author;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function index()
    {
        return view('author.setting.settings');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'about' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,bmp',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        $user = User::findOrfail(Auth::id());
        if (isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getclientoriginalextension();

            if (!Storage::disk('public')->exists('profile')){
                Storage::disk('public')->makeDirectory('profile');
            }
            if (Storage::disk('public')->exists('profile/'.$user->image)){
                Storage::disk('public')->delete('profile/'.$user->image);
            }
            $imageresize = Image::make($image)->resize(250,250)->stream();
            Storage::disk('public')->put('profile/'.$imageName, $imageresize);

        }else{
            $imageName = $user->image;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $imageName;
        $user->about = $request->about;
        $user->save();
        Toastr::success('Profile Updated Successfully.', 'Success');
        return redirect()->back();
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $current_password = Auth::user()->password;
        if (Hash::check($request->old_password, $current_password)){
            if (!Hash::check($request->password, $current_password)){
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Toastr::success('Password Changed successfully.', 'Success');
                Auth::logout();
                return redirect()->back();
            }else{
                Toastr::error('New password can not be same as old password.', 'Error');
                return redirect()->back();
            }
        }else{
            Toastr::error('Current password not matched.', 'Error');
            return redirect()->back();
        }
    }
}
