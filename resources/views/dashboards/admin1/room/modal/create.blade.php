<form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Room Name</label>
        <input type="text" name="name" class="form-control input-default" placeholder="Room Name" required>
    </div>

    <div class="mb-3">
        <label >Choose Hotel </label>
        <select name="hotel" required class="form-select" aria-label="Floating label select example">
            @foreach ($hotels as $ht )
                <option value={{ $ht->id  }}> {{ $ht->name }} </option></option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label >Choose Room Type</label>
        <select name="type" required class="form-select" aria-label="Floating label select example">
            @foreach ($room_types as $type )
                <option value={{ $type->id  }}> {{ $type->name }} </option></option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label >Featured Image</label>
        <select name="featured_image" required class="form-select" aria-label="Floating label select example">
            @foreach ($medias as $media )
                <option value={{ $media->media  }}> {{ $media->title }} </option></option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label>Room Capacity</label>
        <input type="number" value="0" name="capacity" class="form-control input-default" required>
    </div>

    <div class="mb-3">
        <label>Room Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label >Choose Images </label>
        <table class="table table-sm table-compact">
            <tr>
                @foreach ($medias as $md )
                {{-- <option value={{ $md->id  }}> {{ $md->title }} </option></option> --}}
                <td>
                    <label>
                        <input style="width: -0.5;" type="checkbox" value="{{ 'storage/'. $md->media }}" name="images">
                        <img width="50" height="50" src="{{ asset('storage/' . $md->media ) }}" alt="{{ $md->title }}">
                        <small>{{ $md->title }}</small>
                    </label>
                </td>
            @endforeach
            </tr>
        </table>
        {{-- <select name="images" class="form-select" multiple aria-label="Floating label select example">
                        
        </select> --}}
    </div>


    <button type="submit" class="btn light btn-primary">Submit</button>
</form>