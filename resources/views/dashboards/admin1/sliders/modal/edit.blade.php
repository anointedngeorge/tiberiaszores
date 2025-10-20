@php
    $data = decode_concat_json($object->description)[0];
@endphp


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
                        action="{{ route('content.update', ['content' => $object->id, 'type_name' => 'frontend', 'page_name' => 'sliders']) }}"
                        method="post">

                        @method('put')
                        @csrf
                        <div class="row">
                            <div>
                                <label>Title</label>
                                <input required placeholder="slider title" value="{{ $data['title'] }}"
                                    class="form-control form-control-sm" type="text" name="title">
                            </div>

                            <div>
                                <label>Classname</label>
                                <input placeholder="classname" value="{{ $data['classname'] ?? '' }}"
                                    class="form-control form-control-sm" type="text" name="classname">
                            </div>

                            <div class="mt-2">
                                <img src="{{ asset($data['image']) }}" width="60" height="60"
                                    style="object-fit:cover; border-radius:8px;">
                                <br>
                                <label>Slider Image</label>
                                <select required name="image" class="form-control form-control-sm">
                                    @foreach ($medias as $media)
                                        <option @if ($data['image'] === 'storage/' . $media->media) selected @endif
                                            value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mt-2">
                                @if (isset($data['image2']))
                                    <img src="{{ asset($data['image2']) }}" width="60" height="60"
                                        style="object-fit:cover; border-radius:8px;">
                                    <br>
                                @endif
                                <label>Slider Image2</label>
                                <select required name="image2" class="form-control form-control-sm">
                                    @foreach ($medias as $media)
                                        <option @if (isset($data['image2']) && $data['image2'] === 'storage/' . $media->media) selected @endif
                                            value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-2">
                                <label>Content</label>
                                <textarea rows="5" placeholder="Content" class="form-control form-control-sm"
                                    name="content">{{ $data['content'] }}</textarea>
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