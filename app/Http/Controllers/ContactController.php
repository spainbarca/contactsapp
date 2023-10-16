<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = auth()->user()->contacts;
        return view ('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        if($request->hasFile('profile_picture')){
            $path = $request->file('profile_picture')->store('images/profiles','public');
        }

        $contact = new Contact();
  
        $contact->name=$request->name;
        $contact->phone_number=$request->phone_number;
        $contact->email=$request->email;
        $contact->age=$request->age;
        $contact->user_id=auth()->id();
        $contact->profile_picture=$path;

        $contact->save();
        return redirect()->route('contact.index')->with('alert', [
            'message' => "Contact $contact->name succesfully saved",
            'type' => "success"
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);
        return view ('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $this->authorize('update', $contact);
        return view ('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $this->authorize('update', $contact);
        $contact->update($request->validated());
        //$this->modal
        return redirect()->back()->with('alert', [
            'message' => "Contact $contact->name successfully updated",
            'type' => "info"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);
        $contact->delete();
        return redirect()->route('contact.index')->with('alert', [
            'message' => "Contact $contact->name successfully deleted",
            'type' => "success"
        ]);
    }
}
