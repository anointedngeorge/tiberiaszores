<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogsRequest;
use App\Http\Requests\UpdateBlogsRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blogs;
use App\Models\Media;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Blogs::query()->paginate(550);
        $context['page_title'] = "List all blogs";
        $context['page_table_title'] = "All Blogs";
        $context['messages'] = session();
        $context['results'] = BlogResource::collection($products);

        // return view
        return view('dashboards.admin1.blog.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.blog.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogsRequest $request)
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

        Blogs::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blog)
    {
        $context = [];
        $context['page_title'] = "Edit { $blog->title } ";
        $context['page_table_title'] = "Edit Blog";
        $context['result'] = $blog;
        return view('dashboards.admin1.blog.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogsRequest $request, Blogs $blog)
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
        $blog->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blog)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($blog->image && \Storage::disk('public')->exists($blog->image)) {
                \Storage::disk('public')->delete($blog->image);
            }

            // Delete the volunteer record
            $blog->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Blog deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('blog.index');
    }
}
