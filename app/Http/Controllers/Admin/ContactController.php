<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        Toastr::success('Data saved successfully :)', 'Success');
        return redirect()->back();
    }
}
