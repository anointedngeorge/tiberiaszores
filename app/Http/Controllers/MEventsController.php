<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMEventsRequest;
use App\Http\Requests\UpdateMEventsRequest;
use App\Http\Resources\EventsResource;
use App\Models\Media;
use App\Models\MEvents;

class MEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = MEvents::query()->paginate(550);
        $context['page_title'] = "List all Events";
        $context['page_table_title'] = "All Events";
        $context['messages'] = session();
        $context['results'] = EventsResource::collection($products);

        // return view
        return view('dashboards.admin1.events.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.events.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMEventsRequest $request)
    {
        $data = $request->validated();

        // dd($data);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['title'],
                'public'
            );


            $media = Media::create([
                'media' => $path,
                'title' => $data['title'],
                // 'type' => $file->getClientMimeType(),
            ]);

            // Save the uploaded media path or ID to volunteers table
            $data['image'] = $media->media;
        }

        MEvents ::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MEvents $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MEvents $event)
    {
        $context = [];
        $context['page_title'] = "Edit { $event->name } ";
        $context['page_table_title'] = "Edit Event";
        $context['result'] = $event;
        return view('dashboards.admin1.events.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMEventsRequest $request, MEvents $event)
    {
        $data = $request->validated();
        // dd($data);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['title'],
                'public'
            );

            // Save media
            $media = Media::create([
                'media' => $path,
                'title' => $data['title'],
            ]);

            // Store media path in volunteers table
            $data['image'] = $media->media;
        }

        // Update the volunteer record
        $event->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MEvents $event)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($event->image && \Storage::disk('public')->exists($event->image)) {
                \Storage::disk('public')->delete($event->image);
            }

            // Delete the volunteer record
            $event->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('events.index');
    }
}
