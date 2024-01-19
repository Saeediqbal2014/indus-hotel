@extends('layouts.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap4.min.css"> --}}

    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Good Morning, Indus Hotel!</h4>
                                            {{-- <p class="text-muted mb-0">Here's what's happening with your store today.</p> --}}
                                        </div>
                                        <div class="mt-3 mt-lg-0">

                                        </div>
                                    </div><!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Rooms</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                        100 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{ $rooms }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('accommodation.all') }}"
                                                        class="text-decoration-underline">View All Rooms</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="ri-hotel-bed-line text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Hall
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-info fs-14 mb-0">
                                                        100%
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{ $event }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('event.all-event') }}"
                                                        class="text-decoration-underline">View All Halls</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                        <i class=" ri-hotel-line text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Dine In
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                        100%
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{ $resturent }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('dinein.all-dinein') }}"
                                                        class="text-decoration-underline">View All Dine in</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                        <i class="ri-restaurant-2-line text-warning"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My
                                                        parlour</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-muted fs-14 mb-0">
                                                        100 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{ $beauty }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('beauty.all-beauty') }}"
                                                        class="text-decoration-underline">View All Beauty & Wellness</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="ri-brush-line text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My
                                                        Rooms Booking</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-muted fs-14 mb-0">
                                                        100 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{ $roombookings }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('roomsrequest.all') }}"
                                                        class="text-decoration-underline">View All bookings</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="ri-hotel-bed-line text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My
                                                        Event Bookings</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-muted fs-14 mb-0">
                                                        100 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ $eventbookings }}">0</span>
                                                    </h4>
                                                    <a href="{{ route('query.all') }}"
                                                        class="text-decoration-underline">View All Event Bookings</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="ri-calendar-event-line text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div> <!-- end card-->
        </div> <!-- end .rightbar-->

        {{-- <div class="main-content"> --}}

        <div class="page-content" style="margin-top: -10%">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title mb-0">Rooms Booking </h2>
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
                                                    <div id="remove_data{{ $roomsrequest->id }}"
                                                        class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
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
                                                                            <p class="text-muted mx-4 mb-0">Are you
                                                                                sure
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
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did
                                                    not
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


        {{-- ---------------------- --}}
        <div class="page-content" style="margin-top: -10%">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Events Booking </h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>

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
                                                    <th class="">#</th>

                                                    <th class="">Name</th>
                                                    <th class="">Hall</th>
                                                    <th class="">Nationality</th>
                                                    <th class="">Type of Event</th>
                                                    <th class="">Event Date</th>
                                                    <th class="">email</th>
                                                    <th class="">Message</th>
                                                    <th class="">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($queries as $k => $query)
                                                    <tr>
                                                        {{-- <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="chk_child" value="option1">
                                                            </div>
                                                        </th> --}}
                                                        <td> {{ $k + 1 }}</td>


                                                        <td class="customer_name">{{ $query->title }}
                                                            {{ $query->first_name }} {{ $query->last_name }}
                                                        </td>
                                                        <td class="customer_name">{{ $query->hall }}
                                                        </td>
                                                        <td class="customer_name">{{ $query->country }}
                                                        </td>

                                                        <td class="customer_name">{{ $query->event }}
                                                        </td>
                                                        <td class="customer_name">{{ $query->date }}
                                                        </td>
                                                        <td class="customer_name">{{ $query->email }}
                                                        </td>

                                                        <td class="customer_name">
                                                            <p> {{ $query->comment }} </p>
                                                        </td>
                                                        <td>

                                                            <div class="d-flex gap-2">

                                                                <div class="remove">
                                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#remove_data{{ $query->id }}">Remove</button>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <div id="remove_data{{ $query->id }}" class="modal fade zoomIn"
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
                                                                            data-url="{{ route('query.delete', $query->id) }}"
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

        {{-- ---------------------- --}}

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Contact Mails</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <h5>Emails Center</h5>
                            <div class="timeline">

                                @foreach ($contacts as $k => $c)
                                    @if ($k % 2 == 0)
                                        <div class="timeline-item left">
                                            <i class="icon ri-mail-check-line"></i>
                                            <div class="date">{{ $c->created_at }}</div>
                                            <div class="content">
                                                <h5>{{ $c->email }}</h5>
                                                <p class="text-muted">
                                                    {{ $c->message }}
                                                </p>
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <div
                                                            class="d-flex border border-dashed p-2 rounded position-relative">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                                    <i class="ri-phone-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0">

                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                                <h6 class=" mb-0">{{ $c->phone }}
                                                                </h6>
                                                                <small>phone number</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-sm-6">
                                                        <div
                                                            class="d-flex border border-dashed p-2 rounded position-relative">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                                    <i class="ri-account-pin-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 overflow-hidden">
                                                                <h6 class="mb-0 ">
                                                                    {{ $c->name }}
                                                                </h6>
                                                                <small>name</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    @else
                                        <div class="timeline-item right">
                                            <i class="icon ri-mail-check-line"></i>
                                            <div class="date">{{ $c->created_at }}</div>
                                            <div class="content">
                                                <h5>{{ $c->email }}</h5>
                                                <p class="text-muted">
                                                    {{ $c->message }}
                                                </p>
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <div
                                                            class="d-flex border border-dashed p-2 rounded position-relative">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                                    <i class="ri-phone-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0">

                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                                <h6 class=" mb-0">{{ $c->phone }}
                                                                </h6>
                                                                <small>phone number</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-sm-6">
                                                        <div
                                                            class="d-flex border border-dashed p-2 rounded position-relative">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                                    <i class="ri-account-pin-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 overflow-hidden">
                                                                <h6 class="mb-0 ">
                                                                    {{ $c->name }}
                                                                </h6>
                                                                <small>name</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


                <!--end row-->



                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        {{-- </div> --}}
    </div> <!-- end col -->
    </div>

    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection
