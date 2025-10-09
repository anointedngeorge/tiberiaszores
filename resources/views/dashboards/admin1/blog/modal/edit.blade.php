
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp


<form action="{{ route('blog.update', ['blog' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row mt-3 mb-3">
        <img src="/storage/{{ $result->image }}" alt="{{ $result->title }}" width="100" height="300">
    </div>

    <div class="mb-3">
        <label>Blog Picture</label>
        <input type="file" name="image" class="form-control input-default">
    </div>
    <div class="mb-3">
        <label>Blog Title</label>
        <input value="{{ $result->title }}" type="text" name="title" class="form-control input-default" placeholder="Blog Title" required>
    </div>

    <div class="mb-3">
        <label>Blog Content</label>
        <textarea  name="content" class="form-control" rows="10">
            {{ $result->content }}
        </textarea>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>