<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
        <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link {{Request::is('home') ? 'active' : ''}}">
                <i class="icon-home4"></i>
                <span>
					Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{Request::is(['users','users/*']) ? 'active' : ''}}">
                <i class="icon-user"></i>
                <span>
					User Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('debates.index') }}" class="nav-link {{Request::is(['debates','debates/*']) ? 'active' : ''}}">
                <i class="icon-user-lock"></i>
                <span>
                    Debate Management
                </span>
            </a>
        </li>

        <li class="nav-item dropdown dropdown-user">
            <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <i class="icon-accessibility"></i>
                <span>
                    Competition Management
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('competitions.index') }}" class="dropdown-item {{Request::is(['competitions','competitions/*']) ? 'active' : ''}}">
                    <i class="icon-user-lock"></i>
                    <span>
                        Competitions
                    </span>
                </a>
                <a href="{{ route('competitionusers.index') }}" class="dropdown-item {{Request::is(['competitionusers','competitionusers/*']) ? 'active' : ''}}">
                    <i class="icon-user"></i>
                    <span>
                        Registered Competition Users
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-item">
            <a href="{{ route('news.index') }}" class="nav-link {{Request::is(['news','news/*']) ? 'active' : ''}}">
                <i class="icon-user-lock"></i>
                <span>
                    News Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('comments.index') }}" class="nav-link {{Request::is(['comments','comments/*']) ? 'active' : ''}}">
                <i class="icon-scissors"></i>
                <span>
                    Comment Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user_requests.index') }}" class="nav-link {{Request::is(['user_requests','user_requests/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    User Requests Management
                </span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('refund_request.index') }}" class="nav-link {{Request::is(['refund_request', 'refund_request/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Refund Requests Management
                </span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('request_coach.index') }}" class="nav-link {{Request::is(['request_coach', 'request_coach/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Student Requests
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('demo_request.index') }}" class="nav-link {{Request::is(['demo_request', 'demo_request/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Demo Requests
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('session.index') }}" class="nav-link {{Request::is(['session', 'session/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Sessions
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('coach.index') }}" class="nav-link {{Request::is(['coach', 'coach*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Coaches
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{Request::is(['categories','categories/*']) ? 'active' : ''}}">
                <i class="icon-scissors"></i>
                <span>
                    Category Management
                </span>
            </a>
        </li>



        <li class="nav-item">
            <a href="{{ route('courses.index') }}" class="nav-link {{Request::is(['courses','courses/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Course Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('show_enrolls') }}" class="nav-link {{Request::is(['enrollment','enrollment/*']) ? 'active' : ''}}">
                <i class="icon-books"></i>
                <span>
                    Enroll Users (courses)
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('class_plans.index') }}" class="nav-link {{Request::is(['class_plans','class_plans']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Class Plan Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('coupons.index') }}" class="nav-link {{Request::is(['coupons','coupons/*']) ? 'active' : ''}}">
                <i class="icon-scissors"></i>
                <span>
                    Discount Coupons Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('lessons.index') }}" class="nav-link {{Request::is(['lessons','lessons/*']) ? 'active' : ''}}">
                <i class="icon-scissors"></i>
                <span>
                    Lesson Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('course_contents.index') }}" class="nav-link {{Request::is(['course_contents','course_contents/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Course Content Management
                </span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a href="{{ route('content_types.index') }}" class="nav-link {{Request::is(['content_types','content_types/*']) ? 'active' : ''}}">
                <i class="icon-store2"></i>
                <span>
                    Content Type Management
                </span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="{{ route('jobs.index') }}" class="nav-link {{Request::is(['jobs','jobs/*']) ? 'active' : ''}}">
                <i class="icon-notebook"></i>
                <span>
                    Job Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('applicants.index') }}" class="nav-link {{Request::is(['applicants','applicants/*']) ? 'active' : ''}}">
                <i class="icon-user-lock"></i>
                <span>
                    Applicant Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('plans.index') }}" class="nav-link {{Request::is(['plans','plans/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Packages Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('coaching_bulks.index') }}" class="nav-link {{Request::is(['coaching_bulks','coaching_bulks/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Coaching Bulk Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('partners.index') }}" class="nav-link {{Request::is(['partners','partners/*']) ? 'active' : ''}}">
                <i class="icon-notebook"></i>
                <span>
                    Partner Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('testimonials.index') }}" class="nav-link {{Request::is(['testimonials','testimonials/*']) ? 'active' : ''}}">
                <i class="icon-user-lock"></i>
                <span>
					Testimonial Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('faqs.index') }}" class="nav-link {{Request::is(['faqs','faqs/*']) ? 'active' : ''}}">
                <i class="icon-store2"></i>
                <span>
					Faqs Management
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('subscribes.index') }}" class="nav-link {{Request::is(['subscribes','subscribes/*']) ? 'active' : ''}}">
                <i class="icon-shield2"></i>
                <span>
                    Subscriber Management
                </span>
            </a>
        </li>
    </ul>
</div>