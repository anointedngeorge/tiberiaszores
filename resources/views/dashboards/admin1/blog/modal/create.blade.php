<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Blog Picture</label>
        <input type="file" name="image" class="form-control input-default" required>
    </div>
    <div class="mb-3">
        <label>Blog Title</label>
        <input type="text" name="title" class="form-control input-default" placeholder="Blog Title" required>
    </div>

    <div class="mb-3">
        <label>Blog Content</label>
        <textarea rows="10" name="content" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn light btn-primary">Create Post</button>
</form>