<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Contacts::query()->paginate(550);
        $context['page_title'] = "List all Contacts";
        $context['page_table_title'] = "All Contacts";
        $context['messages'] = session();
        $context['results'] = ContactResource::collection($products);

        // return view
        return view('dashboards.admin1.contacts.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, Contacts $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contact)
    {
        try {
            
            // Delete the volunteer record
            $contact->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Contact deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('contacts.index');
    }
}
