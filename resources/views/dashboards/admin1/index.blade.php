@extends('dashboards.admin1.layout')


@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @include("dashboards.admin1.dash.cards")
            {{-- @include("dashboards.admin1.components.dash.chart") --}}
        </div>
    </div>

@endsection