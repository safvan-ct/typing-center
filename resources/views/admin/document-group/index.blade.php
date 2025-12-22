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
                    <button onclick="CRUD.open(0, {{ $category->id }})" class="btn btn-primary btn-sm add-btn">
                        Add Document
                    </button>
                    <x-admin.table :headers="['#', 'Category', 'Name', 'Notes', 'Documents', 'Active', 'Actions']"></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        CRUD.setResource("document-groups");

        const tableColumns = [{
                data: "id"
            },
            {
                data: 'category',
                name: 'category'
            },
            {
                data: "name"
            },
            {
                data: "notes",
                visible: false,
                render: function(data) {
                    if (!data) return '-';

                    let items = data.split('@@@');

                    return items.map(item =>
                        `<span class="badge bg-primary me-1 mb-1">${item.trim()}</span>`
                    ).join('');
                }
            },
            {
                data: "docs",
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
