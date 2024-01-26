@extends('layouts.app')
@section('content')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            {{-- <div class="container"> --}}

            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"> Email Setup
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('emailconfiguration.store_emailconfiguration') }}" method="Post"
                            enctype="multipart/form-data" class="ajaxForm">
                            @csrf

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Email</label>
                                                    <input id="" class="form-control" name="email"
                                                        value="{{ $EmailConfiguration->email ?? '' }}" type="text">
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Email Host</label>
                                                    <input id="" class="form-control" name="email_host"
                                                        value="{{ $EmailConfiguration->email_host ?? '' }}" type="text">
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Email Port</label>
                                                    <input id="" class="form-control" name="email_port"
                                                        value="{{ $EmailConfiguration->email_port ?? '' }}" type="number">
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Email Username</label>
                                                    <input id="" class="form-control" name="email_username"
                                                        value="{{ $EmailConfiguration->email_username ?? '' }}"
                                                        type="text">
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Email Password</label>
                                                    <input id="" class="form-control" name="email_password"
                                                        value="{{ $EmailConfiguration->email_password ?? '' }}"
                                                        type="text">
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            @isset($EmailConfiguration)
                                                <input class="" type="hidden" value="{{ $EmailConfiguration->id }}"
                                                    name="EmailConfiguration_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($EmailConfiguration) ? 'Update' : 'Add' }}
                                                        Email Configuration </button>
                                                </div>
                                            </div>



                                            <!--end col-->
                                        </div>

                                        <!--end row-->
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="d-none code-view">
                <pre class="language-markup" style="height: 375px;">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--end row-->
@endsection
