<div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
        <div class="mdk-drawer__content">
            <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
                <nav class="drawer drawer--light">
                    <div class="drawer-spacer drawer-spacer-border">
                        <div class="media align-items-center">
                            <img src="../../../pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                            <div class="media-body">
                                <a href="#" class="h5 m-0">{{ Auth::User()->name }}</a>
                                <div>{{{ Auth::User()->roles }}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="drawer-spacer bg-body-bg">
                        <div class="d-flex justify-content-between mb-2">
                            <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">monetization_on</i> Balance</p>
                            <span>$99,911</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">shopping_cart</i> Sales</p>
                            <span>142</span>
                        </div>
                    </div>
                    <!-- MENU -->
                    <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                        <li class="drawer-menu-item">
                            <a href="/profile/{{ Auth::User()->id }}">
                                <i class="material-icons">lock</i>
                                <span class="drawer-menu-text"> Account</span>
                            </a>
                        </li>
                        <li class="drawer-menu-item">
                            <a href="/profile/{{ Auth::User()->id }}">
                                <i class="material-icons">account_circle</i>
                                <span class="drawer-menu-text"> Profile</span>
                            </a>
                        </li>



                            <li class="drawer-menu-item" >
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="drawer-menu-text"> Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>






                    </ul>
                </nav>
            </div>
        </div>
    </div>
