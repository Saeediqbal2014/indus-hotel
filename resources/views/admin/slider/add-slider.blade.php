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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($slider) ? 'Edit' : 'Add' }} Slider image
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('slider.store_slider') }}" method="Post" enctype="multipart/form-data"
                            class="ajaxForm">
                            @csrf
                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Image</label>
                                                    <input type="file" class="form-control" name="image"
                                                        id="firstNameinput" required>

                                                    @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Heading</label>
                                                    <input type="text" class="form-control"
                                                        name="text"value="{{ $slider->text ?? '' }}" id="firstNameinput"
                                                        required>

                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            @isset($slider)
                                                <input type="hidden" value="{{ $slider->id }}" name="slider_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($slider) ? 'Update' : 'Add' }}
                                                        Slider Image</button>
                                                </div>
                                            </div>

                                            @isset($slider)
                                                <div class="col-md-12">
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('slider_images') }}/{{ $slider->image }}">
                                                </div>
                                            @endisset

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
