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
                                action="{{ route('content.store', ['type_name' => 'frontend', 'page_name' => 'sliders', 'is_queryset' => 'y']) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div>
                                        <label>Title</label>
                                        <input required placeholder="slider title" class="form-control form-control-sm"
                                            type="text" name="title">
                                    </div>

                                    <div>
                                        <label>Classname</label>
                                        <input placeholder="Classname" class="form-control form-control-sm" type="text"
                                            name="classname">
                                    </div>

                                    <div class="mt-2">
                                        <label>Slider Image</label>
                                        <select name="image" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <img src="{{ asset($data['image2']) }}" width="60" height="60"
                                            style="object-fit:cover; border-radius:8px;">
                                        <br>
                                        <label>Slider Image2</label>
                                        <select required name="image2" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option @if ($data['image'] === 'storage/' . $media->media) selected @endif
                                                    value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
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
                                        <button class="btn btn-block btn-primary " type="submit">Add Slider</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @include('dashboards.admin1.sliders.table')
                </div>

            </div>
        </div>
    </div>


@endsection