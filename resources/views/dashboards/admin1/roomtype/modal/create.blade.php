<form action="{{ route('room-type.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label >Name</label>
        <input type="text" name="name" class="form-control input-default" placeholder="Room Type" required>
    </div>

    <div class="mb-3">
        <label>Price/Night</label>
        <input type="number" value="0" name="price_per_night" class="form-control input-default"  required>
    </div>
    <div class="mb-3">
        <label>Capacity</label>
        <input type="number" name="capacity" value="0" class="form-control input-default" required>
    </div>

    <div class="mb-3">
        {{-- <input type="text" name="name" class="form-control input-default" placeholder="Hotel Name" required> --}}
        {{-- <div id="ckeditor"></div> --}}
        <label >Description</label>
        <textarea class="form-control" rows='10' name="description" id="ckeditor"></textarea>
    </div>


    <button type="submit" class="btn light btn-primary">Submit</button>
</form>