
@php
    $data = loadSingleData('offices', 'settings');
    $settings = loadSingleData('settings', 'settings');
@endphp


<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('frontend.index') }}" class="navbar-brand p-0">
                <h1 class="m-0">
                <img src="{{ asset($settings->logo ?? config('data.logo')) }}" id="logo" />    
                {{ $settings->sitename ?? "TiberiasZores" }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            @include('frontend.theme1.component.general.navlinks')
        </nav>

    </div>