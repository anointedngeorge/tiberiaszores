
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp



<form action="{{ route('room-type.update', ['room_type' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    
    <div class="mb-3">
        <label >Name</label>
        <input type="text" name="name" value="{{ $result->name }}" class="form-control input-default" placeholder="Room Type" required>
    </div>

    <div class="mb-3">
        <label>Price/Night</label>
        <input type="number" value="{{ $result->price_per_night }}" name="price_per_night" class="form-control input-default"  required>
    </div>
    <div class="mb-3">
        <label>Capacity</label>
        <input type="number" name="capacity" value="{{ $result->capacity }}" class="form-control input-default" required>
    </div>

    <div class="mb-3">
        {{-- <input type="text" name="name" class="form-control input-default" placeholder="Hotel Name" required> --}}
        {{-- <div id="ckeditor"></div> --}}
        <label >Description</label>
        <textarea class="form-control" rows='10' name="description" id="ckedito">
            {{ $result->description }}
        </textarea>
    </div>


    <button type="submit" class="btn light btn-primary">Update</button>
</form>