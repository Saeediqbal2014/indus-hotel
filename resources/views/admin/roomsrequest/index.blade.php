@extends('layouts.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jroomsrequest/1.8/jroomsrequest.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jroomsrequest.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jroomsrequest.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap4.min.css"> --}}

    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title mb-0">Bookings </h2>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                {{-- <button type="button" class="btn btn-success add-btn" id="create-btn"
                                                    onclick="window.location.href='{{ url('admin/add-roomsrequest') }}'">
                                                    <i class="ri-add-line align-bottom me-1"></i> Add
                                                </button> --}}
                                                {{-- <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i
                                                        class="ri-delete-bin-2-line"></i></button> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    {{-- <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                                value="option">
                                                        </div>
                                                    </th> --}}
                                                    <th class="">Id</th>

                                                    <th class="">Name</th>
                                                    <th class="">Room Name </th>
                                                    <th class="">Nationality</th>
                                                    <th class="">Check In</th>
                                                    <th class="">Check Out</th>
                                                    <th class="">email</th>
                                                    <th class="">Message</th>
                                                    <th class="">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($roomsrequests as $k => $roomsrequest)
                                                    <tr>


                                                        <td class="customer_name">
                                                            {{ $k + 1 }}
                                                        </td>

                                                        <td class="customer_name">
                                                            {{ $roomsrequest->first_name }}
                                                        </td>
                                                        <td class="customer_name">{{ $roomsrequest->room }}
                                                        </td>
                                                        <td class="customer_name">{{ $roomsrequest->country }}
                                                        </td>

                                                        <td class="customer_name">{{ $roomsrequest->checkin }}
                                                        </td>
                                                        <td class="customer_name">{{ $roomsrequest->checkout }}
                                                        </td>
                                                        <td class="customer_name">{{ $roomsrequest->email }}
                                                        </td>

                                                        <td class="customer_name">
                                                            <p> {{ $roomsrequest->special_arrangments }} </p>
                                                        </td>
                                                        <td>

                                                            <div class="d-flex gap-2">

                                                                <div class="remove">
                                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#remove_data{{ $roomsrequest->id }}">Remove</button>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <div id="remove_data{{ $roomsrequest->id }}" class="modal fade zoomIn"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="NotificationModalbtn-close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mt-2 text-center">
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                            trigger="loop"
                                                                            colors="primary:#f7b84b,secondary:#f06548"
                                                                            style="width:100px;height:100px"></lord-icon>
                                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                            <h4>Are you sure ?</h4>
                                                                            <p class="text-muted mx-4 mb-0">Are you sure
                                                                                you
                                                                                want to remove this member ?</p>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                        <button type="button" class="btn w-sm btn-light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button onclick="ajaxRequest(this)"
                                                                            data-url="{{ route('roomsrequest.delete', $roomsrequest->id) }}"
                                                                            class="btn
                                                                            w-sm btn-danger"
                                                                            id="delete-notification">Yes,
                                                                            Delete
                                                                            It!</button>
                                                                    </div>
                                                                </div>

                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>

                                                    <!-- /end modal -->

                                                    <!-- /.modal -->
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                    find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1"
                                                        data-page="8">1</a></li>
                                            </ul>
                                            <a class="page-item pagination-next" href="javascript:void(0);">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jroomsrequest/3.7.1/jroomsrequest.min.js"></script>
@endsection
