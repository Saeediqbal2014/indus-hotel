@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($user) ? 'Edit' : 'Add' }} User</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form class="row g-3 needs-validation ajaxForm" novalidate action="{{ route('user.save') }}" method="post">
                            @csrf
                            <div class="col-xxl-3 col-md-6">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name ?? '' }}" placeholder="Full Name" required>
                            </div>
                            <div class="col-xxl-3 col-md-6">
                                <label for="" class="form-label">Role</label>
                                <select class="form-control" name="role" data-toggle="select2" >
                                    <option value=" " >Select Role</option>
                                    @foreach ($roles as $role)
                                        @if($role->id == 1)
                                        @else
                                        <option value="{{$role->id}}" {{ isset($user) &&$user->role  == $role->id ? 'selected' : '' }}>
                                            {{$role->name}}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-icon" value="{{ $user->email ?? '' }}" placeholder="email@gmail.com" name="email" required>
                            </div>
                            <div class="col-xxl-3 col-md-6">
                                    <label for="iconInput" class="form-label">Password</label>
                                    <input type="text" class="form-control form-control-icon" name="password" value="" placeholder="password" required>
                            </div>
                            @isset($user)  
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                            @endisset
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"> {{ isset($user) ? 'Edit' : 'Add' }} User</button>
                            </div>
                        </form>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    </div>
@endsection
