        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 40px;">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                                    href="{{ url('admin/dashboard') }}">Dashboard</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/mega-menu-list') ? 'active' : '' }}" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-102"
                                    aria-controls="submenu-102">Mega Menu</a>
                                <div id="submenu-102"
                                    class="collapse submenu {{ request()->is('admin/mega-menu-list') ? 'show' : '' }}"
                                    style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/mega-menu-list') ? 'active' : '' }}"
                                                href="{{ url('admin/mega-menu-list') }}">Region List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/create-user') ? 'active' : '' }} {{ request()->is('admin/user-list') ? 'active' : '' }}"
                                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1"
                                    aria-controls="submenu-1">Users</a>
                                <div id="submenu-1"
                                    class="collapse submenu {{ request()->is('admin/create-user') ? 'show' : '' }} {{ request()->is('admin/user-list') ? 'show' : '' }}"
                                    style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/create-user') ? 'active' : '' }}"
                                                href="{{ url('admin/create-user') }}">Add User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/user-list') ? 'active' : '' }}"
                                                href="{{ url('admin/user-list') }}">User List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link {{ request()->is('admin/properties-list') ? 'active' : '' }}"
                                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-101"
                                    aria-controls="submenu-101">Properties</a>
                                <div id="submenu-101"
                                    class="collapse submenu {{ request()->is('admin/properties-list') ? 'show' : '' }}"
                                    style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/properties-list') ? 'active' : '' }}"
                                                href="{{ url('admin/properties-list') }}">Properties List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            {{-- <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">Properties</a>

                            <li class="nav-item">
                                <a class="nav-link" href="">Users</a>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1">Properties</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/create-property')}}">Add
                            Property</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Property List</a>
                            </li>
                        </ul>
                    </div>
                    </li> --}}



                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/create-story') ? 'active' : '' }} {{ request()->is('admin/story-list') ? 'active' : '' }}"
                            href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                            aria-controls="submenu-3">Stories</a>
                        <div id="submenu-3"
                            class="collapse submenu {{ request()->is('admin/create-story') ? 'show' : '' }} {{ request()->is('admin/story-list') ? 'show' : '' }}"
                            style="">
                            <ul class="nav flex-column">

                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->is('admin/create-story') ? 'active' : '' }}"
                                        href="{{ url('admin/create-story') }}">Add Story</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/story-list') ? 'active' : '' }}"
                                        href="{{ url('admin/story-list') }}">Story List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/create-global-network') ? 'active' : '' }} {{ request()->is('admin/edit-global-network*') ? 'active' : '' }} {{ request()->is('admin/global-network-list') ? 'active' : '' }}"
                            href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4"
                            aria-controls="submenu-4">Global Network</a>
                        <div id="submenu-4"
                            class="collapse submenu {{ request()->is('admin/create-global-network') ? 'show' : '' }} {{ request()->is('admin/edit-global-network*') ? 'show' : '' }} {{ request()->is('admin/global-network-list') ? 'show' : '' }}"
                            style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/create-global-network') ? 'active' : '' }}"
                                        href="{{ url('admin/create-global-network') }}">Add Global-Network</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/global-network-list') ? 'active' : '' }}"
                                        href="{{ url('admin/global-network-list') }}">Global Network List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/create-global-integrated-service') ? 'active' : '' }} {{ request()->is('admin/edit-global-integrated-service*') ? 'active' : '' }} {{ request()->is('admin/global-integrated-service-list') ? 'active' : '' }}"
                            href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-505"
                            aria-controls="submenu-505">Global Network Integrated Service</a>
                        <div id="submenu-505"
                            class="collapse submenu {{ request()->is('admin/create-global-integrated-service') ? 'show' : '' }} {{ request()->is('admin/edit-global-integrated-service*') ? 'show' : '' }} {{ request()->is('admin/global-integrated-service-list') ? 'show' : '' }}"
                            style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/create-global-integrated-service') ? 'active' : '' }}"
                                        href="{{ url('admin/create-global-integrated-service') }}">Add Global Integrated
                                        Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/global-integrated-service-list') ? 'active' : '' }}"
                                        href="{{ url('admin/global-integrated-service-list') }}">Global Integrated
                                        Service
                                        List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/create-integrated-service') ? 'active' : '' }} {{ request()->is('admin/edit-integrated-service*') ? 'active' : '' }} {{ request()->is('admin/integrated-service-list') ? 'active' : '' }}"
                            href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5"
                            aria-controls="submenu-5">Integrated Service</a>
                        <div id="submenu-5"
                            class="collapse submenu {{ request()->is('admin/create-integrated-service') ? 'show' : '' }} {{ request()->is('admin/edit-integrated-service*') ? 'show' : '' }} {{ request()->is('admin/integrated-service-list') ? 'show' : '' }}"
                            style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/create-integrated-service') ? 'active' : '' }}"
                                        href="{{ url('admin/create-integrated-service') }}">Add Integrated
                                        Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/integrated-service-list') ? 'active' : '' }}"
                                        href="{{ url('admin/integrated-service-list') }}">Integrated Service
                                        List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/create-about-us') ? 'active' : '' }} {{ request()->is('admin/edit-about-us*') ? 'active' : '' }} {{ request()->is('admin/about-us-list') ? 'active' : '' }}"
                            href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6"
                            aria-controls="submenu-6">About Us</a>
                        <div id="submenu-6"
                            class="collapse submenu {{ request()->is('admin/create-about-us') ? 'show' : '' }} {{ request()->is('admin/edit-about-us*') ? 'show' : '' }} {{ request()->is('admin/about-us-list') ? 'show' : '' }}"
                            style="">
                            <ul class="nav flex-column">

                                {{-- <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/create-about-us') ? 'active' : '' }}"
                                href="{{ url('admin/create-about-us') }}">Add About-us</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/about-us-list') ? 'active' : '' }}"
                            href="{{ url('admin/about-us-list') }}">About-us List</a>
                    </li>
                    </ul>
            </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->is('admin/create-our-team') ? 'active' : '' }} {{ request()->is('admin/edit-our-team*') ? 'active' : '' }} {{ request()->is('admin/our-team-list') ? 'active' : '' }}"
                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7"
                    aria-controls="submenu-7">Our Team</a>
                <div id="submenu-7"
                    class="collapse submenu {{ request()->is('admin/create-our-team') ? 'show' : '' }} {{ request()->is('admin/edit-our-team*') ? 'show' : '' }} {{ request()->is('admin/our-team-list') ? 'show' : '' }}"
                    style="">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/create-our-team') ? 'active' : '' }}"
                                href="{{ url('admin/create-our-team') }}">Add Team Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/our-team-list') ? 'active' : '' }}"
                                href="{{ url('admin/our-team-list') }}">Our Team List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->is('admin/create-history') ? 'active' : '' }} {{ request()->is('admin/edit-history*') ? 'active' : '' }} {{ request()->is('admin/history-list') ? 'active' : '' }}"
                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8"
                    aria-controls="submenu-8">History</a>
                <div id="submenu-8"
                    class="collapse submenu {{ request()->is('admin/create-history') ? 'show' : '' }} {{ request()->is('admin/edit-history*') ? 'show' : '' }} {{ request()->is('admin/history-list') ? 'show' : '' }}"
                    style="">
                    <ul class="nav flex-column">

                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('admin/create-history') ? 'active' : '' }}"
                                href="{{ url('admin/create-history') }}">Add History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/history-list') ? 'active' : '' }}"
                                href="{{ url('admin/history-list') }}">History List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->is('admin/create-timeline') ? 'active' : '' }} {{ request()->is('admin/timeline-list') ? 'active' : '' }}"
                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9"
                    aria-controls="submenu-9">Timeline</a>
                <div id="submenu-9"
                    class="collapse submenu {{ request()->is('admin/create-timeline') ? 'show' : '' }} {{ request()->is('admin/timeline-list') ? 'show' : '' }}"
                    style="">
                    <ul class="nav flex-column">

                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('admin/create-timeline') ? 'active' : '' }}"
                                href="{{ url('admin/create-timeline')}}">Add Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/timeline-list') ? 'active' : '' }}"
                                href="{{ url('admin/timeline-list')}}">Timeline List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->is('admin/create-offices') ? 'active' : '' }} {{ request()->is('admin/offices-list') ? 'active' : '' }}"
                    href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10"
                    aria-controls="submenu-10">Offices</a>
                <div id="submenu-10"
                    class="collapse submenu {{ request()->is('admin/create-offices') ? 'show' : '' }} {{ request()->is('admin/offices-list') ? 'show' : '' }}"
                    style="">
                    <ul class="nav flex-column">

                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('admin/create-offices') ? 'active' : '' }}"
                                href="{{ url('admin/create-offices')}}">Add Offices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/offices-list') ? 'active' : '' }}"
                                href="{{ url('admin/offices-list')}}">Offices List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/contact-us-list') ? 'active' : '' }}"
                            href="{{ url('admin/contact-us-list')}}">Contact Us List</a>
                    </li>
                </ul>
            </li>



            {{-- <li>
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2">Career</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="">Add Career</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Career List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

            {{-- <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3">Stories</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/create-story') }}">Add Story</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/story-list') }}">Story List</a>
            </li>
            </ul>
        </div>
        </li> --}}

        {{-- <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-40" aria-controls="submenu-40">About Us</a>
                                <div id="submenu-40" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/about-us/create') }}">Add
        About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/about-us') }}">About List</a>
        </li>
        </ul>
        </div>
        </li> --}}

        <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/home-about*') ? 'active' : '' }} {{ request()->is('admin/home-properties*') ? 'active' : '' }} {{ request()->is('admin/main-list') ? 'active' : '' }} {{ request()->is('admin/edit-slide/*') ? 'active' : '' }}"
                href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-50"
                aria-controls="submenu-50">Home Page</a>

            <div id="submenu-50"
                class="collapse submenu {{ request()->is('admin/home-about*') ? 'show' : '' }} {{ request()->is('admin/home-properties*') ? 'show' : '' }} {{ request()->is('admin/main-list') ? 'show' : '' }} {{ request()->is('admin/edit-slide/*') ? 'show' : '' }}"
                style="">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/home-about') ? 'active' : '' }}"
                            href="{{ url('admin/home-about') }}">About Us</a>
                    </li>
                    {{-- <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/home-properties') ? 'active' : '' }}"
                    href="{{ url('admin/home-properties') }}">Properties
                    List</a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/main-list') ? 'active' : '' }}"
                href="{{ url('admin/main-list') }}">Banner</a>
        </li>
        </ul>
        </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/applicant*') ? 'active' : '' }} {{ request()->is('admin/career-details') ? 'active' : '' }} {{ request()->is('admin/edit-slide/*') ? 'active' : '' }}"
                href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-career"
                aria-controls="submenu-career">Career</a>

            <div id="submenu-career"
                class="collapse submenu {{ request()->is('admin/applicant*') ? 'show' : '' }} {{ request()->is('admin/career-details') ? 'show' : '' }} {{ request()->is('admin/edit-slide/*') ? 'show' : '' }}"
                style="">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/applicant') ? 'active' : '' }}"
                            href="{{ url('admin/applicant') }}">Applicant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/career-details') ? 'active' : '' }}"
                            href="{{ url('admin/career-details') }}">Career Details</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/service-list') ? 'active' : '' }} {{ request()->is('admin/edit-service/*') ? 'active' : '' }} {{ request()->is('admin/service-main*') ? 'active' : '' }} {{ request()->is('admin/service-valution*') ? 'active' : '' }} {{ request()->is('admin/service-insight*') ? 'active' : '' }} {{ request()->is('admin/service-explore*') ? 'active' : '' }} {{ request()->is('admin/service-consultants*') ? 'active' : '' }}"
                href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-60"
                aria-controls="submenu-60">Service Page</a>

            <div id="submenu-60"
                class="collapse submenu {{ request()->is('admin/service-list') ? 'show' : '' }} {{ request()->is('admin/edit-service/*') ? 'show' : '' }}  {{ request()->is('admin/service-main*') ? 'show' : '' }} {{ request()->is('admin/service-valution*') ? 'show' : '' }} {{ request()->is('admin/service-insight*') ? 'show' : '' }} {{ request()->is('admin/service-explore*') ? 'show' : '' }} {{ request()->is('admin/service-consultants*') ? 'show' : '' }}"
                style="">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-list') ? 'active' : '' }}"
                            href="{{ url('admin/service-list') }}">Main List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-main') ? 'active' : '' }}"
                            href="{{ url('admin/service-main') }}">Offer List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-valution') ? 'active' : '' }}"
                            href="{{ url('admin/service-valution') }}">Valuation List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-insight') ? 'active' : '' }}"
                            href="{{ url('admin/service-insight') }}">Insights List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-explore') ? 'active' : '' }}"
                            href="{{ url('admin/service-explore') }}">Explore List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/service-consultants') ? 'active' : '' }}"
                            href="{{ url('admin/service-consultants') }}">Consultants List</a>
                    </li>
                </ul>
            </div>
        </li>


        {{-- <li class="nav-item">
                                        <a class="nav-link" href=""> Orders </a>
                                    </li> --}}

        </ul>
        </div>
        </nav>
        </div>

        </ul>
        </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->