<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\StorePartnershipRequest;
use App\Http\Requests\StoreVolunteersRequest;
use App\Models\Contacts;
use App\Models\Media;
use App\Models\Partnership;
use App\Models\Volunteers;
use App\Services\CpanelEmailService;
use Illuminate\Support\Facades\Request;
use Session;
use Str;

use function Pest\Laravel\get;

class FrontendController extends Controller
{
    
    public function index()
    {

        $pagename = Request()->query('q');
        $name = strtolower($pagename); // Capitalize first letter to match view name
        $data = [];

        switch ($name) {

            case 'about':
                $data['page_title'] = "About Us";
                return view("frontend.theme1." . $name, $data);
            case 'contact':
                $data['page_title'] = "Contact Us";
                return view("frontend.theme1." . $name, $data);

            case 'news':
                $data['page_title'] = "Activities";
                return view("frontend.theme1." . $name, $data);


            
            default:
                $data['page_title'] = "Welcome To " . config('data.name');
                return view("frontend.theme1.index", $data);
        }
    }


    public function register_volunteer(StoreVolunteersRequest $request)
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
        session()->flash('message', "{$data['name']} successfully enrolled into our volunteer program");

        return to_route('frontend.index');
    }


    public function register_partnership(StorePartnershipRequest $request)
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
        session()->flash('message', "{$data['name']} Successfully enrolled into our partnership program.");

        return to_route('frontend.index');
    }

    public function contacts(StoreContactsRequest $request)
    {
        $data = $request->validated();

        Contacts::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Dear {$data['name']}, we'll get back to you shortly .");

        return to_route('frontend.index');
    }



}
