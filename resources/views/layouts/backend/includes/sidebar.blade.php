<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>
            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard text-blue"></i> Dashboard
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/abouts*') ? 'active' : '' }}">
                    <a href="{{ route('admin.abouts.index') }}">
                        <i class="fa fa-adn text-blue"></i> About us
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/homePost*') ? 'active' : '' }}">
                    <a href="{{ route('admin.homePost.index') }}">
                        <i class="fa fa-clipboard text-blue"></i> Home page post
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/financialplanning*') ? 'active' : '' }}">
                    <a href="{{ route('admin.financialplanning.index') }}">
                        <i class="fa fa-clipboard text-blue"></i> financial Planning
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/financialAcademy*') ? 'active' : '' }}">
                    <a href="{{ route('admin.financialAcademy.index') }}">
                        <i class="fa fa-clipboard text-blue"></i> financial Academy
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/blogPost*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogPost.index') }}">
                        <i class="fa fa-clipboard text-blue"></i> Blog post
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/social') ? 'active' : '' }}">
                    <a href="{{ route('admin.social') }}">
                        <i class="fa fa-share-square text-blue"></i> Social link
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/homevideo') ? 'active' : '' }}">
                    <a href="{{ route('admin.homevideo') }}">
                        <i class="fa fa-play text-blue"></i> Home page video
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/contact') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact') }}">
                        <i class="fa fa-phone text-blue"></i> Contact info
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/contactus*') ? 'active' : '' }}">
                    <a href="{{ route('admin.contactus.index') }}">
                        <i class="fa fa-envalope text-blue"></i> Messages
                        <span class="pull-right-container"> </span>
                    </a>
                </li>

                <li class="header">SYSTEM</li>

            @endif

        <!--FOR AUTHOR-->

            @if(Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="fa fa-dashboard text-blue"></i> Dashboard
                        <span class="pull-right-container"> </span>
                    </a>
                </li>
                <li class="header">SYSTEM</li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
