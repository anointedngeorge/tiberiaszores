<?php

namespace App\Http\Controllers;

use App\Http\Resources\MediaResource;
use App\Models\Contents;
use App\Models\Media;
use Hamcrest\Description;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type_name = 'offices', $page_title = "Offices", $page_name, $is_queryset = "n")
    {
        $context = [];
        $context['page_title'] = $page_title;
        $context['messages'] = session();

        $media = Media::query()->paginate(3000);
        $context['medias'] = MediaResource::collection($media);

        $obj = Contents::where('type', $type_name)
            ->where('title', $page_name);


        $queryset_check = ['y' => true, 'n' => false];
        if ($obj) {
            if (!$queryset_check[$is_queryset]) {
                if ($obj->first()) {
                    $context['object'] = json_decode($obj->first()->description);
                } else {
                    $context['object'] = [null];
                }
            } else {
                $context['object'] = json_decode($obj->description);
            }
        } else {
            $context['object'] = [null];
        }

        return view("dashboards.admin1.$type_name.create", $context);
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
    public function store(Request $request, $type_name, $page_name)
    {
        // Remove internal fields
        $data = $request->except(['_token', '_method', 'submit']);

        // Store or update one record per type
        Contents::updateOrCreate(
            ['type' => $type_name, 'title' => $page_name],
            ['description' => json_encode($data)]
        );

        session()->flash('type', 'success');
        session()->flash('message', ucfirst($type_name) . " settings updated");

        return to_route('content.index', [
            'type_name' => $type_name,
            'page_title' => ucfirst($type_name) . " " . $page_name,
            'page_name' => $page_name
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Contents $contents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contents $contents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contents $contents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contents $contents)
    {
        //
    }
}
