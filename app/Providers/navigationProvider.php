<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class navigationProvider extends ServiceProvider
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
        View::composer('*', function ($view) {
            $pages = [
                [
                    'title' => 'Home',
                    'url'   => route('frontend.index'),
                    'show_on_footer' => true,
                    'show_on_header' => true,
                    'active_check'   => fn() => request()->is('/') && request()->uri() == '',
                ],
                // [
                //     'title' => 'About',
                //     'url'   => route('frontend.index', ['q' => 'about']),
                //     'show_on_footer' => true,
                //     'show_on_header' => true,
                //     'active_check'   => fn() => request()->query('q') === 'about',
                // ],
                [
                    'title' => 'Events',
                    'url'   => route('frontend.index', ['q' => 'events']),
                    'show_on_footer' => true,
                    'show_on_header' => true,
                    'active_check'   => fn() => request()->query('q') === 'events',
                ],
                [
                    'title' => 'Volunteer',
                    'url'   => route('frontend.index', ['q' => 'volunteer']),
                    'show_on_footer' => true,
                    'show_on_header' => true,
                    'active_check'   => fn() => request()->query('q') === 'volunteer',
                ],
                [
                    'title' => 'Partnership',
                    'url'   => route('frontend.index', ['q' => 'partnership']),
                    'show_on_footer' => true,
                    'show_on_header' => true,
                    'active_check'   => fn() => request()->query('q') === 'partnership',
                ],

                
                [
                    'title' => 'Contact',
                    'url'   => route('frontend.index', ['q' => 'contact']),
                    'show_on_footer' => false,
                    'show_on_header' => true,
                    'active_check'   => fn() => request()->query('q') === 'contact',
                ],
            ];
            
            $navigationProvider = collect($pages)->map(function ($page) {
                return (object) [
                    'title'          => $page['title'],
                    'url'            => $page['url'],
                    'show_on_footer' => $page['show_on_footer'],
                    'show_on_header' => $page['show_on_header'],
                    'current'        => call_user_func($page['active_check']),
                ];
            });
            
            $view->with('navigationProvider', $navigationProvider);
        });
    }
}
