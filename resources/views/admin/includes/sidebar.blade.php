<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="{{ route('admin.account.edit', [Auth::user()->id]) }}"><img src="{{ asset('storage/storage/'.Auth::user()->profile->image) }}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ ucfirst(Auth::user()->name) }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i>
                            @if(Auth::user())
                                {{ ucfirst(Auth::user()->role) }}
                            @endif
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        @include('admin.includes.sidenav')
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
