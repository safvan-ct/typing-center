@extends('layouts.admin')

@section('content')
    <x-admin.page-header title="Sub Categories" :breadcrumb="[['label' => 'Dashboard', 'link' => route('admin.dashboard')], ['label' => 'Sub Categories']]" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <select class="form-select selectFilter form-select-sm w-auto" id="getFilter">
                        <option value="all">All Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    <button onclick="CRUD.open()" class="btn btn-primary btn-sm add-btn">Add Sub Category</button>
                    <x-admin.table :headers="['#', 'Category', 'Name', 'Description', 'Image', 'Active', 'Actions']"></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        CRUD.setResource("subcategories");

        if (localStorage.getItem("CategoryFilter")) {
            $('#getFilter').val(localStorage.getItem("CategoryFilter"));
        }

        const tableColumns = [{
                data: "id"
            },
            {
                data: "category.name"
            },
            {
                data: "name"
            },
            {
                data: "description"
            },
            {
                data: "image_url",
                orderable: false,
                searchable: false,
                render: (url) => {
                    return url ?
                        `<img src="${url}" width="40" height="40" class="rounded">` :
                        '-';
                }
            },

            // CRUD.columnToggleStatus('key_service'),
            // CRUD.columnToggleStatus('useful_service'),
            CRUD.columnToggleStatus(),
            CRUD.columnActions(true, false),
        ];

        window.crudTable = CRUD.loadDataTable(tableColumns);

        $('#getFilter').on('change', function() {
            localStorage.setItem("CategoryFilter", $(this).val());
            crudTable.ajax.reload(null, false);
        });
    </script>
@endpush
