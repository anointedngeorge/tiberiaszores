@extends('dashboards.admin1.layout')


@section('content')

    {{-- all modals --}}
    @include("dashboards.admin1.modal")


    <div class="content-body">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">

                                @if ($page_title)
                                    {{ $page_title }}
                                @else
                                    ...
                                @endif
                            </h4>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('content.store', ['type_name' => 'frontend', 'page_name' => 'news', 'is_queryset' => 'y']) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div>
                                        <label>Title</label>
                                        <input placeholder="slider title" class="form-control form-control-sm" type="text"
                                            name="title">
                                    </div>
                                    <div>
                                        <label>Location</label>
                                        <input placeholder="location" class="form-control form-control-sm" type="text"
                                            name="location">
                                    </div>
                                    <div class="mt-2">
                                        <label>News Image</label>
                                        <select name="image" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option value="{{ 'storage/'.$media->media }}"> {{ $media->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <label>Content</label>
                                        <textarea rows="5" placeholder="Content" class="form-control form-control-sm"
                                            name="content"></textarea>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="mt-3">
                                        <button class="btn btn-block btn-primary " type="submit">Add News</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @include('dashboards.admin1.services.table')
                </div>
                
            </div>
        </div>
    </div>


@endsection