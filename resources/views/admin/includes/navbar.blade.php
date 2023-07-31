<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="{{ route('admin.home') }}" class="d-inline-block">
            <!-- <img src="./images/logo_light.png" alt=""> -->
            <h4 style="color: white; font-weight: bold; margin: auto;">TalkMaze</h4>
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('admin/images/'.auth()->user()) }}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{ ucfirst(Auth::user()->name) }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('admin.account.edit', [Auth::user()->id]) }}" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item"><i class="icon-switch2"></i> {{ __('Logout') }}</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
