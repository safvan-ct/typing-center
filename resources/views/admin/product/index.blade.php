@extends('layouts.admin')

@section('content')
    <x-admin.page-header title="Products" :breadcrumb="[['label' => 'Dashboard', 'link' => route('admin.dashboard')], ['label' => 'Products']]" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <button onclick="CRUD.open()" class="btn btn-primary btn-sm add-btn">Add Product</button>
                    <x-admin.table :headers="['#', 'Category', 'Name', 'Price', 'Description', 'Image', 'Active', 'Actions']"></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        CRUD.setResource("products");

        const tableColumns = [{
                data: "id"
            },
            {
                data: "category.title"
            },
            {
                data: "name"
            },
            {
                data: "price"
            },
            {
                data: "description"
            },
            {
                data: "image_url",
                render: (url) => {
                    return url ?
                        `<img src="${url}" width="40" height="40" class="rounded">` :
                        '-';
                }
            },

            CRUD.columnToggleStatus(),
            CRUD.columnActions(),
        ];

        window.crudTable = CRUD.loadDataTable(tableColumns);
    </script>
@endpush
