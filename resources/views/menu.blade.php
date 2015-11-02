<header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="/" class="app-bar-element branding"><!-- <img src="images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> --> Metro UI CSS</a>

        <ul class="app-bar-menu small-dropdown">
            <li>
                <a href="#" class="dropdown-toggle"><span class="mif-database"></span> Master</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <!-- li class="disabled"><a href="overview.html">Artikel</a></li>
                    <li class="divider"></li> -->
                    @if(Auth::check())
                        <li>
                            <a href="" class="dropdown-toggle"><span class="mif-list"></span> Artikel</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="/artikel"><span class="mif-file-text"></span> Semua Artikel</a></li>
                                <li><a href="/artikel/add"><span class="mif-plus"></span> Tambah Baru</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('auth/logout') }}">
                            <span class="mif-list"></span> Sign Out</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('auth/login') }}">
                            <span class="mif-list"></span> Sign In</a>
                        </li>
                        <li>
                            <a href="{{ url('auth/register') }}">
                            <span class="mif-list"></span> Sign Up</a>
                        </li>

                    @endif
<!--                     <li><a href="typography.html">Typography</a></li>
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="inputs.html">Forms &amp; Inputs</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="images.html">Images</a></li>
                    <li><a href="font.html">Metro Icon Font</a></li>
                    <li class="divider"></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="helpers.html">Helpers classes</a></li>
                    <li class="divider"></li>
                    <li><a href="rtl.html">RTL Support</a></li>
                    <li class="disabled"><a href="responsive.html">Responsive</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">Widgets</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li>
                        <a href="#" class="dropdown-toggle">Menus</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="appbar.html">Application bar</a></li>
                            <li><a href="menu.html">Menus</a></li>
                            <li><a href="fluent-menu.html">Fluent menu</a></li>
                            <li><a href="sidebar.html">Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Controls</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="button-groups.html">Button groups</a></li>
                            <li><a href="keypad.html">Keypad</a></li>
                            <li><a href="tabcontrol.html">Tab Control</a></li>
                            <li><a href="treeview.html">TreeView</a></li>
                            <li><a href="listview.html">ListView</a></li>
                            <li><a href="sliders.html">Slider</a></li>
                            <li><a href="stepper.html">Stepper</a></li>
                            <li><a href="wizard.html">Wizard</a></li>
                            <li><a href="wizard2.html">Wizard2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Visualization</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="tiles.html">Tiles</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li class="no-display"><a href="windows.html">Windows</a></li>
                            <li><a href="popovers.html">Popovers</a></li>
                            <li><a href="progressbar.html">Progress Bar</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="rating.html">Rating</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="hints.html">Hints</a></li>
                            <li><a href="streamer.html">Streamer</a></li>
                            <li><a href="presenter.html">Presenter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Information</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="notify.html">Notify system</a></li>
                            <li><a href="dialog.html">Dialogs</a></li>
                            <li><a href="windows.html">Window</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Date &amp; Time</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="datepicker.html">Datepicker</a></li>
                            <li><a href="countdown.html">Countdown</a></li>
                        </ul>
                    </li>
                    <li><a href="charms.html">Charms</a></li>
                    <li><a href="validator.html">Form Validator</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Events &amp; Hotkeys</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="events.html">Event binding</a></li>
                            <li><a href="hotkeys.html">Hotkey binding</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Third-party</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="select2.html">Select2</a></li>
                            <li><a href="datatables.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Utils</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li class="divider"></li>
                            <li><a href="easing.html">Easing functions</a></li>
                            <li><a href="requirejs.html">RequireJS</a></li>
                            <li class="disabled"><a href="precode.html">PreCode</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">Templates</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li><a href="templates/start-screen.html">Start screen</a></li>
                    <li><a href="templates/news-portal.html">News Portal</a></li>
                    <li><a href="templates/login.html">Login form</a></li>
                    <li><a href="templates/admin-sidebar-appbar.html">Admin with Sidebar</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">Community</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li><a href="http://forum.metroui.org.ua">Forum</a></li>
                    <li><a href="https://github.com/olton/Metro-UI-CSS">Github</a></li>
                    <li class="divider"></li>
                    <li><a href="license.html">License</a></li>
                </ul>
            </li>
        </ul>
 -->
        <span class="app-bar-pull"></span>

    </div>
</header>