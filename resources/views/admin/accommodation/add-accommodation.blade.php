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
                        <form action="{{route('accommodation.store')}}" method="Post" enctype="multipart/form-data" class="ajaxForm" >
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
                                                        @foreach ($accommodation_cat as $accommodation)
                                                            <option value="{{ $accommodation->id }}">
                                                                {{ $accommodation->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Images</label>
                                                    <input type="file" class="form-control" name="images[]" multiple
                                                        required>

                                                    @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Name</label>
                                                    <input type="text" class="form-control"
                                                        name="name"value="{{ $accommodation->text ?? '' }}"
                                                        id="firstNameinput" required>

                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Bed</label>
                                                    <input type="text" class="form-control"
                                                        name="bed"value="{{ $accommodation->text ?? '' }}"
                                                        id="firstNameinput" required>

                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Occupancy</label>
                                                    <input type="text" class="form-control"
                                                        name="occupancy" value="{{ $accommodation->text ?? '' }}"
                                                        required>

                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    @foreach ($accommodation_packages as $accommodation_package)
                                                        <input class="form-check-input" type="checkbox"
                                                            value=" {{ $accommodation_package->id }}"
                                                            id="package_ {{ $accommodation_package->id }}" name="packages[]">
                                                        <label class="form-check-label"
                                                            for="package_ {{ $accommodation_package->id }}">
                                                            {{ $accommodation_package->name }}
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Description</label>
                                                    <textarea name="description" id="" cols="30" class="form-control" rows="10"></textarea>
                                                    @error('text')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                            </div>
                                            {{-- @isset($accommodation)
                                                <input type="hidden" value="{{ $accommodation->id }}" name="accommodation_id">
                                            @endisset --}}

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


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--end row-->
@endsection
