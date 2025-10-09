<form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Booking Name</label>
        <input type="text" name="name" class="form-control input-default" placeholder="Booking Name" required>
    </div>

    <div class="mb-3">
        <label >Checkin </label>
        <input type="date" name="checkin" class="form-control input-default">
    </div>

    {{-- <div class="mb-3">
        <label >Checkout </label>
        <input type="date" name="checkout" class="form-control input-default">
    </div> --}}

    <div class="mb-3">
        <label >Guest</label>
        <select name="guest" required class="form-select" aria-label="Floating label select example">
            @foreach ($guests as $guest )
                <option value={{ $guest->id  }}> {{ $guest->fullname() }} </option>
            @endforeach            
        </select>
    </div>


    <div class="mb-3">
        <label >Rooms</label>
        <select name="room" required class="form-select" aria-label="Floating label select example">
            @foreach ($rooms as $room )
                <option value={{ $room->id  }}> {{ $room->name }} </option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label >Total Price</label>
        <input type="number" name="total_price" value="0" class="form-control input-default" required>
    </div>


    <div class="mb-3">
        <label >Booking Status</label>
        <select name="status" required class="form-select" aria-label="Floating label select example">
            <option value="reserved"> Reserved </option>
            <option value="paid"> Paid </option>
            <option value="pending"> Nothing </option>
        </select>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>