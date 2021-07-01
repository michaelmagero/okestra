<!-- begin::Body -->
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
		<!-- BEGIN: Left Aside -->
		<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
			<i class="la la-close"></i>
        </button>

		<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            @if (Auth::user()->role == 0)
                <!-- BEGIN: Aside Menu -->
                    <div id="m_ver_menu" class="mt-3 m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500" >
                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__item" aria-haspopup="true" >
                                <a  href="{{ url('/admin-dash') }}" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-apps"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Dashboard
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/admin-users') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-users"></i>
                                    <span class="m-menu__link-text">
                                        Staff
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/admin-applications') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon fa fa-edit"></i>
                                    <span class="m-menu__link-text">
                                        Applications
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/admin-vehicles') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon fa fa-car"></i>
                                    <span class="m-menu__link-text">
                                        Vehicles
                                    </span>
                                </a>
                            </li>

                            {{-- <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/tier2') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-chat"></i>
                                    <span class="m-menu__link-text">
                                        Messages
                                    </span>
                                </a>
                            </li> --}}

                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a href="{{ url('/logout') }}" class="m-menu__link m-menu__toggle"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out m-menu__link-icon "></i>
                                    <span class="m-menu__link-text">
                                        Sign Out
                                    </span>
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                <!-- END: Aside Menu -->
            @elseif (Auth::user()->role == 1)
                <!-- BEGIN: Aside Menu -->
                    <div id="m_ver_menu" class="mt-3 m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500" >
                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__item" aria-haspopup="true" >
                                <a  href="{{ url('/admin-dash') }}" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-apps"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Dashboard
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/vehicles') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon fa fa-car"></i>
                                    <span class="m-menu__link-text">
                                        Vehicles
                                    </span>
                                </a>
                            </li>

                            {{-- <li class="m-menu__item  m-menu__item--submenu " aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                <a  href="{{ url('/tier2') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-chat"></i>
                                    <span class="m-menu__link-text">
                                        Messages
                                    </span>
                                </a>
                            </li> --}}

                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a href="{{ url('/logout') }}" class="m-menu__link m-menu__toggle"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out m-menu__link-icon "></i>
                                    <span class="m-menu__link-text">
                                        Sign Out
                                    </span>
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                <!-- END: Aside Menu -->
            @endif
		</div>
		<!-- END: Left Aside -->
