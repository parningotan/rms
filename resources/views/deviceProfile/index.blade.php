<form action="{{route("device.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Profile Name</label>
        <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $deviceProfile->name ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Profile Name</label>
        <input type="text" class="form-control" id="profile" name="profile"
            value="{{ old('profile', $deviceProfile->profile ?? '') }}" required>
    </div>
    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
</form>
