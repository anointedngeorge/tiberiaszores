<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\Http\Resources\MediaResource;
use App\Http\Resources\SettingsResource;
use App\Models\Media;
use App\Models\Settings;
use Storage;
use Str;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $context['page_title'] = "Settings";
        $context['page_table_title'] = "View Settings";
        $context['messages'] = session();
        $media = Media::query()->paginate(550);
        $context['medias'] = MediaResource::collection($media);

        // return view
        return view('dashboards.admin1.setting.list', $context);
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
    public function store(StoreSettingsRequest $request)
    {
        // dd(vars: $st);
        $keys = $request->keys();
        foreach ($keys as $key) {
            Settings::updateOrCreate(
                ['title' => $key],
                ['description' => $request->input($key)]
            );
        }

        session()->flash('type', 'success');
        session()->flash('message', "Settings updated");

        return to_route('setting.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingsRequest $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
