@extends('layouts.app')
@section('content')
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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($about) ? 'Edit' : 'Add' }} about image
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('about.store_about') }}" method="Post" enctype="multipart/form-data"
                            class="ajaxForm">
                            @csrf
                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Name</label>
                                                    <input type="file" class="form-control" name="image"
                                                        id="firstNameinput">

                                                    @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            @isset($about)
                                                <div class="col-md-6">
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('about_images') }}/{{ $about->image }}">
                                                </div>
                                            @endisset


                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Text Here</label>
                                                    <textarea id="myTextarea" cols="30" rows="30" id="" class="form-control" name="text">{{ $about->text ?? '' }}</textarea>


                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>



                                            @isset($about)
                                                <input type="hidden" value="{{ $about->id }}" name="about_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($about) ? 'Update' : 'Add' }}
                                                        about Image</button>
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


                                    <script>
                                        CKEDITOR.replace('myTextarea');
                                    </script>
                <!--end row-->
@endsection
