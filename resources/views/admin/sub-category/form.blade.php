<div class="row g-3 align-items-center">
    <input type="hidden" name="id" value="{{ $data->id ?? 0 }}">

    <div class="col-5 form-floating mb-2">
        <select class="form-select" name="category_id" id="category_id">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $data?->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
        <label for="category_id">Category</label>
    </div>

    <div class="col-7">
        <x-admin.input name="name" label="Sub Category Name" value="{{ $data?->name ?? '' }}" />
    </div>

    <div class="col-12 form-floating mb-2">
        <textarea class="form-control" name="short_des" id="short_des" placeholder="Short_des" rows="10"
            style="min-height: 130px">{{ $data?->short_des ?? '' }}</textarea>
        <label for="short_des">Short Description or Tagline</label>
    </div>
    <hr />

    <div class="col-md-4 mb-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="key_service" name="key_service" value="1"
                {{ $data?->key_service == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="key_service">Show In Key Services</label>
        </div>
    </div>

    <div class="col-md-4 mb-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="useful_service" name="useful_service" value="1"
                {{ $data?->useful_service == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="useful_service">Show In Useful Links</label>
        </div>
    </div>

    <div class="col-md-4 mb-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_govt_sector" name="is_govt_sector" value="1"
                {{ $data?->is_govt_sector == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="is_govt_sector">Is Govt Sector</label>
        </div>
    </div>
</div>
<div class="col-12">
    <x-admin.input name="desc_title" label="Description Title (Used for Govt Sector)"
        value="{{ $data?->desc_title ?? '' }}" />
</div>

<div class="col-12 form-floating mb-2">
    <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10"
        style="min-height: 130px">{{ $data?->description ?? '' }}</textarea>
    <label for="description">Description (Used for Govt Sector)</label>
</div>
<hr>

<div class="col-12">
    <x-admin.input type="file" name="image" label="Sub Category Image" accept="image/*" />

    <img id="imagePreview" src="{{ isset($data?->image_url) ? $data?->image_url : '' }}" class="img-thumbnail d-none"
        style="max-width: 120px;">
</div>

<div class="col-12 form-floating mb-2">
    <textarea class="form-control" name="doc_notes" id="doc_notes" placeholder="Documents" rows="10"
        style="min-height: 130px">{{ $data?->doc_notes ?? '' }}</textarea>
    <label for="doc_notes">If have any general notes related to <b>Documents</b> (Seperate items by
        @@@ adding this)</label>
</div>
