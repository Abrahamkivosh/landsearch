@extends('layouts.dashboard')

@section('content')
   <div>
        <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                <!-- main content -->
                <div class="py-4 mb-3 bg-white border-bottom">
                    <div class="container-fluid container-account">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="media media-user-info align-items-center">
                                    <img src="/dashboard/assets/images/avatars/person-2.jpg" class="img-fluid rounded-circle mr-2" width="60" alt="">
                                    <div class="media-body lh-1">"
                                        <p class="h4 m-0">{{ Auth::User()->name }}</p>
                                        <p class="text-muted mb-0">

                                            @if(count($user->roles) > 0)
                                            @foreach($user->roles as $role)
                                            {{ $role->name }}
                                            @endforeach

                                            @endif

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-md-flex align-items-center justify-content-end">
                                <p class="mb-0 mr-3">
                                    <a class=" btn btn-primary" href="/dash">Go back to dashboard</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <ul class="nav nav-pills mb-2" id="accountTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Settings</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="accountTabsContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card card-account">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-6">
                                                        <label>First Name</label>
                                                        <div class="input-group input-group--inline">
                                                            <div class="input-group-addon">
                                                                <i class="material-icons">person</i>
                                                            </div>
                                                            <input type="text" class="form-control" name="firstname" placeholder="John">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Last Name</label>
                                                        <div class="input-group input-group--inline">
                                                            <div class="input-group-addon">
                                                                <i class="material-icons">person</i>
                                                            </div>
                                                            <input type="text" class="form-control" name="lastname" placeholder="Mix">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="instant-messaging">IM</label>
                                                    <div class="input-group input-group--inline">
                                                        <div class="input-group-addon">
                                                            <i class="material-icons">message</i>
                                                        </div>
                                                        <input type="text" class="form-control" name="instant-messaging" placeholder="john.mix(skype)">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <div class="input-group input-group--inline">
                                                        <div class="input-group-addon">
                                                            <i class="material-icons">business</i>
                                                        </div>
                                                        <input type="text" class="form-control" name="company" placeholder="MOSAICPRO">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <div class="input-group input-group--inline">
                                                        <div class="input-group-addon">
                                                            <i class="material-icons">web</i>
                                                        </div>
                                                        <input type="text" class="form-control" name="website" placeholder="https://www.Sub.com/">
                                                    </div>
                                                </div>
                                                <button class="btn btn-success">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" value="john.mix@email.com" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>Old Password</label><br>
                                                <input autocomplete="off" class="form-control" type="password" name="user[password]">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label><br>
                                                <input autocomplete="off" class="form-control" type="password" name="user[password]">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password_confirmation">New Password confirmation</label><br>
                                                <input class="form-control" type="password" name="user[password_confirmation]" id="user_password_confirmation">
                                            </div>
                                            <button type="submit" class="btn btn-success">Change Password</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Connect Accounts</h4>
                                        </div>
                                        <div class="card-body text-center">
                                            <svg viewBox="0 0 16 16" width="20%" style="fill: #3b5998;" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" /></svg>
                                            <div>
                                                <button class="btn btn-white btn-sm">
              Connect Facebook
            </button>
                                            </div>
                                            <hr>
                                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="20%" style="fill: #00aced;" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"/></svg>
                                            <div>
                                                <button class="btn btn-white btn-sm">
              Connect Twitter
            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
   </div>
@stop
