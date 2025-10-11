<form action="{{ route('guest.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control input-default" placeholder="firstname" required>
    </div>

    <div class="mb-3">
        <label >Lastname </label>
        <input type="text" name="lastname" class="form-control input-default" placeholder="lastname" required>
    </div>

    <div class="mb-3">
        <label >Email Address</label>
        <input type="email" name="email" class="form-control input-default" placeholder="support@example.com" required>
    </div>

    <div class="mb-3">
        <label >Phone</label>
        <input type="text" name="phone" class="form-control input-default" placeholder="phone" required>
    </div>

    <div class="mb-3">
        <label>Address</label>
        <input type="text"  name="address" class="form-control input-default" placeholder="address" required>
    </div>
    {{--  --}}
    <button type="submit" class="btn light btn-primary">Submit</button>
</form>