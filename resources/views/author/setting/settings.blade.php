@extends('layouts.backend.app')

@section('title', 'user Settings')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{ Storage::url('profile/'.Auth::user()->image)
                             }}"
                                 alt="User
                            profile
                            picture">

                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                            <a href="#" class="btn btn-primary btn-block" disabled><b>Follow</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <p class="text-muted">
                                {{ Auth::user()->about }}
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile Edit</a></li>
                            <li><a href="#settings" data-toggle="tab">Change Password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <form action="{{ route('author.profile.update') }}" method="POST"
                                      class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="inputName"
                                                   value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" name="email"
                                                   value="{{
                                            Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">About</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" name="about">{{
                                            Auth::user()->about }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="">
                                        <label for="inputSkills" class="col-sm-2 control-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="inputSkills" name="image">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn bg-green-active">UPDATE PROFILE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="{{ route('author.password.change') }}"
                                      method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="old_password" class="col-sm-2 control-label">Old password</label>

                                        <div class="col-sm-10">
                                            <input type="password" name="old_password" class="form-control"
                                                   id="old_password" placeholder="Old password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label">New password</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password"
                                                   id="new_password"
                                                   placeholder="New password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation" class="col-sm-2 control-label">Confirm
                                            password</label>

                                        <div class="col-sm-10">
                                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                                   placeholder="Confirm password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn bg-green-active">CHANGE PASSWORD</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')

@endpush