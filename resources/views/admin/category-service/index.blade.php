@extends('layouts.admin')

@section('content')
    <x-admin.page-header :title="$category->name . ' & Required Documents'" :breadcrumb="[
        [
            'label' => 'Dashboard',
            'link' => route('admin.dashboard'),
        ],
        [
            'label' => 'Sub Categories',
            'link' => route('admin.subcategories.index'),
        ],
        ['label' => $category->name],
    ]" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="getFilter" value="{{ $category->id }}">
                    <button onclick="CRUD.open(0, {{ $category->id }})" class="btn btn-primary btn-sm add-btn">Add
                        Service</button>
                    <x-admin.table :headers="['#', 'Category', 'Name', 'Description', 'Documents', 'Active', 'Actions']"></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        CRUD.setResource("category-services");

        const tableColumns = [{
                data: "id"
            },
            {
                data: 'sub_category',
                name: 'sub_category'
            },
            {
                data: "name"
            },
            {
                data: "description",
                visible: true
            },
            {
                data: "documents",
                render: function(data) {
                    if (!data) return '-';

                    let items = data.split('@@@');

                    return items.map(item =>
                        `<span class="badge bg-primary me-1 mb-1">${item.trim()}</span>`
                    ).join('');
                }
            },

            CRUD.columnToggleStatus(),
            CRUD.columnActions(true, false),
        ];

        window.crudTable = CRUD.loadDataTable(tableColumns);
    </script>
@endpush
