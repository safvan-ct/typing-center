@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-secondary-dark dashnum-card text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti ti-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <span class="text-white d-block f-34 f-w-500 my-2">
                        {{ $newBooking }}
                        <i class="ti ti-arrow-up-right-circle opacity-50"></i>
                    </span>
                    <p class="mb-0 opacity-50">New Booking</p>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary-dark dashnum-card text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti ti-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="chart-tab-tabContent">
                        <div class="tab-pane show active" id="chart-tab-home" role="tabpanel"
                            aria-labelledby="chart-tab-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <span class="text-white d-block f-34 f-w-500 my-2">
                                        {{ $totalBooking }}
                                        <i class="ti ti-arrow-up-right-circle opacity-50"></i>
                                    </span>
                                    <p class="mb-0 opacity-50">Total Booking</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card bg-primary-dark dashnum-card dashnum-card-small text-white overflow-hidden">
                <span class="round bg-primary small"></span>
                <span class="round bg-primary big"></span>
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="avtar avtar-lg">
                            <i class="text-white ti ti-credit-card"></i>
                        </div>
                        <div class="ms-2">
                            <h4 class="text-white mb-1">{{ $servicesCount }}</h4>
                            <p class="mb-0 opacity-75 text-sm">Total Services</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card dashnum-card dashnum-card-small overflow-hidden">
                <span class="round bg-warning small"></span>
                <span class="round bg-warning big"></span>
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="avtar avtar-lg bg-light-warning">
                            <i class="text-warning ti ti-briefcase"></i>
                        </div>
                        <div class="ms-2">
                            <h4 class="mb-1">{{ $govtServices }}</h4>
                            <p class="mb-0 opacity-75 text-sm">Govt. Sectors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <h4 class="card-header">Recent Bookings</h4>

                <div class="card-body">
                    <select class="form-select selectFilter form-select-sm w-auto" id="getFilter">
                        <option value="all">All</option>
                        <option value="1" selected>New</option>
                        <option value="2">Opened</option>
                        <option value="3">Closed</option>
                    </select>

                    <x-admin.table :headers="['#', 'Name', 'Email', 'Phone', 'Message', 'Booking From', 'Status']" class=''></x-admin.table>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .row-1 {
        background-color: #fff !important;
        /* light blue */
    }

    .row-2 {
        background-color: #fff3cd !important;
        /* light orange */
    }

    .row-3 {
        background-color: #d1e7dd !important;
        /* light green */
    }
</style>

@push('scripts')
    <script>
        CRUD.setResource("booking");

        if (localStorage.getItem("BookingFilter")) {
            $('#getFilter').val(localStorage.getItem("BookingFilter"));
        }

        const tableColumns = [{
                data: "id"
            },
            {
                data: "name"
            },
            {
                data: "email",
                render: function(data, type, row) {
                    return `<a href="mailto:${data}">${data}</a>`;
                }
            },
            {
                data: "phone",
                render: function(data, type, row) {
                    let display = formatUaePhonePretty(data);
                    let tel = data.replace(/\D/g, '');

                    if (tel.startsWith('0')) {
                        tel = '971' + tel.substring(1);
                    }

                    return `<a href="tel:+${tel}">${display}</a>`;
                }
            },
            {
                data: "message"
            },
            {
                data: "opened_from",
            },
            {
                data: 'status',
                render: function(data, type, row) {
                    // If status is CLOSED
                    if (data == '3') {
                        return `<span class="badge bg-success">Closed</span>`;
                    }

                    // Else show dropdown
                    return `
                        <select class="form-select form-select-sm status-change" data-id="${row.id}">
                            <option value="1" ${data == '1' ? 'selected' : ''}>New</option>
                            <option value="2" ${data == '2' ? 'selected' : ''}>Opened</option>
                            <option value="3">Closed</option>
                        </select>
                    `;
                }
            }
        ];

        window.crudTable = CRUD.loadDataTable(tableColumns, "dataTable", true);

        $('#getFilter').on('change', function() {
            localStorage.setItem("BookingFilter", $(this).val());
            crudTable.ajax.reload(null, false);
        });

        // Status change AJAX
        $(document).on('change', '.status-change', function() {
            let bookingId = $(this).data('id');
            let status = $(this).val();

            $.ajax({
                url: "{{ route('admin.booking.status.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: bookingId,
                    status: status
                },
                success: function() {
                    toastr.success('Status updated successfully');
                    crudTable.ajax.reload(null, false);
                },
                error: function() {
                    toastr.error('Failed to update status');
                }
            });
        });

        function formatUaePhonePretty(phone) {
            if (!phone) return '';

            // remove everything except digits
            phone = phone.replace(/\D/g, '');

            // normalize to 971XXXXXXXXX
            // if (phone.startsWith('0')) {
            //     phone = '971' + phone.substring(1);
            // }

            // if (!phone.startsWith('971') || phone.length !== 12) {
            //     return phone; // fallback if invalid
            // }

            let country = phone.substring(0, 3); // 971
            let operator = phone.substring(3, 5); // 50
            let part1 = phone.substring(5, 8); // 000
            let part2 = phone.substring(8); // 4567

            return `+${country} ${operator} ${part1} ${part2}`;
        }
    </script>
@endpush
