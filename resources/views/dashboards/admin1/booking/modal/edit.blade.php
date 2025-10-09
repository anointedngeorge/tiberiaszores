
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp



<form action="{{ route('booking.update', ['booking' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    
    <div class="mb-3">
        <label >Checkout </label>
        <input type="date" name="checkout" class="form-control input-default">
    </div>

    {{-- <div class="mb-3">
        <label >Guest</label>
        <select name="status" required class="form-select" aria-label="Floating label select example">
            @foreach ($guests as $guest )
                <option value={{ $guest->id  }}> {{ $guest->fullname() }} </option></option>
            @endforeach            
        </select>
    </div> --}}

    <button type="submit" class="btn light btn-primary">Update</button>
</form>