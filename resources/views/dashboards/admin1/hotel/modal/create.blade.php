<form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" name="name" class="form-control input-default" placeholder="Hotel Name" required>
    </div>

    <div class="mb-3">
        <label for="floatingPassword">hotel Status</label>
        <select name="status" required class="form-select"

            aria-label="Floating label select example">
            <option value={{ 1 }}>Active</option></option>
            <option value={{ 0 }}>In-Active</option>
        </select>
       
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>