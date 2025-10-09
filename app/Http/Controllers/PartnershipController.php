<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnershipRequest;
use App\Http\Requests\UpdatePartnershipRequest;
use App\Http\Resources\PartnershipResource;
use App\Models\Media;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Partnership::query()->paginate(550);
        $context['page_title'] = "List all partners";
        $context['page_table_title'] = "All Partners";
        $context['messages'] = session();
        $context['results'] = PartnershipResource::collection($products);

        // return view
        return view('dashboards.admin1.partnership.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.partnership.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnershipRequest $request)
    {
        $data = $request->validated();

        // dd($data);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'] . 'partnership',
                'public'
            );


            $media = Media::create([
                'media' => $path,
                'title' => $data['name'],
                // 'type' => $file->getClientMimeType(),
            ]);

            // Save the uploaded media path or ID to volunteers table
            $data['image'] = $media->media;
        }

        Partnership::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partnership $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partnership $partner)
    {
        $context = [];
        $context['page_title'] = "Edit { $partner->name } ";
        $context['page_table_title'] = "Edit Partnership";
        $context['result'] = $partner;
        return view('dashboards.admin1.partnership.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnershipRequest $request, Partnership $partner)
    {
        $data = $request->validated();
        // dd($data);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'] . 'partnership',
                'public'
            );


            // Save media
            $media = Media::create([
                'media' => $path,
                'title' => $data['name'],
            ]);

            // Store media path in volunteers table
            $data['image'] = $media->media;
        }

        // Update the volunteer record
        $partner->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partnership $partner)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($partner->image && \Storage::disk('public')->exists($partner->image)) {
                \Storage::disk('public')->delete($partner->image);
            }

            // Delete the volunteer record
            $partner->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Volunteer deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('partners.index');
    }
}
