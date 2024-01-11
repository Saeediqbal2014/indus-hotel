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
                            <h4 class="card-title mb-0 flex-grow-1"> {{ isset($accommodation) ? 'Edit' : 'Add' }}
                                Accommodation
                            </h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <form action="{{ route('accommodation.store') }}" method="Post" enctype="multipart/form-data"
                            class="">
                            @csrf
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Accommodation
                                                    Category</label>
                                                <select name="accommodation_cat_id" id="" class="form-control">
                                                    <option value="">Accommodation Category</option>
                                                    @foreach ($accommodation_cat as $acc)
                                                        <option value="{{ $acc->id }}"
                                                            @isset($accommodation)
                                                                
                                                            
                                                            @if ($acc->id == $accommodation->accommodation_cat_id) selected @endif @endisset>
                                                            {{ $acc->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Images</label>
                                                <input type="file" class="form-control" name="images[]" id="imageInput"
                                                    multiple>

                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div id="imagePreviewContainer"></div>

                                        <div class="col-md-12">

                                            @isset($accommodation)
                                                <div class="mb-3">
                                                    <label for="current_images" class="form-label">Current Images</label>

                                                    <ul>
                                                        @php
                                                            $imageArray = json_decode($accommodation->images);
                                                        @endphp

                                                        @if (is_array($imageArray))
                                                            <!-- Display multiple images if $imageArray is an array -->
                                                            @foreach ($imageArray as $imageName)
                                                                @if (is_string($imageName))
                                                                    <img style="width: 200px; height: 100px;"
                                                                        src="{{ asset('rooms_images/' . trim($imageName)) }}"
                                                                        alt="dinein Image">
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <!-- Display a single image if $imageArray is not an array -->
                                                            @php
                                                                $imageArray = explode(',', $accommodation->images);
                                                            @endphp
                                                            @foreach ($imageArray as $imageName)
                                                                @if (is_string($imageName))
                                                                    <img style="width: 200px; height: 100px;"
                                                                        src="{{ asset('accommodation_images/' . trim($imageName)) }}"
                                                                        alt="dinein Image">
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                                <input type="hidden" value="{{ $accommodation->id }}" name="accommodation_id">
                                            @endisset

                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $accommodation->name ?? '' }}" id="firstNameinput" required>

                                                @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Bed</label>
                                                <input type="text" class="form-control" name="bed"
                                                    value="{{ $accommodation->bed ?? '' }}" id="firstNameinput" required>

                                                @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Occupancy</label>
                                                <input type="text" class="form-control" name="occupancy"
                                                    value="{{ $accommodation->occupancy ?? '' }}" required>

                                                @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Description</label>
                                                <textarea name="description" id="" cols="30" class="form-control" rows="10">

                                                    {{ $accommodation->description ?? '' }}
                                                </textarea>
                                                @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Select</th>
                                                            <th scope="col">Package Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($accommodation_packages as $accommodation_package)
                                                            <tr>
                                                                <td>
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="{{ $accommodation_package->id }}"
                                                                        id="package_{{ $accommodation_package->id }}"
                                                                        name="packages[]"
                                                                        @isset($accommodation)
                                                                            
                                                                        
                                                                        @foreach (json_decode($accommodation->packages) as $package)
                                                            @if ($accommodation_package->id == $package) checked @endif @endforeach @endisset>
                                                                </td>
                                                                <td>
                                                                    <label class="form-check-label"
                                                                        for="package_{{ $accommodation_package->id }}">
                                                                        {{ $accommodation_package->name }}
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>








                                        <!--end col-->
                                        <div class="col-md-12 ">
                                            <div class="">
                                                <button type="submit"
                                                    class="btn btn-primary">{{ isset($accommodation) ? 'Update' : 'Add' }}
                                                    Accommodation </button>
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
                                                                                                                                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                                                                                                                <script>
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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--end row-->
@endsection
