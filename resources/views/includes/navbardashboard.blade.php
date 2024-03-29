<div class="mdk-header js-mdk-header bg-primary" data-fixed>
        <div class="mdk-header__content">

            <nav class="navbar navbar-expand-md bg-primary navbar-dark d-flex-none">
                <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                    <i class="material-icons align-middle md-36">short_text</i>
                </button>
                <div class="page-title m-0">Land Records Search</div>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item nav-link">
                            <div class="form-group m-0">
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">search</i>
                                    </div>
                                    <input type="text" class="form-control" name="search" placeholder="Search app..">
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-language d-flex align-items-center">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                EN
                                </a>
                            <div class="dropdown-menu dropdown-menu-right ">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="account.html" class="dropdown-item active">
                                        <img src="../../../flags.fmcdn.net/data/flags/w1160/us.png" style="width: 25px; vertical-align: middle" alt="English"> English
                                    </a>
                                    </li>
                                    <li>
                                        <a href="account.html" class="dropdown-item">
                                        <img src="../../../flags.fmcdn.net/data/flags/w1160/fr.png" style="width: 25px; vertical-align: middle" alt="French"> French
                                    </a>
                                    </li>
                                    <li>
                                        <a href="account.html" class="dropdown-item">
                                        <img src="../../../flags.fmcdn.net/data/flags/w1160/de.png" style="width: 25px; vertical-align: middle" alt="English"> German
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown notifications d-flex align-self-center align-items-center" id="navbarNotifications">
                            <a href="#" class="nav-link dropdown-toggle notifications--active" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons align-middle">notifications</i>
                                </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown" id="notificationsDropdown">
                                <ul class="nav nav-tabs-notifications d-flex px-0" id="notifications-ul" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="true">Notifications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="alerts-tab" data-toggle="tab" href="#alerts" role="tab" aria-controls="alerts" aria-selected="false">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="notifications-tabs">
                                    <div class="tab-pane fade show active" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="w-100">
                                                    <a href="#">john</a> received a new quote</div>
                                                <div class="w-100 text-muted">4 secs ago</div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="w-100">
                                                    <a href="#">karen</a> received a new quote</div>
                                                <div class="w-100 text-muted">25 mins ago</div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="w-100">
                                                    <a href="#">jim</a> received a new quote</div>
                                                <div class="w-100 text-muted">7 hrs ago</div>
                                            </li>
                                            <li class="list-group-item text-right">
                                                <a href="#">
                                            <span class="align-middle">View All</span>
                                            <i class="material-icons md-18 align-middle">arrow_forward</i>
                                        </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="alerts" role="tabpanel" aria-labelledby="alerts-tab">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <i class="material-icons align-middle mr-2 text-warning">
                                            info_outline
                                            </i>
                                                    <div class="media-body">
                                                        <div class="w-100">
                                                            <a href="profile.html">john</a> received a new
                                                            <a href="#">quote</a>
                                                        </div>
                                                        <div class="w-100 text-muted">4 secs ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <i class="material-icons align-middle mr-2 text-success">
                                            check_circle
                                            </i>
                                                    <div class="media-body">
                                                        <div class="w-100">
                                                            <a href="profile.html">karen</a> completed a
                                                            <a href="#">task</a>
                                                        </div>
                                                        <div class="w-100 text-muted">25 mins ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <i class="material-icons align-middle mr-2 text-danger">
                                            warning
                                            </i>
                                                    <div class="media-body">
                                                        <div class="w-100">
                                                            <a href="profile.html">jim</a> removed a
                                                            <a href="#">task</a>
                                                        </div>
                                                        <div class="w-100 text-muted">7 hrs ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item text-right">
                                                <a href="#">
                                            <span class="align-middle">View All</span>
                                            <i class="material-icons md-18 align-middle">arrow_forward</i>
                                        </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <a href="profile.html">
                                            <img src="assets/images/avatars/person-1.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                            </a>
                                                    <div class="media-body">
                                                        <div class="w-100">I started that project we talked...</div>
                                                        <div class="w-100 text-muted">4 secs ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <a href="profile.html">
                                            <img src="assets/images/avatars/person-11.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                            </a>
                                                    <div class="media-body">
                                                        <div class="w-100">Can we arrange a meeting?...</div>
                                                        <div class="w-100 text-muted">25 mins ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <a href="profile.html">
                                            <img src="assets/images/avatars/person-12.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                            </a>
                                                    <div class="media-body">
                                                        <div class="w-100">We need to fix some bugs...</div>
                                                        <div class="w-100 text-muted">7 hrs ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item text-right">
                                                <a href="#">
                                            <span class="align-middle">View All</span>
                                            <i class="material-icons md-18 align-middle">arrow_forward</i>
                                        </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-divider">
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer">
                                My Account
                                <img src="/dashboard/assets/images/avatars/person-2.jpg" class="img-fluid rounded-circle ml-1" width="35"
                                    alt="">
                                </a>
                            </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
