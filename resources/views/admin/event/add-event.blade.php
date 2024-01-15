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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($event) ? 'Edit' : 'Add' }} Events
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('event.store_event') }}" method="POST" enctype="multipart/form-data"
                            class="">
                            @csrf
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="imageInput" class="form-label">Images</label>
                                                <input type="file" class="form-control" name="image[]" multiple
                                                    id="imageInput">
                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="titleInput" class="form-label">Title Here</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $event->title ?? '' }}" id="titleInput" required>

                                                @error('title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <button type="submit"
                                                    class="btn btn-primary">{{ isset($event) ? 'Update' : 'Add' }} event
                                                    Image</button>
                                            </div>
                                        </div>

                                        @isset($event)
                                            <div class="col-md-12">
                                                @foreach (explode(',', $event->image) as $imageName)
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('event_images') }}/{{ $imageName }}" alt="Event Image">
                                                @endforeach
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
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
