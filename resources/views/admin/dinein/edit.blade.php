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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($dinein) ? 'Edit' : 'Add' }} dinein
                            </h4>
                            <a href="{{ url('admin/all-dinein') }}" class="btn btn-primary">Back</a>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <div class="container">
                            <h2>Edit dinein</h2>

                            <form action="{{ route('dinein.update', ['id' => $dinein->id ?? 0]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put') <!-- Specify the HTTP method as PUT for update -->
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Heading</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ $dinein->title ?? '' }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="subtitle"
                                                value="{{ $dinein->subtitle ?? '' }}" required>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="imageInput" class="form-label">position</label>
                                            <select class="form-control" name="position" id="position">
                                                <option value="left"
                                                    {{ old('position', $dinein->position) == 'left' ? 'selected' : '' }}>
                                                    Left</option>
                                                <option value="right"
                                                    {{ old('position', $dinein->position) == 'right' ? 'selected' : '' }}>
                                                    Right</option>
                                            </select>
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}


                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Images</label>
                                            <input type="file" class="form-control" id="image" name="image[]"
                                                multiple>
                                        </div>

                                    </div>
                                    <div id="imagePreviewContainer"></div>


                                    <div class="mb-3">
                                        <label for="current_images" class="form-label">Current Images</label>

                                        <ul>
                                            @php
                                                $imageArray = json_decode($dinein->image);
                                            @endphp
                                            @if (is_array($imageArray))
                                                <!-- Display multiple images if $imageArray is an array -->
                                                @foreach ($imageArray as $k => $imageName)
                                                    @if (is_string($imageName))
                                                        <div style="position: relative; display: inline-block;">
                                                            <img style="width: 200px; height: 150px;" class="rounded"
                                                                id="change_image_{{ $k }}"
                                                                src="{{ asset('dinein_images/' . trim($imageName)) }}"
                                                                alt="dinein Image"
                                                                onclick="delete_image({{ $k }})">
                                                            <input type="hidden" name="update_images[]"
                                                                id="change_input_{{ $k }}"
                                                                value="{{ $imageName }}">

                                                            <button type="button" id="change_btn_{{ $k }}"
                                                                onclick="delete_image({{ $k }})"
                                                                style="position: absolute; top: 0; right: 0; padding: 5px;"
                                                                class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                                    class="ri-delete-bin-5-line"></i></button>
                                                        </div>
                                                    @endif
                                                @endforeach

                                                {{-- @if (is_array($imageArray))
                                                <!-- Display multiple images if $imageArray is an array -->
                                                @foreach ($imageArray as $imageName)
                                                    @if (is_string($imageName))
                                                        <img style="width: 200px; height: 100px;"
                                                            src="{{ asset('dinein_images/' . trim($imageName)) }}"
                                                            alt="dinein Image">
                                                    @endif
                                                @endforeach --}}
                                            @else
                                                <!-- Display a single image if $imageArray is not an array -->
                                                @php
                                                    $imageArray = explode(',', $dinein->image);
                                                @endphp
                                                @foreach ($imageArray as $imageName)
                                                    @if (is_string($imageName))
                                                        <img style="width: 200px; height: 100px;"
                                                            src="{{ asset('dinein_images/' . trim($imageName)) }}"
                                                            alt="dinein Image">
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="titleInput" class="form-label">Paragraph</label>
                                            <textarea class="form-control" name="para" id="" cols="30" rows="10">{{ $dinein->para ?? '' }}</textarea>
                                            @error('para')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{ $dinein->id }}" name="dinein_id">

                                <button type="submit" class="btn btn-primary">Update dinein</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
        function delete_image(id) {
            var imageToRemove = document.getElementById('change_image_' + id);
            var btnToRemove = document.getElementById('change_btn_' + id);

            var hiidenToRemove = document.getElementById('change_input_' + id);
            if (btnToRemove) {
                btnToRemove.remove();
            }
            if (imageToRemove) {
                imageToRemove.remove();
            }
            if (hiidenToRemove) {
                hiidenToRemove.remove();
            }
        }
        $(document).ready(function() {
            $('#imageInput').change(function() {
                displayImages(this);
            });

            function displayImages(input) {
                var container = $('#imagePreviewContainer');
                container.empty();

                if (input.files && input.files.length > 0) {
                    for (var i = 0; i < input.files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            container.append('<img src="' + e.target.result +
                                '" class="img-thumbnail" style="max-width:100px; max-height:100px; margin-right: 5px;">'
                            );
                        };
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        });
    </script>
