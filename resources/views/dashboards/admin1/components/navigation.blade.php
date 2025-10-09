<?php

$links = [

    (object) [
        "icon" => "flaticon-025-dashboard",
        "name" => "Dashboard",
        "has_children" => false,
        "children" => [
            // (object) [
            //     "name" => "hi",
            //     "href" => "/"
            // ]
        ],
        "href" => "dashboard",
    ],

    (object) [
        "icon" => "flaticon-381-user",
        "name" => "Volunteers",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "volunteer.index",
    ],

    (object) [
        "icon" => "flaticon-381-user",
        "name" => "Partnership",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "partners.index",
    ],

    (object) [
        "icon" => "flaticon-381-user",
        "name" => "Blog Post",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "blog.index",
    ],

    (object) [
        "icon" => "flaticon-381-user",
        "name" => "Events",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "events.index",
    ],

    (object) [
        "icon" => "flaticon-381-user",
        "name" => "Contacts",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "contacts.index",
    ],


    (object) [
        "icon" => "flaticon-381-photo-camera",
        "name" => "Media",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => "/"
            ]
        ],
        "href" => "media.index",
    ],

    // (object)[
    //     "icon" => "flaticon-381-wifi-2",
    //     "name" => "Hotel",
    //     "has_children" => true,
    //     "children" => [
    //         (object) [
    //             "name" => "Rooms",
    //             "href" => "room.index"
    //         ]

    //     ],
    //     "href" => "dashboard",
    // ],



    // (object)[
    //     "icon" => "flaticon-381-user",
    //     "name" => "Frontend",
    //     "has_children" => true,
    //     "children" => [
    //         (object) [
    //             "name" => "HomePage",
    //             "href" => null
    //         ],

    //     ],
    //     "href" => null,
    // ],

    (object) [
        "icon" => "flaticon-381-settings",
        "name" => "Settings",
        "has_children" => false,
        "children" => [
            (object) [
                "name" => "hi",
                "href" => null
            ]
        ],
        "href" => "setting.index",
    ],

];


?>


<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @foreach ($links as $link)
                <li>
                    <a class="{{ $link->has_children ? 'has-arrow' : '' }} ai-icon {{ Route::currentRouteName() === $link->href ? 'mm-active' : '' }}"
                        href="{{ $link->has_children ? 'javascript:void(0)' : route($link->href) }}" aria-expanded="false">
                        <i class="{{ $link->icon }}"></i>
                        <span class="nav-text">{{ $link->name }}</span>
                    </a>

                    @if ($link->has_children && !empty($link->children))
                        <ul aria-expanded="false">
                            @foreach ($link->children as $child)
                                <li>
                                    <a href="{{ !empty($child->href) ? route($child->href) : '#' }}">
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