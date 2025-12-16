<input type="hidden" name="id" value="{{ $data->id ?? 0 }}">
<x-admin.input name="name" label="Category Name" value="{{ $data->name ?? '' }}" />
<div class="form-floating mb-2">
    <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10">{{ $data->description ?? '' }}</textarea>
    <label for="description">Description</label>
    <x-admin.form-error :messages="$errors->get('description')" class="mt-2" />
</div>
