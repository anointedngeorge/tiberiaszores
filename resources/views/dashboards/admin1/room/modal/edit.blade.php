
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp



<form action="{{ route('room.update', ['room' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    
    <div class="mb-3">
        <label>Room Name</label>
        <input type="text" value="{{ $result->name }}" name="name" class="form-control input-default" placeholder="Room Name" required>
    </div>

    <div class="mb-3">
        <label >Choose Hotel </label>
        <select name="hotel" required class="form-select" aria-label="Floating label select example">
            @foreach ($hotels as $ht )
                <option  @if ($ht->id == $result->hotel  )
                    selected
                @endif  value={{ $ht->id  }}> {{ $ht->name }} </option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label >Choose Room Type</label>
        <select name="type" required class="form-select" aria-label="Floating label select example">
            @foreach ($room_types as $type )
                <option  @if ($type->id == $result->type)
                    selected
                @endif  value={{ $type->id  }}> {{ $type->name }} </option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label >Featured Image</label>
        <select name="featured_image" required class="form-select" aria-label="Floating label select example">
            @foreach ($medias as $media )
                <option @if ($media->media == $result->image   )
                    selected
                @endif  value={{ $media->media  }}> {{ $media->title }} </option>
            @endforeach            
        </select>
    </div>

    <div class="mb-3">
        <label>Room Capacity</label>
        <input type="number" value="{{ $result->capacity }}" name="capacity" class="form-control input-default" required>
    </div>

    <div class="mb-3">
        <label>Room Description</label>
        <textarea name="description" class="form-control">{{$result->description }}</textarea>
    </div>

    <div class="mb-3">
        <label >Choose Images </label>
        <table class="table table-sm table-compact">
            <tr>
                @foreach ($medias as $md )
                {{-- <option value={{ $md->id  }}> {{ $md->title }} </option></option> --}}
                <td>
                    <label>
                        <input   style="width: -0.5;" type="checkbox" value="{{ 'storage/'. $md->media }}" name="images">
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

    <button type="submit" class="btn light btn-primary">Update</button>
</form>