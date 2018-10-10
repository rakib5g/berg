<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ContactUsController extends Controller
{
    public function contactus(Request $request){

        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required',
        ]);

        $contactUs = new Contactus();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->message = $request->message;
        $contactUs->save();
        Toastr::success('Thanks for your contatc with us. :', 'Success!');
        return redirect()->back();
    }
}
