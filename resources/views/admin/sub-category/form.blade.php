<input type="hidden" name="id" value="{{ $data->id ?? 0 }}">

<div class="form-floating mb-2">
    <select class="form-select" name="category_id" id="category_id">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $data?->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}</option>
        @endforeach
    </select>
    <label for="category_id">Category</label>
</div>

<x-admin.input name="name" label="Sub Category Name" value="{{ $data?->name ?? '' }}" />

<div class="form-floating mb-2">
    <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10">{{ $data?->description ?? '' }}</textarea>
    <label for="description">Description</label>
</div>

<x-admin.input type="file" name="image" label="Sub Category Image" accept="image/*" />

<img id="imagePreview" src="{{ isset($data?->image_url) ? $data?->image_url : '' }}" class="img-thumbnail d-none"
    style="max-width: 120px;">
