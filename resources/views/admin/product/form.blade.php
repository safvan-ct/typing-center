<input type="hidden" name="id" value="{{ $data->id ?? 0 }}">

<div class="form-floating mb-2">
    <select class="form-select" name="category_id" id="category_id">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $data?->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->title }}</option>
        @endforeach
    </select>
    <label for="category_id">Category</label>
</div>

<x-admin.input name="name" label="Product Name" value="{{ $data?->name ?? '' }}" />
<x-admin.input name="price" label="Product Price" value="{{ $data?->price ?? '' }}" />

<div class="form-floating mb-2">
    <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10">{{ $data?->description ?? '' }}</textarea>
    <label for="description">Description</label>
</div>

<x-admin.input type="file" name="image" label="Product Image" accept="image/*" />

<img id="imagePreview" src="{{ isset($data?->image_url) ? $data?->image_url : '' }}" class="img-thumbnail d-none"
    style="max-width: 120px;">
