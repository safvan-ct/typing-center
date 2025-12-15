@extends('layouts.admin')

@section('content')
    <x-admin.page-header title="Categories" :breadcrumb="[['label' => 'Dashboard', 'link' => route('admin.dashboard')], ['label' => 'Categories']]" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <button onclick="CRUD.open()" class="btn btn-primary btn-sm add-btn">Add Category</button>
                    <x-admin.table :headers="['#', 'Title', 'Active', 'Actions']"></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        CRUD.setResource("categories");

        const tableColumns = [{
                data: "id"
            },
            {
                data: "title"
            },

            CRUD.columnToggleStatus(),
            CRUD.columnActions(),
        ];

        window.crudTable = CRUD.loadDataTable(tableColumns);
    </script>
@endpush
