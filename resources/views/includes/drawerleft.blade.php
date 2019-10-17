<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

                <nav class="drawer  drawer--dark">
                    <div class="drawer-spacer">
                        <div class="media align-items-center">
                            <a href="index.html" class="drawer-brand-circle mr-2">S</a>
                            <div class="media-body">
                                <a href="index.html" class="h5 m-0 text-link">Thika Lands</a>
                            </div>
                        </div>
                    </div>
                    <!-- HEADING -->
                    <div class="py-2 drawer-heading">
                        Dashboard
                    </div>
                    <!-- MENU -->
                    <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                        <li class="drawer-menu-item active ">
                            <a href="/dash">
                                <i class="material-icons">poll</i>
                                <span class="drawer-menu-text"> My Dashboard</span>
                            </a>
                        </li>


                    </ul>

                    <!-- HEADING -->
                    <div class="py-2 drawer-heading">
                        Components
                    </div>

                    <!-- MENU -->
                    <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                        <li class="drawer-menu-item drawer-submenu">
                            <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                                <i class="material-icons">library_books</i>
                                <span class="drawer-menu-text"> Land Info</span>
                            </a>
                            <ul class="collapse " id="uiComponentsMenu">
                                <li class="drawer-menu-item "><a href="/lands">All Lands</a></li>
                                <li class="drawer-menu-item "><a href="/history/{{ Auth()->User()->id }}">Passed Search</a></li>
                                <li class="drawer-menu-item "><a href="#">Policies</a></li>

                            </ul>
                        </li>


                        <li class="drawer-menu-item drawer-submenu">
                            <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#formsMenu" aria-controls="formsMenu" aria-expanded="false" class="collapsed">
                                <i class="material-icons">text_format</i>
                                <span class="drawer-menu-text"> Analysis</span>
                            </a>
                            <ul class="collapse " id="formsMenu">
                                <li class="drawer-menu-item "><a href="form-controls.html">Commissionner</a></li>

                            </ul>
                        </li>
                        <li class="drawer-menu-item  ">
                            <i class="material-icons">tab</i>
                            <span class="drawer-menu-text"> All Plots</span>
                          </a>
                            <a href="/plots">
                        </li>
                        <li class="drawer-menu-item  ">
                            <i class="material-icons">notifications</i>
                            <span class="drawer-menu-text"> Notifications</span>
                          </a>
                            <a href="#l">
                        </li>

                        <li class="drawer-menu-item  ">
                            <i class="material-icons">event_available</i>
                            <span class="drawer-menu-text"> Calendar</span>
                          </a>
                        </li>
                            <a href="events-calendar.html">
                        <li class="drawer-menu-item  ">
                            <a href="/dash/map">
                                <i class="material-icons">pin_drop</i>
                                <span class="drawer-menu-text"> Map</span>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
