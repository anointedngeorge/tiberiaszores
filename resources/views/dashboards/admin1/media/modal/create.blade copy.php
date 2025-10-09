


<div class="modal fade create" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>


            <div class="modal-body">
                <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="title" class="form-control input-default" placeholder="Title" required>
                    </div>

                    <div class="mb-3">
                        <input type="file" name="media" class="form-control input-default ">
                    </div>

                    <div class="mb-3">
                        <select name="is_active" required class="form-select"
                            aria-label="Floating label select example">
                            <option value={{ 1 }}>Active</option></option>
                            <option value={{ 0 }}>In-Active</option>
                        </select>
                        <label for="floatingPassword">Media Status</label>
                    </div>

                    <button type="submit" class="btn light btn-primary">Submit</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>