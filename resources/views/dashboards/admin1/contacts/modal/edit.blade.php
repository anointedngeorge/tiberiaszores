
<form action="{{ route('events.update', ['event' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="row mt-3 mb-3">
        <div class="col-lg-4 mb-3 mt-3">
            <label>Event Start</label>
            <input type="date" value="{{ \Carbon\Carbon::parse($result->start)->format('Y-m-d') }}" name="start" class="form-control input-default">
        </div>
        <div class="col-lg-4 mb-3 mt-3">
            <label>Event End</label>
            <input type="date" value="{{ \Carbon\Carbon::parse($result->end)->format('Y-m-d') }}" name="end" class="form-control input-default">
        </div>

        <div class="col-lg-4 mb-3 mt-3">
            <label>Event Time</label>
            <input type="time" value="{{ \Carbon\Carbon::parse($result->time)->format('H:i') }}"  name="time" class="form-control input-default">
        </div>
    </div>
    <div class="mb-3"> 
        <label>Event Title</label>
        <input type="text" value="{{ $result->title }}" name="title" class="form-control input-default" placeholder="Event Title" required>
    </div>

    <div class="mb-3"> 
        <label>Event Address</label>
        <input type="text" value="{{ $result->address }}" name="address" class="form-control input-default" placeholder="Event Address" required>
    </div>

    <div class="mb-3">
        <label>Event Description</label>
        <textarea name="content" class="form-control">
            {{ $result->content }}
        </textarea>
    </div>

    <div class="mb-3"> 
        <label>Event Image</label>
        <input type="file" name="image" class="form-control input-default">
    </div>

    <div class="row mb-3">
        <img src="/storage/{{ $result->image }}" alt="{{ $result->title }}" width="100" height="200">
    </div>


    <button type="submit" class="btn light btn-primary">Submit</button>
</form>