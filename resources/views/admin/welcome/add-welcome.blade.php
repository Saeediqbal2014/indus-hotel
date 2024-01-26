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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($welcome) ? 'Edit' : 'Add' }} welcome
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('welcome.store_welcome') }}" method="Post" enctype="multipart/form-data"
                            class="ajaxForm">
                            @csrf

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Heading</label>
                                                    <textarea id="" class="form-control" name="section">{{ $welcome->section ?? '' }}</textarea>
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Paragraph</label>
                                                    <textarea id="" class="form-control" name="para">{{ $welcome->para ?? '' }}</textarea>
                                                    @error('section')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            @isset($welcome)
                                                <input type="hidden" value="{{ $welcome->id }}" name="welcome_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($welcome) ? 'Update' : 'Add' }}
                                                        welcome </button>
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
