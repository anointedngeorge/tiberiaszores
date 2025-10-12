
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp



<form action="{{ route('guest.update', ['guest' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    
    <div class="mb-3">
        <label>Firstname</label>
        <input type="text" value="{{ $result->firstname }}" name="firstname" class="form-control input-default" placeholder="firstname" required>
    </div>

    <div class="mb-3">
        <label >Lastname </label>
        <input type="text" value="{{ $result->lastname }}" name="lastname" class="form-control input-default" placeholder="lastname" required>
    </div>

    <div class="mb-3">
        <label >Email Address</label>
        <input type="email" value="{{ $result->email }}" name="email" class="form-control input-default" placeholder="support@example.com" required>
    </div>

    <div class="mb-3">
        <label >Phone</label>
        <input type="text" value="{{ $result->phone }}" name="phone" class="form-control input-default" placeholder="phone" required>
    </div>

    <div class="mb-3">
        <label>Address</label>
        <input type="text" value="{{ $result->address }}"  name="address" class="form-control input-default" placeholder="address" required>
    </div>

    <button type="submit" class="btn light btn-primary">Update</button>
</form>