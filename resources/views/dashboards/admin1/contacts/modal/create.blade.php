<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mt-3 mb-3">
        <div class="col-lg-4 mb-3 mt-3">
            <label>Event Start</label>
            <input type="date" name="start" class="form-control input-default">
        </div>
        <div class="col-lg-4 mb-3 mt-3">
            <label>Event End</label>
            <input type="date" name="end" class="form-control input-default">
        </div>
        <div class="col-lg-4 mb-3 mt-3">
            <label>Event Time</label>
            <input type="time"  name="time" class="form-control input-default">
        </div>
    </div>
    <div class="mb-3"> 
        <label>Event Title</label>
        <input type="text" name="title" class="form-control input-default" placeholder="Event Title" required>
    </div>

    <div class="mb-3"> 
        <label>Event Address</label>
        <input type="text" name="address" class="form-control input-default" placeholder="Event Address" required>
    </div>

    <div class="mb-3">
        <label>Event Description</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

    <div class="mb-3"> 
        <label>Event Image</label>
        <input type="file" name="image" class="form-control input-default" required>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>