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
                            <form action="{{ route('content.store', ['type_name' => 'settings', 'page_name' => 'settings']) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div>
                                        <label>Site Name</label>
                                        <input value="{{ $object->sitename ?? 'sitename'}}" placeholder="Sitename"
                                            class="form-control form-control-sm" type="tel" name="sitename">
                                    </div>
                                    <div class="mt-2">
                                        <label>Choose A Logo</label>
                                        <select required name="logo" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option 
                                                @if ($object->logo === 'storage/' . $media->media )
                                                selected
                                                @endif
                                                value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <label>Choice A Favicon Image</label>
                                        <select required name="favicon" class="form-control form-control-sm">
                                            @foreach ($medias as $media)
                                                <option @if ($object->favicon === 'storage/' . $media->media )
                                                selected
                                                @endif value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="mt-2">
                                        <label>Footer Description</label>
                                        <textarea rows="5" placeholder="Description" class="form-control form-control-sm"
                                            name="footer_description">{{ $object->footer_description ?? ''}}</textarea>
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