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
                        <div class="container">
                            <h2>Edit Event</h2>

                            <form action="{{ route('event.update', $event->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put') <!-- Specify the HTTP method as PUT for update -->

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $event->title }}" required>
                                </div>



                                <div class="mb-3">
                                    <label for="image" class="form-label">Images</label>
                                    <input type="file" class="form-control" id="image" name="image[]" multiple>
                                </div>

                                <div class="mb-3">
                                    <label for="current_images" class="form-label">Current Images</label>
                                    <ul>
                                        @if (is_array($event->image))
                                            <!-- Display multiple images if $image->image is an array -->
                                            @foreach ($event->image as $imageName)
                                                @if (is_string($imageName))
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('event_images') }}/{{ trim($imageName) }}"
                                                        alt="Event Image">
                                                @endif
                                            @endforeach
                                        @else
                                            <!-- Display a single image if $image->image is not an array -->
                                            @php
                                                $imageArray = explode(',', $event->image);
                                            @endphp
                                            @foreach ($imageArray as $imageName)
                                                @if (is_string($imageName))
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('event_images') }}/{{ trim($imageName) }}"
                                                        alt="Event Image">
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Event</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
