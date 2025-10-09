<form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" name="title" class="form-control input-default" placeholder="Title" required>
    </div>

    <div class="mb-3">
        <input type="file" name="media" class="form-control input-default ">
    </div>

    <div class="mb-3">
        <select name="is_active" required class="form-select"
            aria-label="Floating label select example">
            <option value={{ 1 }}>Active</option></option>
            <option value={{ 0 }}>In-Active</option>
        </select>
        <label for="floatingPassword">Media Status</label>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>