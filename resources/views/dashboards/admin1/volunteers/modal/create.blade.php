<form action="{{ route('volunteer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Picture</label>
            <input type="file" name="image" class="form-control input-default" required>
        </div>

        <div class="col-lg-6">
            <label >TagName</label>
            <input type="text" name="tag" class="form-control input-default" placeholder="Tag Name" required>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Fullname</label>
            <input type="text" name="name" class="form-control input-default" placeholder="Fullname" required>
        </div>

        <div class="col-lg-6">
            <label >Email Address</label>
            <input type="email" name="email" class="form-control input-default" placeholder="Email Address" required>
        </div>
    </div>

    <div class="mb-3">
        <label >Phone</label>
        <input type="tel" name="phone" class="form-control input-default" placeholder="+234 *******" required>
    </div>

    <div class="mb-3">
        <label >Address</label>
        <input type="text" name="address" class="form-control input-default" placeholder="Address required">
    </div>

    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Date Of Birth</label>
            <input type="date" name="dob" class="form-control input-default" required>
        </div>

        <div class="col-lg-6">
            <label >Occupation</label>
            <input type="text" name="occupation" class="form-control input-default" placeholder="Occupation" required>
        </div>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>