<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Http\Resources\MediaResource;
use App\Models\Media;
use Str;
use Storage;


class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Media::query()->paginate(550);
        $context['page_title'] = "View All Media";
        $context['page_table_title'] = "All Media Files";
        $context['messages'] = session();
        $context['medias'] = MediaResource::collection($products);

        // return view
        return view('dashboards.admin1.media.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Create A New Media";
       
        // return view
        return view('dashboards.admin1.media.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaRequest $request)
    {
        $data = $request->validated();
        $image = $data['media'] ?? null;
        // 
        if ($image) {
            $data['media'] = $image->store('medias/' . Str::random(), 'public');
        }

        Media::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Media Created.');

        return to_route('media.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $medium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $medium)
    {
        $context = [];
        $context['page_title'] = "Edit { $medium->title } ";
        $context['page_table_title'] = "Edit Media Files";
        $context['media'] = $medium;
        // return view
        return view('dashboards.admin1.media.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaRequest $request, Media $medium)
    {
        $data = $request->validated();
        
        $image = $data['media'] ?? null;
            // 
            if ($image && $medium->media) {
        
                Storage::disk('public')->deleteDirectory(dirname($medium->media));
                $data['media'] = $image->store('medias/' . Str::random(), 'public');
            }

        $medium->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $medium->title } Updated.");

        return to_route('media.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $medium)
    {
        $medium->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $medium->title } Updated.");

        return to_route('media.index');
    }
}
