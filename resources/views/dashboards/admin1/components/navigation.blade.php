<?php

$links = [

    (object) [
        "icon" => "flaticon-025-dashboard",
        "name" => "Dashboard",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/",
                'param' => []
            ]
        ],
        "href" => "dashboard",
        'param' => []
    ],

    (object) [
        "icon" => "flaticon-381-photo-camera",
        "name" => "Media",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/",
                'param' => []
            ]
        ],
        "href" => "media.index",
        'param' => []
    ],

    (object) [
        "icon" => "flaticon-381-settings",
        "name" => "Frontend",
        "has_children" => true,
        "children" => [
            (object) [
                "name" => "Slider",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"Sliders Settings", 'page_name'=>"sliders", 'is_queryset'=>'y']
            ],
            (object) [
                "name" => "Services",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"Services Section", 'page_name'=>"services", 'is_queryset'=>'y']
            ],

            (object) [
                "name" => "Blog/News",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"Blog News", 'page_name'=>"news", 'is_queryset'=>'y']
            ],

            (object) [
                "name" => "Home About",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"HomePage About us", 'page_name'=>"about1"]
            ],

            (object) [
                "name" => "About us",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"About us", 'page_name'=>"about2"]
            ],
        ],
        "href" => "setting.index",
        'param' => []
    ],

    (object) [
        "icon" => "flaticon-381-settings",
        "name" => "Settings",
        "has_children" => true,
        "children" => [
            (object) [
                "name" => "Settings",
                "href" => "content.index",
                'param' => ['type_name'=> 'settings', 'page_title'=>"Main Settings", 'page_name'=>"settings"]
            ],

            (object) [
                "name" => "Office",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"Office Settings", 'page_name'=>"offices"]
            ],

            (object) [
                "name" => "Comport Ports",
                "href" => "content.index",
                'param' => ['type_name'=> 'frontend', 'page_title'=>"Company Ports", 'page_name'=>"ports", 'is_queryset'=>'y']
            ],

        ],
        "href" => null,
        'param' => []
    ],

];


?>


<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @foreach ($links as $link)
                <li>
                    <a class="{{ $link->has_children ? 'has-arrow' : '' }} ai-icon {{ Route::currentRouteName() === $link->href ? 'mm-active' : '' }}"
                        href="{{ $link->has_children ? 'javascript:void(0)' : route($link->href, $link->param) }}" aria-expanded="false">
                        <i class="{{ $link->icon }}"></i>
                        <span class="nav-text">{{ $link->name }}</span>
                    </a>

                    @if ($link->has_children && !empty($link->children))
                        <ul aria-expanded="false">
                            @foreach ($link->children as $child)
                                <li>
                                    <a href="{{ !empty($child->href) ? route($child->href, $child->param) : '#' }}">
                                        {{ $child->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>

        <div class="copyright">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <strong>{{ auth()->user()->name }}</strong>
                <p class="fs-12 mt-2">
                    <button type="submit" class="btn btn-link p-0">Logout</button>
                </p>
            </form>
        </div>
    </div>
</div>