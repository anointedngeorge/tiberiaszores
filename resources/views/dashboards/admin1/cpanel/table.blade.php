<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Email Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @php $rowId = 1; @endphp

            @foreach ($objects as $obj)
                @foreach (decode_concat_json($obj->description) as $item)
                    <tr>

                        <td>{{ $rowId++ }}</td>
                        <td> <b>{{ $item['username'] ?? 'none'}}{{ "@" }}{{ $item['domain'] ?? '-' }}</b> </td>
                        <td> <b>{{ $item['password'] ?? '-' }}</b> </td>
                        

                        <td>
                           <a href="https://www.tiberiaszores.com/webmail" target="_blank" class="btn btn-primary btn-sm mb-2">Mail Login</a>
                            <form
                                action="{{ route('content.delete', ['content' => $obj->id, 'type_name' => 'frontend', 'page_name' => 'services']) }}"
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