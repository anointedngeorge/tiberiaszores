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
                                action="{{ route('content.store', ['type_name' => 'frontend', 'page_name' => 'about2']) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="mt-2">
                                        <label>About us Image</label>
                                        <select required name="image" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option 
                                                @if ($object && $object->image === 'storage/' . $media->media) selected @endif
                                                value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <label>Title</label>
                                        <input value="{{ $object->title ?? "" }}" placeholder="title" class="form-control form-control-sm"
                                            name="title">
                                    </div>

                                     <div class="mt-2">
                                        <label>SubTitle</label>
                                        <input value="{{ $object->sub_title ?? "" }}" placeholder="SubTitle" class="form-control form-control-sm"
                                            name="sub_title">
                                    </div>


                                    <div class="mt-2">
                                        <label>Content</label>
                                        <textarea rows="5" placeholder="Content" class="form-control form-control-sm"
                                            name="content">{{ $object->content ?? "" }}</textarea>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="mt-3">
                                        <button class="btn btn-block btn-primary " type="submit">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection