<?php

namespace App\Http\Controllers;

use Response;
use Validator;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('allContacts');
    }


    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth')->except('allContacts');
    }*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.allContacts', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form data
        $rules = array(
            'address' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required|email',
        );

        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }

        else{
            // Create instance of Contact model & assign form value then save to database
            $contact = new Contact;
            $contact->address = $request->address;
            $contact->phone1 = $request->phone1;
            $contact->phone2 = $request->phone2;
            $contact->email = $request->email;
            $contact->save();

            return response()->json($contact);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        // Find the Contact model & assign form value then save to database
        $contact = Contact::find($request->id);
        $contact->address = $request->address;
        $contact->phone1 = $request->phone1;
        $contact->phone2 = $request->phone2;
        $contact->email = $request->email;
        $contact->save();

        return response()->json($contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $post = Contact::find ($contact->id)->delete();
        return response()->json();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allContacts()
    {
        // Get all contacts
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }
}
