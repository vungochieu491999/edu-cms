@extends('core/backend::layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{page_title()->getTitle(false)}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{route('users.form.add')}}" method="POST" accept-charset="UTF-8">
                @csrf
                <div class="user-profile row">
                    <div class="col-md-3 col-sm-5 crop-avatar">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img id="output_img" class="profile-user-img img-fluid img-circle" style="width: 215px; height: 215px" src="{{asset('dist/img/avatar.png')}}" alt="User profile picture">
                                </div>

                                <div class="form-group">
                                    <label>Choose avatar</label><span class="text-danger"> *</span>
                                    <div class="custom-file">
                                        <input name="avatar" type="file" class="custom-file-input" id="input_img">
                                        <label class="custom-file-label" for="input_img">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-7">
                        <div class="user-information row">
                            <div class="col-md-6 ">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">General</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="first-name">First Name <span class="text-danger"> *</span></label>
                                            <input type="text" id="first-name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Last Name <span class="text-danger"> *</span></label>
                                            <input type="text" id="last-name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger"> *</span></label>
                                            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStatus">Status</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected disabled>Select one</option>
                                                <option>Active</option>
                                                <option>Out</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Others</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <input type="text" id="department" class="form-control" name="department">
                                        </div>
                                        <div class="form-group">
                                            <label for="role-user">Role User</label>
                                            <input type="text" id="role-user" class="form-control" name="role_user">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Information Description</label>
                                            <textarea id="inputDescription" class="form-control" rows="4" name="information_description"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('users.view')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('scripts')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- Upload file image -->
    <script src="{{asset('dist/js/uploadFile.js')}}"></script>
@endsection
