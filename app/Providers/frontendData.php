<?php

namespace App\Providers;

use App\Http\Resources\BlogResource;
use App\Http\Resources\EventsResource;
use App\Http\Resources\PartnershipResource;
use App\Http\Resources\VolunteersResource;
use App\Models\Blogs;
use App\Models\MEvents;
use App\Models\Partnership;
use App\Models\Volunteers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class frontendData extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            $volunteers = Volunteers::all();
            $events = MEvents::all();
            $blog  =   Blogs::all();
            $partners = Partnership::all();

            $data = (object)[
                'volunteers' => VolunteersResource::collection($volunteers)->toArray(request()),
                'events' => EventsResource::collection($events)->toArray(request()),
                'partners' => PartnershipResource::collection($partners)->toArray(request()),
                'blogs' => BlogResource::collection($blog)->toArray(request())
            ];

            
            $view->with('frontendData', $data);
        });
    }
}
