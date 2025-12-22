<input type="hidden" name="id" value="{{ $data->id ?? 0 }}">

<x-admin.input name="name" label="Service Name" value="{{ $data->name ?? '' }}" />

<div class="form-floating mb-2">
    <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10"
        style="min-height: 130px">{{ $data?->description ?? '' }}</textarea>
    <label for="description">Description</label>
    <x-admin.form-error :messages="$errors->get('description')" class="mt-2" />
</div>

<div class="form-floating mb-2">
    <textarea class="form-control" name="documents" id="documents" placeholder="Documents" rows="10"
        style="min-height: 130px">{{ $data?->documents ?? '' }}</textarea>
    <label for="documents">If have any <b>Documents</b> (Seperate items by @@@ adding
        this)</label>
</div>
