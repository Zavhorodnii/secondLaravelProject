<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function submit(ContactRequest $request){
        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'Message send');
    }

    public function allData(){
        return view('messages', ['data' => ContactModel::all()]);
    }

    public function showOneMessage($id){
        return view('one-message', ['data' => ContactModel::find($id)]);
    }

}
