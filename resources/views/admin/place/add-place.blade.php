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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($place) ? 'Edit' : 'Add' }} place
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('place.store_place') }}" method="Post" enctype="multipart/form-data"
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
                                                        id="firstNameinput">

                                                    @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Position</label>

                                                    <select class="form-control" name="position" id="position">
                                                        <option value="left"
                                                            {{ isset($place) && $place->position == 'left' ? 'selected' : '' }}>
                                                            Left</option>
                                                        <option value="right"
                                                            {{ isset($place) && $place->position == 'right' ? 'selected' : '' }}>
                                                            Right</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Title </label>
                                                    <input type="text" class="form-control"
                                                        name="title"value="{{ $place->title ?? '' }}" id="firstNameinput"
                                                        required>

                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Heading</label>
                                                    <input type="text" class="form-control"
                                                        name="subtitle"value="{{ $place->subtitle ?? '' }}"
                                                        id="firstNameinput" required>

                                                    @error('subtitle')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">KM</label>
                                                    <input type="text" class="form-control"
                                                        name="km"value="{{ $place->km ?? '' }}" id="firstNameinput"
                                                        required>

                                                    @error('subtitle')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Paragraph

                                                        <textarea class="form-control" name="para" cols="200" rows="10">{{ $place->para ?? '' }}</textarea>

                                                        @error('text')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>

                                            @isset($place)
                                                <input type="hidden" value="{{ $place->id }}" name="place_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($place) ? 'Update' : 'Add' }}
                                                        place</button>
                                                </div>
                                            </div>

                                            @isset($place)
                                                <div class="col-md-12">
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('place_images') }}/{{ $place->image }}">
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
