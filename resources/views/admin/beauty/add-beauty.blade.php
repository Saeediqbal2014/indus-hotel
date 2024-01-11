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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($beauty) ? 'Edit' : 'Add' }} Beauty
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('beauty.store_beauty') }}" method="Post" enctype="multipart/form-data"
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
                                                        id="firstNameinput" required>

                                                    @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Position</label>

                                                    <select class="form-control" name="position" id="">
                                                        <option class="form-control" value="left">left</option>
                                                        <option class="form-control" value="right">right</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Title </label>
                                                    <input type="text" class="form-control"
                                                        name="title"value="{{ $beauty->title ?? '' }}" id="firstNameinput"
                                                        required>

                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Heading</label>
                                                    <input type="text" class="form-control"
                                                        name="subtitle"value="{{ $beauty->subtitle ?? '' }}"
                                                        id="firstNameinput" required>

                                                    @error('subtitle')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Paragraph

                                                        <textarea class="form-control" name="para" cols="200" rows="10">{{ $beauty->paragraph ?? '' }}</textarea>

                                                        @error('text')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>

                                            @isset($beauty)
                                                <input type="hidden" value="{{ $beauty->id }}" name="beauty_id">
                                            @endisset

                                            <!--end col-->
                                            <div class="col-md-12 ">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ isset($beauty) ? 'Update' : 'Add' }}
                                                        Beauty</button>
                                                </div>
                                            </div>

                                            @isset($beauty)
                                                <div class="col-md-12">
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('beauty_images') }}/{{ $beauty->image }}">
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
