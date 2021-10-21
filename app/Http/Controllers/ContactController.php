<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index(){
        return view('index', ['contacts'=>Contact::all()]);
    }

    public function addcontact(){
        return view('includes.add');
    }




    public function view(Contact $contact){
        return view('includes.view', ['contacts'=>$contact]);

    }


    public function update(Contact $contact){

        request()->validate([
            'name'=> 'required|min:5',
            'contact'=> 'required|digits:9',
            'email'=> 'required|email:rfc,dns'
        ]);

        $contact->name =request('name');
        $contact->contact = request('contact');
        $contact->contact = request('contact');
        
        $contact->save();
        
        return back();
    }


    public function store(){
        request()->validate([
            'name'=> 'required|min:5',
            'contact'=> 'required|digits:9',
            'email'=> 'required|email:rfc,dns'
        ]);

        Contact::create([
            'name'=> request('name'),
            'contact'=> request('contact'),
            'email'=> request('email')

        ]);
        
        return redirect()->route('index');
    }


    public function edit(Contact $contact){
        return view('includes.edit', ['contacts'=>$contact]);
    }


    public function destroy(Contact $contact){
        $contact->delete();

        return redirect()->route('index');
    }
}
