<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVolunteersRequest;
use App\Http\Requests\UpdateVolunteersRequest;
use App\Http\Resources\VolunteersResource;
use App\Models\Media;
use App\Models\Volunteers;
use Str;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Volunteers::query()->paginate(550);
        // $products = [];
        // 
        $context['page_title'] = "List all Volunteers";
        $context['page_table_title'] = "All Volunteers";
        $context['messages'] = session();
        $context['results'] = VolunteersResource::collection($products);

        // return view
        return view('dashboards.admin1.volunteers.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.volunteers.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVolunteersRequest $request)
    {
        $data = $request->validated();

        // dd($data);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'],
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

        Volunteers::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Volunteer successfully created");

        return to_route('volunteer.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Volunteers $volunteers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteers $volunteer)
    {
        $context = [];
        $context['page_title'] = "Edit { $volunteer->name } ";
        $context['page_table_title'] = "Edit Volunteer";
        $context['result'] = $volunteer;
        return view('dashboards.admin1.volunteers.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolunteersRequest $request, Volunteers $volunteer)
    {
        $data = $request->validated();
        // dd($data);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'],
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
        $volunteer->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Volunteer successfully updated");

        return to_route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteers $volunteer)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($volunteer->image && \Storage::disk('public')->exists($volunteer->image)) {
                \Storage::disk('public')->delete($volunteer->image);
            }

            // Delete the volunteer record
            $volunteer->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Volunteer deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('volunteer.index');
    }
}
