<?php

namespace App\Http\Controllers;

use App\Http\Resources\MediaResource;
use App\Models\Contents;
use App\Models\Media;
use App\Services\CpanelEmailService;
use Hamcrest\Description;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    protected $cpanelService;

    public function __construct(CpanelEmailService $cpanelService)
    {
        $this->cpanelService = $cpanelService;
    }

    public function createEmail($username, $password, $domain)
    {
        $response = $this->cpanelService->createCpanelEmail($username, $password, $domain);
        return response()->json($response);
    }
    public function index(
        string $page_name,
        string $page_title,
        string $type_name,
        $is_queryset = 'n'
    ) {
        $context = [];
        $context['page_title'] = $page_title;
        $context['messages'] = session();

        $media = Media::query()->paginate(3000);
        $context['medias'] = MediaResource::collection($media);



        if ($is_queryset === 'y') {
            // Return all items for this type (queryset mode)
            $context['objects'] = Contents::where('type', $page_name)
                ->where('title', $type_name)
                ->orderByDesc('id')
                ->get();
        } else {
            // Fetch content object or null
            $obj = Contents::where('type', $page_name)
                ->where('title', $type_name)
                ->first();
            // Return single object
            $context['object'] = $obj ? json_decode($obj->description) : null;
        }

        return view("dashboards.admin1.$page_name.create", $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $page_name, $type_name, $is_queryset = 'n')
    {
        // Remove internal fields
        $data = $request->except(['_token', '_method', 'submit']);

        // Define query mode check
        $queryset_check = ['y' => true, 'n' => false];

        // If not queryset => updateOrCreate single record
        if (!$queryset_check[$is_queryset]) {
            Contents::updateOrCreate(
                ['type' => $page_name, 'title' => $type_name],
                ['description' => json_encode($data)]
            );
        }
        // If queryset => create new row every time
        else {
            Contents::create([
                'type' => $page_name,
                'title' => $type_name,
                'description' => json_encode($data)
            ]);
        }

        // Flash success message
        session()->flash('type', 'success');
        session()->flash('message', ucfirst($page_name) . " settings updated");

        // Redirect back to index
        return to_route('content.index', [
            'type_name' => $type_name,
            'page_title' => ucfirst($page_name) . " " . ucfirst($type_name),
            'page_name' => $page_name,
            'is_queryset' => $is_queryset
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
    public function edit(
        Contents $content,
        string $page_name,
        string $page_title,
    ) {
        $context = [];
        $context['page_title'] = $page_title;

        $media = Media::query()->paginate(3000);
        $context['medias'] = MediaResource::collection($media);
        // return view
        $pagename = "dashboards.admin1." . $page_name . ".modal.edit";
        $context['object'] = $content;
        return view($pagename, $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contents $content, string $page_name, string $type_name)
    {
        // Remove internal fields
        $data = $request->except(['_token', '_method', 'submit']);

        Contents::where('id', $content->id)->update(['description' => json_encode(value: $data)]);

        // Flash success message
        session()->flash('type', 'success');
        session()->flash('message', ucfirst($page_name) . " settings updated");

        // Redirect back to index
        return to_route('content.index', [
            'type_name' => $type_name,
            'page_title' => ucfirst($page_name) . " " . ucfirst($type_name),
            'page_name' => $page_name,
            'is_queryset' => "y"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Contents $content,
        string $page_name,
        string $type_name,
    ) {

        // Delete the record
        $content->delete();

        // Flash success message
        session()->flash('type', 'success');
        session()->flash('message', ucfirst($page_name) . " record deleted successfully");

        // Redirect back to index
        return to_route('content.index', [
            'type_name' => $type_name,
            'page_title' => ucfirst($page_name) . " " . ucfirst($type_name),
            'page_name' => $page_name,
            'is_queryset' => 'y',
        ]);
    }


     public function cPanelEmail(Request $request, $page_name, $type_name, $is_queryset = 'n')
    {
        // Remove internal fields
        $data = $request->except(['_token', '_method', 'submit']);

        // Define query mode check
        $queryset_check = ['y' => true, 'n' => false];


        $username = $request->input('username');
        $password = $request->input('password');
        $domain = $request->input('domain');

        $result = $this->createEmail($username, $password, $domain);

        if (!$request['statusCode'] === 200) {
             // Flash success message
            session()->flash('type', 'error');
            session()->flash('message', "Cpanel Email Creation failed");

            // Redirect back to index
            return to_route('content.index', [
                'type_name' => $type_name,
                'page_title' => ucfirst($page_name) . " " . ucfirst($type_name),
                'page_name' => $page_name,
                'is_queryset' => $is_queryset
            ]);
        }


        // If not queryset => updateOrCreate single record
        if (!$queryset_check[$is_queryset]) {
            Contents::updateOrCreate(
                ['type' => $page_name, 'title' => $type_name],
                ['description' => json_encode($data)]
            );
        }
        // If queryset => create new row every time
        else {
            Contents::create([
                'type' => $page_name,
                'title' => $type_name,
                'description' => json_encode($data)
            ]);
        }

        // Flash success message
        session()->flash('type', 'success');
        session()->flash('message', ucfirst($page_name) . " settings updated");

        // Redirect back to index
        return to_route('content.index', [
            'type_name' => $type_name,
            'page_title' => ucfirst($page_name) . " " . ucfirst($type_name),
            'page_name' => $page_name,
            'is_queryset' => $is_queryset
        ]);
    }



}
