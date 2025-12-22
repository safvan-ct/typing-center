<input type="hidden" name="id" value="{{ $data->id ?? 0 }}">

<x-admin.input name="name" label="Document Group Name" value="{{ $data->name ?? '' }}" />

<div class="form-floating mb-2">
    <textarea class="form-control" name="notes" id="notes" placeholder="Notes" rows="10" style="min-height: 130px">{{ $data?->notes ?? '' }}</textarea>
    <label for="notes">If have any <b>Notes</b> (Seperate items by @@@ adding this)</label>
</div>

<div class="form-floating mb-2">
    <textarea class="form-control" name="docs" id="docs" placeholder="Docs" rows="10"
        style="min-height: 300px">{{ $data?->docs ?? '' }}</textarea>
    <label for="docs">If have any <b>Documents</b> (Seperate items by @@@ adding
        this)</label>
</div>
