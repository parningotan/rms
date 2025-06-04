<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12 mb-3">
        <label for="validationCustom01" class="form-label">Brand Name</label>
        <input type="text" class="form-control" id="validationCustom01" name="brand_name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" aria-label="file example" name="brand_logo" required>
        <div class="invalid-feedback">Example invalid form file feedback</div>
    </div>
</form>
