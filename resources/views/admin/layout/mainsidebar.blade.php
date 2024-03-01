
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
{{--        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">User INfo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--            <div class="image">--}}
{{--                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
            <div class="info">
                <a href="#" class="d-block"> Craft Himalayan Trade Nepal
                    </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{request()->is('dashboard*')?'menu-open':''}}">
                        <a href="{{route('admin.home')}}" class="nav-link {{request()->is('home*')?'active':''}}">
                        <i class="fas fa-desktop"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Web Content</a>
                    </div>
                </div>
                <li class="nav-item {{request()->is('aboutUs*')?'menu-open':''}}">
                    <a href="{{route('admin.aboutUs.index')}}" class="nav-link {{request()->is('aboutUs*')?'active':''}}">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                           AboutUs
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('slider*')?'menu-open':''}}">
                    <a href="{{route('admin.slider.index')}}" class="nav-link {{request()->is('slider*')?'active':''}}">
                        <i class="fas fa-images"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('news*')?'menu-open':''}}">
                    <a href="{{route('admin.news.index')}}" class="nav-link {{request()->is('news*')?'active':''}}">
                        <i class="fas fa-book-open"></i>
                        <p>
                           News
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('siteSetting*')?'menu-open':''}}">
                    <a href="{{route('admin.siteSetting')}}" class="nav-link {{request()->is('siteSetting*')?'active':''}}">
                        <i class="fas fa-edit"></i>
                        <p>
                           SiteSetting
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('video*')?'menu-open':''}}">
                    <a href="{{route('admin.video.index')}}" class="nav-link {{request()->is('video*')?'active':''}}">
                        <i class="fas fa-play-circle"></i>
                        <p>
                        Video
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('picture*')?'menu-open':''}}">
                    <a href="{{route('admin.picture.index')}}" class="nav-link {{request()->is('picture*')?'active':''}}">
                        <i class="	fas fa-file-image"></i>
                        <p>
                         Picture
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('item*')?'menu-open':''}}">
                    <a href="{{route('admin.item.index')}}" class="nav-link {{request()->is('item*')?'active':''}}">
                        <i class="fas fa-image"></i>
                        <p>
                          Item
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('order*')?'menu-open':''}}">
                    <a href="{{route('admin.order.index')}}" class="nav-link {{request()->is('order*')?'active':''}}">
                        <i class="fas fa-pencil-alt"></i>
                        <p>
                          Order
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('feedback*')?'menu-open':''}}">
                    <a href="{{route('admin.feedback.index')}}" class="nav-link {{request()->is('feedback*')?'active':''}}">
                        <i class="far fa-edit"></i>
                        <p>
                          Feedback
                        </p>
                    </a>
                </li>


                <li class="nav-item {{request()->is('logout*')?'menu-open':''}}">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--                    <div class="info">--}}
{{--                        <a href="#" class="d-block"></a>--}}
{{--                    </div>--}}
                </div>


{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" href="{{route('logout')}}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                       document.getElementById('logout-form').submit();">--}}
{{--                        <i class="fas fa-arrow-alt-circle-right "></i>--}}
{{--                        <p>Logout</p>--}}
{{--                    </a>--}}
{{--                    <form id="logout-form" action="{{route('logout')}}"method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



