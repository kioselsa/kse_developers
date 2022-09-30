<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos=Contact::all();
        return view('admin.mesages.contact')
        ->with('contactos',$contactos);
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
       $contact=new Contact;
       $contact->name=$request->name;
       $contact->lastName=$request->lastName;
       $contact->email=$request->email;
       $contact->phone=$request->phone;
       $contact->coment=$request->coment;
       $contact->save();

       Alert::success('Gracias', 'En breve nos pondremos en contacto con usted, gracias por su confianza en KSE_Developers');

       return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesage=Contact::find($id);
        return view('admin.mesages.viewMesages')
        ->with('mesage',$mesage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        Alert::error('Borrado', 'El mensaje se elimino correctamente!');
        return redirect()->route('admin.contact');
    }
}
