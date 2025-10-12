<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @php $rowId = 1; @endphp

            @foreach ($objects as $obj)
                @foreach (decode_concat_json($obj->description) as $item)
                    <tr>

                        <td>{{ $rowId++ }}</td>
                        <td>{{ $item['title'] ?? '-' }}</td>
                        <td>
                            @if (!empty($item['image']))
                                <img src="{{ asset($item['image']) }}" width="60" height="60"
                                    style="object-fit:cover; border-radius:8px;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm mb-2" onclick="loadModalPage();"
                                data-bs-toggle="modal" data-bs-target="#pagemodal"
                                data-page="{{ route('content.edit', ['content' => $obj->id, 'page_name' => 'news', 'page_title' => 'Edit news']) }}"
                                data-title="Edit Services">edit
                            </button>

                            <form
                                action="{{ route('content.delete', ['content' => $obj->id, 'type_name' => 'frontend', 'page_name' => 'news']) }}"
                                method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>