@php
    function status($str)
    {
        return $str ? "Active" : "Not Active";
    }
@endphp


<form action="{{ route('partners.update', ['partner' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="row mb-4 mt-4">
        <img src="/storage/{{ $result->image }}"  alt="{{ $result->name }}" width="100" height="300">
    </div>
    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Picture</label>
            <input type="file" name="image" class="form-control input-default">
        </div>

        <div class="col-lg-6">
            <label >TagName</label>
            <input value="{{ $result->tag }}" type="text" name="tag" class="form-control input-default" placeholder="Tag Name" required>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Fullname</label>
            <input value="{{ $result->name }}" type="text" name="name" class="form-control input-default" placeholder="Fullname" required>
        </div>

        <div class="col-lg-6">
            <label >Email Address</label>
            <input value="{{ $result->email }}" type="email" name="email" class="form-control input-default" placeholder="Email Address" required>
        </div>
    </div>

    <div class="mb-3">
        <label >Phone</label>
        <input value="{{ $result->phone }}" type="tel" name="phone" class="form-control input-default" placeholder="+234 *******" required>
    </div>

    <div class="mb-3">
        <label >Address</label>
        <input value="{{ $result->address }}" type="text" name="address" class="form-control input-default" placeholder="Address required">
    </div>

    <div class="mb-3 row">
        <div class="col-lg-6">
            <label >Date Of Birth</label>
            <input value="{{ \Carbon\Carbon::parse($result->dob)->format('Y-m-d') }}" type="date" name="dob" class="form-control input-default" required>
        </div>

        <div class="col-lg-6">
            <label >Occupation</label>
            <input value="{{ $result->occupation }}" type="text" name="occupation" class="form-control input-default" placeholder="Occupation" required>
        </div>
    </div>


    <button type="submit" class="btn light btn-primary">Submit</button>
</form>