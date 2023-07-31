<?php

namespace App\Http\Controllers;

use App\Category;
use App\ClassCategory;
use App\UserCoupon;
use App\ClassPlan;
use App\Comment;
use App\Competition;
// use Illuminate\Support\Facades\Mail;
use App\Course;
use App\CourseQuestion;
use App\Day;
use App\Debate;
use App\DiscountCodes;
use App\Faq;
use App\Job;
use App\Message;
use App\News;
use App\NotificationStream;
use App\Partner;
use App\Plan;
use App\Testimonial;
use App\User;
use App\UserProfile;
use App\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\CoachRequest;
use App\TutorTimeTable;
use App\Package;
use App\UserPlan;
use App\Transaction;
use App\Schedule;
use App\Conversation;


class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		$testimonials = Testimonial::select(['id', 'name', 'email', 'feedback', 'image'])->get();
		$partners = Partner::all();
		return view('user.pages.index', compact('testimonials', 'partners'));
	}

	public function get_user_email($email) {
		$user = User::where('email', $email)->first();
		return $user->name;
	}

	public function forum(Request $request) {
		if ($request->keyword != '') {
			$debates = Debate::with(['user'])->where('topic', 'LIKE', '%' . $request->keyword . '%')->get();
			$keyword = $request->keyword;
		} else {
			$debates = Debate::with(['user'])->latest()->limit(16)->get();
			$keyword = '';
		}
		return view('user.pages.forum', compact('debates', 'keyword'));
	}

	public function forum_detail($slug) {
		if (auth()->user()) {
			auth()->user()->notifications()->where('verb', 'COMMENT')->update(['read' => 1]);
		}
		$debate = Debate::with(['user', 'comments_in_favour', 'comments_against'])->withCount(['likes', 'dislikes', 'comments', 'comments_in_favour', 'comments_against'])->where('slug', $slug)->first();
		// dd($slug);
		$created = new Carbon($debate->created_at);
		$now = Carbon::now();
		$posted_on = ($created->diff($now)->days < 1)
		? 'today'
		: (($created->diff($now)->days > 7) ? $created->format('M d Y') : $created->diffForHumans());

		// loop to store time for favourite comments
		foreach ($debate->comments_in_favour as $key => $value) {
			$comment_on = ($value->created_at->diffInHours($now) < 1)
			? $value->created_at->diffInMinutes($now) . ' min ago'
			: (($value->created_at->diff($now)->days > 1) ? $value->created_at->format('M d Y') : $value->created_at->diffForHumans());

			$value->comment_at = $comment_on;

			foreach ($value->childrens as $children) {

				$comment_on = ($children->created_at->diffInHours($now) < 1)
				? $children->created_at->diffInMinutes($now) . ' min ago'
				: (($children->created_at->diff($now)->days > 1) ? $children->created_at->format('M d Y') : $children->created_at->diffForHumans());

				$children->comment_at = $comment_on;
			}
		}

		// loop to store time for against comments
		foreach ($debate->comments_against as $key => $value) {

			$comment_on = ($value->created_at->diffInHours($now) < 1)
			? $value->created_at->diffInMinutes($now) . ' min ago'
			: (($value->created_at->diff($now)->days > 1) ? $value->created_at->format('M d Y') : $value->created_at->diffForHumans());

			$value->comment_at = $comment_on;

			foreach ($value->childrens as $children) {

				$comment_on = ($children->created_at->diffInHours($now) < 1)
				? $children->created_at->diffInMinutes($now) . ' min ago'
				: (($children->created_at->diff($now)->days > 1) ? $children->created_at->format('M d Y') : $children->created_at->diffForHumans());

				$children->comment_at = $comment_on;
			}
		}
		// dynamic progressbar
		$total_likes_dislikes = $debate->likes_count + $debate->dislikes_count;

		if ($total_likes_dislikes != 0) {
			$debate->avg_likes = ($debate->likes_count / $total_likes_dislikes) * 100;

			$debate->avg_dislikes = ($debate->dislikes_count / $total_likes_dislikes) * 100;
		}

		return view('user.pages.forum-detail', compact('debate', 'posted_on'));
	}
	//SP code competition
	public function competition(Request $request) {
		$competition = new Competition;
		$slug = $request->slug;
		$c_id = $request->id;
		$keyword = $request->keyword;
		$trend = "Current";
		$competitionall = Competition::withCount('competitionusers')->get();

		if ($slug != '' && $c_id == '') {
			$competition = Competition::where('slug', $slug)->first();

			return view('user.pages.single-competition', compact('competition'));
		} else if ($c_id == '' && $slug == '' && $keyword != '') {
			$competition = new Competition;
			$competition->name = 'Search Results';

			// $competitions = Competition::where('title','LIKE','%'.$keyword.'%')->get();
			$all_competitions = Competition::withCount('competitionusers')->where('title', 'LIKE', '%' . $keyword . '%')->get();
			$keyword = $request->keyword;

			return view('user.pages.competition', compact('competitionall', 'all_competitions', 'keyword', 'trend'));
		} else {
			$competition->name = 'All Competition';
			$all_competitions = Competition::withCount('competitionusers')->get();
		}
		return view('user.pages.competition', compact('competitionall', 'all_competitions', 'trend'));
	}
	public function competitiontrend(Request $request) {
		$competition = new Competition;
		$competitionall = Competition::withCount('competitionusers')->get();
		$trend = $request->trend;
		if ($trend != '') {
			if ($trend == "current") {
				$all_competitions = Competition::withCount('competitionusers')->where('status', 'current')->get();
			}
			if ($trend == "upcoming") {
				$all_competitions = Competition::withCount('competitionusers')->where('status', 'future')->get();
			}
			if ($trend == "past") {
				$all_competitions = Competition::withCount('competitionusers')->where('status', 'past')->get();
			}

			return view('user.pages.competition', compact('competition', 'competitionall', 'all_competitions', 'trend'));
		} else {

			$competition->name = 'All Competition';
			$all_competitions = Competition::withCount('competitionusers')->get();
		}
		return view('user.pages.competition', compact('competitionall', 'competitions', 'all_competitions', 'trend'));
	}

	public function resources() {
		$courses = Course::with(['category:id,name', 'user'])
			->withCount('users_enroll')
			->where('is_private', 0)
			->get();

		$categories = Category::select('name', 'image', 'id')
			->where('parent_id', '=', null)
			->limit(7)
			->get();

		$cat_count = Category::where('parent_id', '=', null)
			->count();

		return view('user.pages.resources', compact('courses', 'categories', 'cat_count'));
	}

	public function coaching(Request $request) {
		$plans = Plan::select(['id', 'name', 'duration', 'price', 'description'])->limit(3)->get();

		$from = $request->get('redirect');
		$data_id = $request->get('data_id');

		return view('user.pages.pricing', compact('plans', 'from', 'data_id'));
	}

	public function login() {
		return view('user.pages.login');
	}

	public function register() {
		return view('user.pages.register');
	}

	public function partner() {
		$partners = Partner::all();
		return view('user.pages.partner', compact('partners'));
	}

	public function about_us() {
		$coaches = User::whereHas('roles', function ($r) {
			return $r->where('name', 'coach')->orWhere('name', 'admin');
		})->with('profile')->get();
		return view('user.pages.about-us', compact('coaches'));
	}

	public function faqs(Request $request) {
		if ($request->keyword != '') {
			$faqs = Faq::where('question', 'LIKE', '%' . $request->keyword . '%')->get();
			$keyword = $request->keyword;
		} else {
			$faqs = Faq::select(['id', 'question', 'answer', 'created_at', 'updated_at'])->get();
			$keyword = '';
		}

		return view('user.pages.faqs', compact('faqs', 'keyword'));
	}

	public function join_team() {
		$jobs = Job::all();

		if (!empty($jobs)) {
			foreach ($jobs as $key => $value) {
				$last_date = new Carbon($value->apply_by);
				$now = Carbon::now();
				$last_date = ($last_date->diff($now)->days < 1)
				? 'today'
				: (($last_date->diff($now)->days > 7) ? $last_date->format('M d Y') : $last_date->diffForHumans());
				$value->apply_by = $last_date;
			}
		}
		return view('user.pages.join-team', compact('jobs'));
	}

	public function job_detail($slug) {
		$job = Job::where('slug', $slug)->first();
		$jobs = Job::all()->take(10);

		if (!empty($jobs)) {
			foreach ($jobs as $key => $value) {
				$last_date = new Carbon($value->apply_by);
				$now = Carbon::now();
				$last_date = ($last_date->diff($now)->days < 1)
				? 'today'
				: (($last_date->diff($now)->days > 7) ? $last_date->format('M d Y') : $last_date->diffForHumans());
				$value->apply_by = $last_date;
			}
		}
		return view('user.pages.job-detail', compact(['job', 'jobs']));
	}

	public function job_apply($slug) {
		$job = Job::where('slug', $slug)->first();
		$days = Day::select('name', 'id')->get();

		return view('user.pages.job-title', compact('job', 'days'));
	}

	public function forget_password() {
		return view('user.pages.forget-password');
	}

	public function course(Request $request) {

		$course = new Course;
		$slug = $request->slug;
		$cat_id = $request->cat_id;
		$keyword = $request->keyword;

		if ($slug != '' && $cat_id == '') {

			$course = Course::with(['lessons', 'lessons_text', 'lessons_audio', 'lessons_video', 'users', 'user', 'content'])->withCount(['reviews', 'users_enroll'])->where('slug', $slug)->first();

			$course_id = $course->id;
			$now = Carbon::now();
			if (!empty($course->lessons)) {

				foreach ($course->lessons as $key => $lesson) {

					foreach ($lesson->course_contents as $key => $content) {

						$posted_on = new Carbon($content->created_at);
						$posted_on = ($posted_on->diff($now)->days < 1)
						? 'today'
						: (($posted_on->diff($now)->days > 7) ? $posted_on->format('M d Y') : $posted_on->diffForHumans());
						$content->posted_on = $posted_on;

					}
				}
			}
			// dd($course->user->name);
			$coursequestions = CourseQuestion::with(['course', 'user', 'coursequestions_likes'])->where('course_id', $course_id)->where('is_valid', 0)->get();
			$coursequestions_dislikes = DB::table('coursequestions_likes')
				->where('course_id', $course_id)->where('type', 'dislike')->count();
			$coursequestions_likes = DB::table('coursequestions_likes')
				->where('course_id', $course_id)->where('type', 'like')->count();
			// print_r($coursequestions[0]->coursequestions_likes[0]->type);exit;
			return view('user.pages.single-course', compact('course', 'course_id', 'coursequestions', 'coursequestions_dislikes', 'coursequestions_likes'));
		} else if ($cat_id != '' && $slug == '') {

			$course->name = $request->cat_name . ' ' . 'Courses';
			$courses = Course::with(['category:id,name', 'user'])->withCount('users_enroll')->where('category_id', $cat_id)->where('is_private', 0)->get();
		} else if ($cat_id == '' && $slug == '' && $keyword != '') {
			$course = new Course;
			$course->name = 'Search Results';

			$courses = Course::with(['category:id,name', 'user'])->withCount('users_enroll')->where('name', 'LIKE', '%' . $request->keyword . '%')->where('is_private', 0)->get();
			$all_courses = Course::with(['category:id,name', 'user'])->withCount('users_enroll')->get();
			$keyword = $request->keyword;

			return view('user.pages.course', compact('course', 'courses', 'all_courses', 'keyword'));
		} else {

			$course->name = 'All Courses';
			$courses = Course::with(['category:id,name', 'user'])->withCount('users_enroll')->where('is_private', 0)->get();
		}

		$all_courses = Course::with(['category:id,name', 'user'])->withCount('users_enroll')->get();

		return view('user.pages.course', compact('course', 'courses', 'all_courses'));
	}

	// dashboard

	public function dashboard()
    {
        if(auth()->user()->hasRole('admin'))
        {
            return redirect()->route("admin.home");
        }
        if(auth()->user()->hasRole("coach"))
        {
            $debates = Debate::with('user')->take(8)->orderBy('created_at','desc')->get();
            $authuser = User::with('profile')->whereId(auth()->id())->first();
            $scheduals = null;
            $running = false;
            $coach = null;
            if(auth()->user()->hasRole('coach')){
                $session = DB::table('sessions')->where('tutor_id',auth()->id())->where('status',1)->orWhere('user_id',auth()->id())->where('status',1)->first();
                if($session){
                    $running = true;
                }else{
                    $running = false;
                }

                $scheduals = ClassPlan::where('host_id',auth()->id())->orderBy('date_time','asc')->get();
                if($scheduals->count() == 0){
                    $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
                }
            }else{
                $session = DB::table('sessions')->where('user_id',auth()->id())->where('status',1)->first();
                if($session){
                    $running = true;
                }else{
                    $running = false;
                }
                $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
            }
            if ($session){
                $coach = auth()->user()->tutors()->where('room_id',$session->room_id)->with('profile')->first();
            }else{
                $coach = auth()->user()->tutors()->where('is_group',0)->distinct()->first();
            }
            $x =0;
            foreach ($scheduals as $schedual) {
                if ($schedual->time_zone>0){
                    $zone = substr($schedual->time_zone,1);
                    $scheduals[$x]['date_time'] = date('Y-m-d H:i:s',strtotime($schedual->date_time.' -'.$zone.' hours'));
                }else{

                    $zone = substr($schedual->time_zone,1);
                    $scheduals[$x]['date_time'] = date('Y-m-d H:i:s',strtotime($schedual->date_time.' +'.$zone.' hours'));
                }
                $x++;
            }
            return view('tutor.dashboard.dashboard',get_defined_vars());
        }elseif(auth()->user()->hasRole("user") || auth()->user()->hasRole("parent"))
        {

            $notifications  = NotificationStream::where('receiver_id',auth()->id())->where('read',0)->orderBy('created_at','desc')->get();
            $debates = Debate::with('user')->take(8)->orderBy('created_at','desc')->get();
            $authuser = User::with('profile')->whereId(auth()->id())->first();
            $scheduals = null;
            $running = false;
            $coach = null;
            if(auth()->user()->hasRole('coach')){
                $session = DB::table('sessions')->where('tutor_id',auth()->id())->where('status',1)->orWhere('user_id',auth()->id())->where('status',1)->first();
                if($session){
                    $running = true;
                }else{
                    $running = false;
                }

                $scheduals = ClassPlan::where('host_id',auth()->id())->orderBy('date_time','asc')->get();
                if($scheduals->count() == 0){
                    $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
                }
            }else{
                $session = DB::table('sessions')->where('user_id',auth()->id())->where('status',1)->first();
                if($session){
                    $running = true;
                }else{
                    $running = false;
                }
                $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
            }
            if ($session){
                $coach = auth()->user()->tutors()->where('room_id',$session->room_id)->with('profile')->first();
            }else{
                $coach = auth()->user()->tutors()->where('is_group',0)->distinct()->first();
            }
            $x =0;
            foreach ($scheduals as $schedual) {
                if ($schedual->time_zone>0){
                    $zone = substr($schedual->time_zone,1);
                    $scheduals[$x]['date_time'] = date('Y-m-d H:i:s',strtotime($schedual->date_time.' -'.$zone.' hours'));
                }else{

                    $zone = substr($schedual->time_zone,1);
                    $scheduals[$x]['date_time'] = date('Y-m-d H:i:s',strtotime($schedual->date_time.' +'.$zone.' hours'));
                }
                $x++;
            }
            return view('student.dashboard.dashboard', compact('debates','authuser','scheduals','notifications','running','coach','session'));
        }
    }

	public function post() {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$myposts = Debate::where('user_id', auth()->id())->withCount('likes', 'dislikes', 'comments')->get();
		return view('user.dashboard.pages.post', compact('myposts', 'notifications'));
	}

	public function search_post(Request $request) {
		$myposts = Debate::where('topic', 'like', '%' . $request->search . '%')->where('user_id', auth()->id())->withCount('likes', 'dislikes', 'comments')->get();
		$type = 'search';
		return view('user.dashboard.pages.post', compact('myposts', 'type'));
	}

	public function buy_course(Request $req) {

		$id = $req->id;
		$course = Course::whereId($id)->first();

		if(isset($req->status) && $req->status == "true"){

			auth()->user()->courses()->attach($course->id);
			return redirect()->back()->with('success', 'Your payment have been successfully captured!');
		}

		
		$amount = $req->price;
		$amount = (float)$amount;
		$amount = $amount * 100;

		\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $charge = \Stripe\Charge::create([
                "amount" => $amount,
                "currency" => "cad",
                "source" => $req->stripeToken,
                "description" => "Course purchase payment.",
                "capture" => true,
            ]);

            auth()->user()->courses()->attach($course->id);

            Transaction::create([
                'stripe_id' => $charge->id,
                'student_id' => auth()->user()->id,
                'amount' => $amount,
            ]);

        } catch (\Stripe\Error\Card $e) {
            dd($e->getMessage());
        } catch (\Stripe\Error\InvalidRequest $e) {
            dd($e->getMessage());
        }
		
		return redirect()->back()->with('success', 'Your payment have been successfully captured!');
	}

	public function my_courses() {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$r = auth()->user()->courses()->paginate(10);
		return view('user.dashboard.pages.dash-resources', compact('r', 'notifications'));
	}
	public function search_my_resc(Request $request) {
		$r = auth()->user()->courses()->where('name', 'like', '%' . $request->search . '%')->paginate(10);
		$type = 'search';
		return view('user.dashboard.pages.dash-resources', compact('r', 'type'));
	}

	public function course_detail($slug) {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$course = Course::with(['lessons', 'lessons_text', 'lessons_audio', 'lessons_video', 'users', 'user', 'content'])->withCount(['reviews', 'users_enroll'])->where('slug', $slug)->first();

		$now = Carbon::now();
		if (!empty($course->lessons)) {

			foreach ($course->lessons as $key => $lesson) {

				foreach ($lesson->course_contents as $key => $content) {

					$posted_on = new Carbon($content->created_at);
					$posted_on = ($posted_on->diff($now)->days < 1)
					? 'today'
					: (($posted_on->diff($now)->days > 7) ? $posted_on->format('M d Y') : $posted_on->diffForHumans());
					$content->posted_on = $posted_on;

				}
			}
		}
		// dd($course->user->name);
		return view('user.dashboard.pages.resources', compact('course', 'notifications'));
	}

	public function chat(Request $request, $id) {
		if ($request->ajax()) {
			auth()->user()->notifications()->where('verb', 'CHAT')->update(['read' => 1]);

			$x = '';
			$messages = Message::where('sender_id', $id)->where('receiver_id', auth()->id())->orwhere('sender_id', auth()->id())->where('receiver_id', $id)->get();
			foreach ($messages as $mg) {
				if ($mg->sender_id == auth()->id()) {
					if ($mg->type == 1) {
						$x .= '<div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve" style="background-color: #69d2b1; padding: 10px;">
                                <h5 class=" mt-1" style="color:white !important; word-wrap: break-word;">' . $mg->message . '</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
					} else {
						$x .= '<div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve" style="background-color: #69d2b1; padding: 10px;">
                                 <a target="_blank" href="' . $mg->message . '"><h5 class=" mt-1" style="color:white !important; display: inline-block; word-wrap: break-word; padding: 5px;">Download File </h5><i class="fa fa-file text-white" style="display: inline-block"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
					}
				} else {
					if ($mg->type == 1) {
						$x .= '<div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light" style="padding: 10px;">
                                <h5 class="mt-1" style=" word-wrap: break-word;">' . $mg->message . '</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class=" ml-4 h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
					} else {
						$x .= '<div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light" style="padding: 10px;">
                                <a target="_blank" href="' . $mg->message . '"><h5 class=" mt-1" style="display: inline-block;">Download File </h5><i class="fa fa-file text-white" style="display: inline-block; word-wrap: break-word; padding: 5px;"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class=" ml-4 h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
					}
				}

			}
			return $x;
		} else {
			$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();

			$user = User::whereId($id)->first();
			return view('user.dashboard.pages.chat', compact('user', 'id', 'notifications'));
		}

	}

	public function mypeople() {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$data = [];
		if (auth()->user()->hasRole('coach')) {
			$ut = [];
			$data = auth()->user()->students()->where('is_group', 0)->get();
			$classes = ClassPlan::where('host_id', auth()->id())->get();
			foreach ($classes as $r) {
				$ut = $r->enrollments;
				foreach ($ut as $on) {
					$data[] = $on;
				}
			}
		} else {
			$data = auth()->user()->tutors()->where('is_group', 0)->get();
			foreach (auth()->user()->enrollments as $r) {
				$ut = User::whereId($r->host_id)->with('profile')->first();
				if ($ut) {
					$data[] = $ut;
				}
			}
		}
		$data = $data->unique('id');
		return view('user.dashboard.pages.people', compact('data', 'notifications'));
	}

	public function get_classes(Request $request) {
		$data = null;

		if (auth()->user()->hasRole('coach')) {
			$data = ClassPlan::where('host_id', auth()->id())->whereDate('date_time', date('y-m-d', strtotime($request->date)))->get();
			$x = 0;
			foreach ($data as $tf) {
				$data[$x]['date'] = date('Y-m-d', strtotime($tf->date_time . ' ' . auth()->user()->timezone . ' hour'));
				$data[$x]['time'] = date('h:i a', strtotime($tf->date_time . ' ' . auth()->user()->timezone . ' hour'));
				$x++;
			}
		} else {
			$data = auth()->user()->enrollments()->whereDate('date_time', date('y-m-d', strtotime($request->date)))->get();
			$x = 0;
			foreach ($data as $tf) {
				$data[$x]['date'] = date('Y-m-d', strtotime($tf->date_time . ' ' . auth()->user()->timezone . ' hour'));
				$data[$x]['time'] = date('h:i a', strtotime($tf->date_time . ' ' . auth()->user()->timezone . ' hour'));
				$x++;
			}
		}

		return $data;
	}
	
	public function get_active_classes(Request $req)
    {
    	// dd($req->date);
        $date = Carbon::parse($req->date)->format("Y-m-d");
        if(auth()->user()->hasRole('coach'))
        {
        	if(isset($req->view_all))
        	{
        		$request_list = CoachRequest::where('tutor_id',auth()->user()->id)
	                ->where('class_status', 'pending')
	                ->get();
        	}else{
        		$request_list = CoachRequest::where('tutor_id',auth()->user()->id)
	                ->whereDate('active_date', Carbon::parse($req->date)->format("Y-m-d"))
	                ->where('class_status', 'pending')
	                ->get();
        	}

            return view("ajax.tutor.classes", get_defined_vars());  
        }elseif( auth()->user()->hasRole('user') || auth()->user()->hasRole('parent') )
        {
        	if(isset($req->view_all))
        	{
        		$request_list = CoachRequest::where('student_id',auth()->user()->id)
	                ->where('class_status', 'pending')
	                ->get();
        	}else{
    			$request_list = CoachRequest::where('student_id',auth()->user()->id)
	                ->whereDate('active_date', Carbon::parse($req->date)->format("Y-m-d"))
	                ->where('class_status', 'pending')
	                ->get();
        	}
            
            return view("ajax.student.classes", get_defined_vars()); 
        }  
    }

	public function register_plan(Request $request) {
		$plans = ClassPlan::whereId($request->id)->orwhere('parent_id', $request->id)->pluck('id')->toArray();
		foreach ($plans as $pl) {
			auth()->user()->enrollments()->attach($pl, ['is_paid' => $request->is_paid, 'amount' => $request->amount]);
		}
		return response()->json(['message' => 'successfully added!']);
	}

	public function getmsgs(Request $request) {
		$x = '';
		$allmg = Message::where('session_id', $request->session_id)->orderBy('created_at')->get();
		foreach ($allmg as $mg) {
			if ($mg->sender_id == auth()->id()) {
				if ($mg->type == 1) {
					$x .= '<div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve" style="background-color: #69d2b1; padding: 10px;">
                                <h5 class=" mt-1" style="color:white !important; word-wrap: break-word;">' . $mg->message . '</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
				} else {
					$x .= '<div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve" style="background-color: #69d2b1; padding: 10px;">
                                 <a target="_blank" href="' . $mg->message . '"><h5 class=" mt-1" style="color:white !important; display: inline-block; word-wrap: break-word; padding: 5px;">Download File </h5><i class="fa fa-file text-white" style="display: inline-block"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
				}
			} else {
				if ($mg->type == 1) {
					$x .= '<div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light" style="padding: 10px;">
                                <h5 class="mt-1" style=" word-wrap: break-word;">' . $mg->message . '</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class=" ml-4 h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
				} else {
					$x .= '<div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light" style="padding: 10px;">
                                <a target="_blank" href="' . $mg->message . '"><h5 class=" mt-1" style="display: inline-block;">Download File </h5><i class="fa fa-file text-white" style="display: inline-block; word-wrap: break-word; padding: 5px;"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class=" ml-4 h7">' . $mg->created_at->diffForHumans() . '</h6>
                        </div>';
				}
			}

		}
		return $x;
	}

	public function manage_coaching()
    {
        auth()->user()->notifications()->where('verb', 'SESSION')->update(['read'=>1]);
        $notifications  = NotificationStream::where('receiver_id',auth()->id())->where('read',0)->orderBy('created_at','desc')->get();
        $sessions = [];
        $coach = '';
        $running = false;
        $students = null;
        $scheduals = null;
        if(auth()->user()->hasRole('coach')) {
            $session = DB::table('sessions')->where('tutor_id',auth()->id())->where('status',1)->orWhere('user_id',auth()->id())->where('status',1)->first();
        $session = [];
            if($session){
                $running = true;
            }else{
                $running = false;
            }
            $students = auth()->user()->students()->where('is_group',0)->get();
            $scheduals = ClassPlan::where('host_id',auth()->id())->where('status', 0)->orderBy('date_time','asc')->get();

            if(count($scheduals) == 0){
                $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
            }
        } else {
            $session = DB::table('sessions')->where('user_id',auth()->id())->where('status',1)->first();

            if($session){
                $running = true;
            }else{
                $running = false;
            }

            $scheduals = auth()->user()->enrollments()->orderBy('date_time','asc')->get();
            $sessions = auth()->user()->student_session()->get();
        }
        if ($session){
            $coach = auth()->user()->tutors()->where('room_id',$session->room_id)->with('profile')->first();
        }else{
            $coach = auth()->user()->tutors()->where('is_group',0)->distinct()->first();
        }

        $x = 0;
        foreach ($scheduals as $schedual) {
            if ($schedual->time_zone){
                $scheduals[$x]['date_time'] = date('Y-m-d H:i:s',strtotime($schedual->date_time. ' '. $schedual->time_zone));
            }
            $x++;
        }

        return view('user.dashboard.pages.coaching',compact('session','running','sessions','coach','students','scheduals','notifications'));
    }

	public function manage_resources() {

		return view('user.dashboard.pages.resources');
	}

	public function session_history() {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$sessions = null;
		if (auth()->user()->hasRole('coach')) {
			$sessions = DB::table('sessions')->where('tutor_id', auth()->id())->distinct()->get(['session_id', 'created_at']);
		} else {
			$sessions = DB::table('sessions')->where('user_id', auth()->id())->distinct()->get(['session_id', 'created_at']);
		}
		return view('user.dashboard.pages.session-history', compact('sessions', 'notifications'));
	}

	public function session_history_get($id) {
		$notifications = NotificationStream::where('receiver_id', auth()->id())->where('read', 0)->orderBy('created_at', 'desc')->get();
		$usert = null;
		$sessions = null;
		// $sessions = auth()->user()->student_session()->get();
		$messages = Message::where('session_id', $id)->get();
		if (auth()->user()->hasRole('user')) {
			$usert = auth()->user()->student_session()->where('session_id', $id)->with('profile')->first();
			$sessions = DB::table('sessions')->where('user_id', auth()->id())->distinct()->get(['session_id', 'created_at']);
		} else {
			$sessions = DB::table('sessions')->where('tutor_id', auth()->id())->distinct()->get(['session_id', 'created_at']);
			$usert = auth()->user()->tutor_session()->where('session_id', $id)->with('profile')->first();
		}
		return view('user.dashboard.pages.session-history', compact('sessions', 'messages', 'usert', 'notifications'));
	}

	public function dashboard_login() {
		return view('user.dashboard.pages.login');
	}

	public function dashboard_logout() {
		Auth::logout();
		return redirect('/login');
	}

	public function profile()
    {
        $user = User::with('profile')->where('id',auth()->user()->id)->first();

        $results = array();
        $r = explode(' ', $user->name);
        $size = count($r);
        //check first for period, assume salutation if so
        if (mb_strpos($r[0], '.') === false)
        {
            $results['salutation'] = '';
            $results['first'] = $r[0];
        }
        else
        {
            $results['salutation'] = $r[0];
            $results['first'] = $r[1];
        }

        //check last for period, assume suffix if so
        if (mb_strpos($r[$size - 1], '.') === false)
        {
            $results['suffix'] = '';
        }
        else
        {
            $results['suffix'] = $r[$size - 1];
        }

        //combine remains into last
        $start = ($results['salutation']) ? 2 : 1;
        $end = ($results['suffix']) ? $size - 2 : $size - 1;

        $last = '';
        for ($i = $start; $i <= $end; $i++)
        {
            $last .= ' '.$r[$i];
        }
        $results['last'] = trim($last);

        $user->first_name =$results['first'];
        $user->last_name =$results['last'];
        if(auth()->user()->hasRole('coach'))
        {
            $from = [];
            $to = [];

            if (count(auth()->user()->timetable) > 0) {
                foreach (auth()->user()->timetable as $tt) {
                    $from[] = $tt->from;
                    $to[] = $tt->to;
                }
            }
            // dd(auth()->user()->timetable, $from);
            $user=auth()->user();
            return view('tutor.profile.profile', get_defined_vars());
        }else
        {
            return view('user.dashboard.pages.profile', get_defined_vars());
        }
    }

	public function call_dashboard() {
		return view('user.dashboard.pages.call-dashboard');
	}

	public function student_request(Request $request) {
		$search = '';
		$time = '';
		$stuts = UserRequest::where('tutor_id', auth()->id())->with('student');
		if ($request->get('timezone')) {
			$time = $request->get('timezone') > 0 ? '+' . $request->get('timezone') : $request->get('timezone');
			$stuts->whereHas('student', function ($q) use ($time) {
				return $q->where('timezone', $time);
			});

			// $tuts->where('timezone',$time)->withCount('rating');
		}
		if ($request->get('search')) {
			$stuts->whereHas('student', function ($q) use ($request) {
				return $q->where('name', 'like', '%' . $request->get('search') . '%');
			});
			$search = $request->get('search');

		}
		$stuts = $stuts->get();
		// $stuts = UserRequest::where('tutor_id',auth()->id())->with('student')->get();
		// dd($stuts);
		return view('user.dashboard.pages.student-request', compact('stuts', 'time', 'search'));
	}

	public function tutor_list(Request $request, $id = 0) {
		$search = '';
		$time = '';
		$type = '';
		$tuts = User::whereHas('roles', function ($q) {
			return $q->where('name', 'coach');
		})->with('timetable', 'profile', 'rating');
		if ($request->get('timezone')) {
			$time = $request->get('timezone') > 0 ? '+' . $request->get('timezone') : $request->get('timezone');
			$tuts->where('timezone', $time)->withCount('rating');
		}
		if ($request->get('search')) {
			$tuts->where('name', 'like', '%' . $request->get('search') . '%')->withCount('rating');
			$search = $request->get('search');

		}
		if ($request->get('type')) {
			$tuts->where('type', $request->get('type'))->withCount('rating');
			$type = $request->get('type');

		}

		if (!$request->get('timezone') && !$request->get('search') && !$request->get('type')) {
			$tuts->withCount('rating');
		}
		$tuts = $tuts->get();
		foreach ($tuts as $tt) {
			//echo '<pre>';
			//print_r( $tt->rating);
			$tt->rating = 0.0;
		} //die();
		return view('user.dashboard.pages.tutor-list', compact('tuts', 'id', 'type', 'search', 'time'));

	}
	public function group_co() {
		$classcats = ClassCategory::with(['plans' => function ($r) {
			return $r->where('is_group', 1)->where('parent_id', null)->where('is_visible', 1);
		}])->get();

		// dd($classcats);
		return view('user.pages.group-coaching', compact('classcats'));
	}
	public function private_co(Request $request) {
		$plans = Plan::select(['id', 'name', 'duration', 'price', 'description', 'sprice', 'gprice'])->limit(3)->get(); // NOT USING THESE PLANS MONTHLY PLANS

		$packages = Package::all(); // USING THESE PLANS HOURLY BASED
		$from = $request->get('redirect');
		$type = $request->get('type');
		$data_id = $request->get('data_id');

		return view('user.pages.private-coaching', get_defined_vars());
	}

	public function get_noti() {
		$noty = NotificationStream::with('sender')->where('read', 0)->where('receiver_id', auth()->id())->get();
		if ($noty->count() > 0) {
			return $noty;
		} else {
			return response()->json(['error'], 404);
		}
	}

	public function delete_post($id) {
		$post = Debate::whereId($id)->first();
		$post->delete();
		return redirect()->back();
	}
	public function delete_comment($id) {
		$comm = Comment::whereId($id)->first();
		$comm->delete();
		return redirect()->back();
	}
	public function check_refcod($code, Request $request) {
		$price = -1;
		$code = DiscountCodes::where('code', $code)->whereDate('valid_through', '>=', date('Y-m-d'))->first();
		if ($code) {
			if ($code->data_id && $code->data_id == $request->id) {
				if ($code->number_of_use > 0) {
					if ($code->code_type == 1) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					} elseif ($code->code_type == 2) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					} elseif ($code->code_type == 3) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					}
				} else {
					return response()->json(['message' => 'Code Already Used'], 404);
				}
			} elseif ($code->data_id == null) {
				if ($code->number_of_use > 0) {
					if ($code->code_type == 1) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					} elseif ($code->code_type == 2) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					} elseif ($code->code_type == 3) {
						if ($code->discount_type == 1) {
							$price = ($request->price - ($request->price * ($code->discount / 100)));
						} else {
							$price = ($request->price - $code->discount);
						}
					}
				} else {
					return response()->json(['message' => 'Code Already Used'], 404);
				}
			} else {
				return response()->json(['message' => 'Something went Wrong'], 404);
			}

		} else {
			return response()->json(['message' => 'Code is Invalid or Expired'], 404);
		}

		if ($price >= 0) {
			return response()->json(['value' => $price], 200);
		} else {
			return response()->json(['message' => 'Something went Wrong'], 404);
		}
	}

	public function check_discount_code($coupon_code, Request $request) {
		// Using Stripe Coupons

		$price = $request->price;
		$stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
		$code =  $stripe->coupons->retrieve($coupon_code, []);

		$user_coupon = auth()->user()->coupon()->where('coupon_code', $coupon_code)->get();
		$count = count($user_coupon);

		if ($code) {
			
			if ($code->metadata->code_type !== null && $code->metadata->code_type == $request->code_type) {

				if ($code->duration == "forever" && $code->duration_in_months  == null){

					// Time limit and also use of code limit
					if($code->max_redemptions !== null && $code->redeem_by !== null){

						if($code->redeem_by >= time()){

							// If use has already used this coupon
							if($count !== 0){

								$coupon_used = $user_coupon[0]->max_redemptions;

								if($coupon_used != null && $coupon_used < $code->max_redemptions){
									if ($code->percent_off !== null) {
										$price = ($request->price - ($request->price * ($code->percent_off / 100)));
									} else {
										$price = $price * 100;
										$price = ($price - $code->amount_off);
										$price = $price/100;
									}
									$coupon_used++;

									$user_coupon[0]->max_redemptions = $coupon_used;
									$user_coupon[0]->save();

									return response()->json(['price' => $price, 'duration' => $code->duration], 200);
								}
								else{
									return response()->json(['message' => 'Code is Invalid or Expired'], 404);
								}
							}
							// End if use has already used this coupon


							if ($code->percent_off !== null) {
								$price = ($request->price - ($request->price * ($code->percent_off / 100)));
							} else {
								$price = $price * 100;
								$price = ($price - $code->amount_off);
								$price = $price/100;
							}

							UserCoupon::create([
						        'user_id' => auth()->user()->id,
						        'coupon_code' => $coupon_code,
						        'duration' => $code->duration,
						        'max_redemptions' => 1,
						    ]);

							return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							
						}

						return response()->json(['message' => 'Code is Invalid or Expired'], 404);
					}
					// No time limit but use of code limit
					if($code->max_redemptions !== null && $code->redeem_by == null){

						// If use has already used this coupon
						if($count !== 0){

							$coupon_used = $user_coupon[0]->max_redemptions;

							if($coupon_used != null && $coupon_used < $code->max_redemptions){
								if ($code->percent_off !== null) {
									$price = ($request->price - ($request->price * ($code->percent_off / 100)));
								} else {
									$price = $price * 100;
									$price = ($price - $code->amount_off);
									$price = $price/100;
								}
								$coupon_used++;

								$user_coupon[0]->max_redemptions = $coupon_used;
								$user_coupon[0]->save();

								return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							}
							else{
								return response()->json(['message' => 'Code is Invalid or Expired'], 404);
							}
						}
						// End if use has already used this coupon


						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						UserCoupon::create([
					        'user_id' => auth()->user()->id,
					        'coupon_code' => $coupon_code,
					        'duration' => $code->duration,
					        'max_redemptions' => 1,
					    ]);

						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End No time limit but use of code limit


					// Time limit but no use of code limit
					if($code->redeem_by !== null && $code->redeem_by >= time() && $code->max_redemptions == null){

						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						if($count === 0){
							UserCoupon::create([
					            'user_id' => auth()->user()->id,
					            'coupon_code' => $coupon_code,
					            'duration' => $code->duration,
					        ]);
						}
						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End Time limit but no use of code limit


					// No time and use of code limit
					if ($code->percent_off !== null) {
						$price = ($request->price - ($request->price * ($code->percent_off / 100)));
					} else {
						$price = $price * 100;
						$price = ($price - $code->amount_off);
						$price = $price/100;
					}
					if($count === 0){
						UserCoupon::create([
					        'user_id' => auth()->user()->id,
					        'coupon_code' => $coupon_code,
					        'duration' => $code->duration,
					    ]);
					}
					return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					// End No time and use of code limit

				}


				if($code->duration == "once" && $code->duration_in_months  == null){

					if($count !== 0 ){
						return response()->json(['message' => 'Code is Invalid or Expired'], 404);
					}
					
					// Time limit and also use of code limit
					if($code->max_redemptions !== null && $code->redeem_by !== null){

						if($code->redeem_by >= time()){

							// If use has already used this coupon
							if($count !== 0){

								$coupon_used = $user_coupon[0]->max_redemptions;

								if($coupon_used != null && $coupon_used < $code->max_redemptions){
									if ($code->percent_off !== null) {
										$price = ($request->price - ($request->price * ($code->percent_off / 100)));
									} else {
										$price = $price * 100;
										$price = ($price - $code->amount_off);
										$price = $price/100;
									}
									$coupon_used++;

									$user_coupon[0]->max_redemptions = $coupon_used;
									$user_coupon[0]->save();

									return response()->json(['price' => $price, 'duration' => $code->duration], 200);
								}
								else{
									return response()->json(['message' => 'Code is Invalid or Expired'], 404);
								}
							}
							// End if use has already used this coupon


							if ($code->percent_off !== null) {
								$price = ($request->price - ($request->price * ($code->percent_off / 100)));
							} else {
								$price = $price * 100;
								$price = ($price - $code->amount_off);
								$price = $price/100;
							}

							UserCoupon::create([
						        'user_id' => auth()->user()->id,
						        'coupon_code' => $coupon_code,
						        'duration' => $code->duration,
						        'max_redemptions' => 1,
						    ]);

							return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							
						}

						return response()->json(['message' => 'Code is Invalid or Expired'], 404);
					}
					// No time limit but use of code limit
					if($code->max_redemptions !== null && $code->redeem_by == null){

						// If use has already used this coupon
						if($count !== 0){

							$coupon_used = $user_coupon[0]->max_redemptions;

							if($coupon_used != null && $coupon_used < $code->max_redemptions){
								if ($code->percent_off !== null) {
									$price = ($request->price - ($request->price * ($code->percent_off / 100)));
								} else {
									$price = $price * 100;
									$price = ($price - $code->amount_off);
									$price = $price/100;
								}
								$coupon_used++;

								$user_coupon[0]->max_redemptions = $coupon_used;
								$user_coupon[0]->save();

								return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							}
							else{
								return response()->json(['message' => 'Code is Invalid or Expired'], 404);
							}
						}
						// End if use has already used this coupon


						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						UserCoupon::create([
					        'user_id' => auth()->user()->id,
					        'coupon_code' => $coupon_code,
					        'duration' => $code->duration,
					        'max_redemptions' => 1,
					    ]);

						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End No time limit but use of code limit


					// Time limit but no use of code limit
					if($code->redeem_by !== null && $code->redeem_by >= time() && $code->max_redemptions == null){

						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						if($count === 0){
							UserCoupon::create([
					            'user_id' => auth()->user()->id,
					            'coupon_code' => $coupon_code,
					            'duration' => $code->duration,
					        ]);
						}
						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End Time limit but no use of code limit


					// if user already used this code
					if($count == 0){

						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}
						if($count === 0){
							UserCoupon::create([
						        'user_id' => auth()->user()->id,
						        'coupon_code' => $coupon_code,
						        'duration' => $code->duration,
						    ]);
						}
						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End // if user already used this code

				}
				

				if($code->duration == "repeating" && $code->duration_in_months  !== null){
					// Time limit and also use of code limit
					if($code->max_redemptions !== null && $code->redeem_by !== null){

						if($code->redeem_by >= time()){

							// If use has already used this coupon
							if($count !== 0){

								$coupon_used = $user_coupon[0]->max_redemptions;

								if($coupon_used != null && $coupon_used < $code->max_redemptions){
									if ($code->percent_off !== null) {
										$price = ($request->price - ($request->price * ($code->percent_off / 100)));
									} else {
										$price = $price * 100;
										$price = ($price - $code->amount_off);
										$price = $price/100;
									}
									$coupon_used++;

									$user_coupon[0]->max_redemptions = $coupon_used;
									$user_coupon[0]->save();

									return response()->json(['price' => $price, 'duration' => $code->duration], 200);
								}
								else{
									return response()->json(['message' => 'Code is Invalid or Expired'], 404);
								}
							}
							// End if use has already used this coupon


							if ($code->percent_off !== null) {
								$price = ($request->price - ($request->price * ($code->percent_off / 100)));
							} else {
								$price = $price * 100;
								$price = ($price - $code->amount_off);
								$price = $price/100;
							}

							UserCoupon::create([
						        'user_id' => auth()->user()->id,
						        'coupon_code' => $coupon_code,
						        'duration' => $code->duration,
						        'max_redemptions' => 1,
						    ]);

							return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							
						}

						return response()->json(['message' => 'Code is Invalid or Expired'], 404);
					}
					// No time limit but use of code limit
					if($code->max_redemptions !== null && $code->redeem_by == null){

						// If use has already used this coupon
						if($count !== 0){

							$coupon_used = $user_coupon[0]->max_redemptions;

							if($coupon_used != null && $coupon_used < $code->max_redemptions){
								if ($code->percent_off !== null) {
									$price = ($request->price - ($request->price * ($code->percent_off / 100)));
								} else {
									$price = $price * 100;
									$price = ($price - $code->amount_off);
									$price = $price/100;
								}
								$coupon_used++;

								$user_coupon[0]->max_redemptions = $coupon_used;
								$user_coupon[0]->save();

								return response()->json(['price' => $price, 'duration' => $code->duration], 200);
							}
							else{
								return response()->json(['message' => 'Code is Invalid or Expired'], 404);
							}
						}
						// End if use has already used this coupon


						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						UserCoupon::create([
					        'user_id' => auth()->user()->id,
					        'coupon_code' => $coupon_code,
					        'duration' => $code->duration,
					        'max_redemptions' => 1,
					    ]);

						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End No time limit but use of code limit


					// Time limit but no use of code limit
					if($code->redeem_by !== null && $code->redeem_by >= time() && $code->max_redemptions == null){

						if ($code->percent_off !== null) {
							$price = ($request->price - ($request->price * ($code->percent_off / 100)));
						} else {
							$price = $price * 100;
							$price = ($price - $code->amount_off);
							$price = $price/100;
						}

						if($count === 0){
							UserCoupon::create([
					            'user_id' => auth()->user()->id,
					            'coupon_code' => $coupon_code,
					            'duration' => $code->duration,
					        ]);
						}
						return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					}
					// End Time limit but no use of code limit


					// No time and use of code limit
					if ($code->percent_off !== null) {
						$price = ($request->price - ($request->price * ($code->percent_off / 100)));
					} else {
						$price = $price * 100;
						$price = ($price - $code->amount_off);
						$price = $price/100;
					}
					if($count === 0){
						UserCoupon::create([
					        'user_id' => auth()->user()->id,
					        'coupon_code' => $coupon_code,
					        'duration' => $code->duration,
					    ]);
					}
					return response()->json(['price' => $price, 'duration' => $code->duration], 200);
					// End No time and use of code limit
				}
			}

			else{
				return response()->json(['message' => 'Code is Invalid or Expired'], 404);
			}

		} else {
			return response()->json(['message' => 'Code is Invalid or Expired'], 404);
		}
	}

	public function news() {

		// Note: Features = 1; Unfeatured = 0; Big News = 2
		
		// Fetch latest News
		$bignews = DB::table('news')
			->orderBy('id', 'desc')
			->limit(1)
			->get()->toArray();

		// Fetch Features News (TOP STORES SECTION)
		$fsidenews = News::with('user')->where('featured', 1)->orderBy('views', 'desc')->limit(4)->get();
		
		// Fetch Unfeatured and Big News 
		$fbottomnews = News::with('user')->where('featured', '!=', 1)->orderBy('created_at', 'desc')->paginate(4);
		
		// Fetch latest 3 News
		$fbottomrightnews = News::with('user')->orderBy('created_at', 'desc')->limit(3)->get();

		return view('user.pages.news-details', compact('bignews', 'fsidenews', 'fbottomnews', 'fbottomrightnews'));
	}
	public function news_details($title) {
		$title = str_replace('_', ' ', $title);
		$bignews = News::with('user')->where('title', $title)->first();
		if(is_null($bignews))
		{
		    abort(404);
		}
		$tags = explode(",", $bignews->tags);
		$fsidenewsarray = News::with('user')->where('title', '!=', $title)->orderBy('created_at', 'desc')->limit(4)->get();
		return view('user.pages.news-main', compact('bignews', 'tags', 'fsidenewsarray'));
	}
	public function update_shares(Request $request) {
		$news = News::whereId($request->id)->first();
		$news->update(['shares' => (int) $news->shares + 1]);
		return response()->json(['message' => 'shares updated!'], 200);
	}

	public function ourTeam() {
		$coaches_data = User::wherenotnull('bio')->whereHas('roles', function ($r) {
			return $r->where('name', 'coach')->orWhere('name', 'admin');
		})->with('profile')->get();

		$coaches = $coaches_data->chunk(3);
		return view('user.pages.our_team', compact('coaches'));
	}

	public function coachDetail($id) {
		$coaches_data = User::whereHas('roles', function ($r) {
			return $r->where('name', 'coach')->orWhere('name', 'admin');
		})->with('profile')->first();

		$coach_detail = User::where('id', $id)->with('profile')->first();

		return view('user.pages.coach_detail', compact('coach_detail'));
	}

	public function tutor_list_public() {
		$coaches_data = User::whereHas('roles', function ($r) {
			return $r->where('name', 'coach');
		})->with('profile')->get();

		$coaches = $coaches_data->chunk(3);
		return view('user.pages.our_team', compact('coaches'));
	}
	
	// here are new functions

    public function loadTutorDays($id = null)
    {
        $tutor = User::find($id);
        $time_table = [];
        return view('ajax.student.load_tutor_days', get_defined_vars());
    }

    public function timetableSave(Request $req)
    {
        $tutor = auth()->user();

        if(count($tutor->timetable) > 0)
            $tutor->timetable()->delete();

        $days = [
            'Monday', 'Tuesday', 'Wednesday',
            'Thursday', 'Friday', 'Saturday', 'Sunday'
        ];

        for($d = 0; $d < 7; $d++)
        {
            if(isset($req->to[$d]) && isset($req->from[$d]))
            {
                $tt = new TutorTimeTable();
                $tt->user_id = $tutor->id;
                $tt->day_id = $d+1;
                $tt->from = Carbon::parse($req->from[$d])->toTimeString();
                $tt->to =Carbon::parse($req->to[$d])->toTimeString();
                $tt->save();
            }
        }

        return redirect()->back()->with('message', 'Timetable updated Successfully');
    }

    public function subscribedRequest($data)
    {
        // dd($data);
        $user = auth()->user();
        $userPlan = UserPlan::where('user_id', $user->id)->where('status', 'active')->first();
        $remaining = $userPlan->remaining_hour;
        if ($data->hours > $remaining && $data->payment_released) {
            session(['request_tutor' => (object)$data]);
            return false;
        } else {
            $amount = $userPlan->per_hour_amount;
            $tutor_request = new CoachRequest();
            $tutor_request->message = $data->message;
            $tutor_request->date = $data->date;
            $tutor_request->active_date = $data->date;
            $tutor_request->slot = $data->slot;
            $tutor_request->time_in_min = $data->time_in_min;
            $tutor_request->student_id = auth()->user()->id;
            $tutor_request->tutor_id = $data->tutor_id;
            $tutor_request->payment_status = 1;
            $tutor_request->amount = $amount ?? 0;
            $tutor_request->amount_paid = $amount ?? 0;
            $tutor_request->amount_reserved = 0;
            $tutor_request->is_subscribed_payment = 1;
            $tutor_request->save();

            $subscibe_plan = UserPlan::where('user_id',auth()->user()->id)
                ->where('status', 'active')
                ->first();

            $subscibe_plan->remaining_hour = $subscibe_plan->remaining_hour - $data->hours;
            $subscibe_plan->save();

            session()->forget('request_tutor');
            return true;
        }
    }

    public function packagesList()
    {
        $list = Package::all();
        return view("user.dashboard.pages.packages", get_defined_vars());
    }

    public function buyPackage($id = null)
    {
        return redirect()->route("student.payment.form", ['plan'=>base64_encode($id)])->with("success", "Please Enter Card Details To Buy Package!");
    }

    public function paymentForm(Request $req)
    {
        // $data = session("request_tutor");
        // $userPlan = auth()->user()->package;
        $plan = Package::find(base64_decode($req->plan));
        return view("user.dashboard.pages.payment_form", get_defined_vars());
    }

    public function paymentSave(Request $req)
    {
        // dd($req->all());
        $plan = Package::find(base64_decode($req->plan_id));
        $amount = $req->price;
        $plan_coupon_status = "false";

        if(isset($req->duration) && $req->duration == 'once'){
        	// user can apply coupan code only once and first time only for 3 and 4 plans
	        if($plan->id == 3 || $plan->id == 4){
	        	$plan_coupon_status = "true"; // if plan 3 or 4 activated
	        }
        }
        
		$amount = (float)$amount;
		$amount = $amount * 100;

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $charge = \Stripe\Charge::create([
                "amount" => $amount * 100,
                "currency" => "cad",
                "source" => $req->stripeToken,
                "description" => "Payment transaction to subscribe package.",
                "capture" => true,
            ]);
            $subscribe_plan = UserPlan::create([
                'user_id' => auth()->user()->id,
                'plan_id' => $plan->id,
                'total_hour' => $plan->hours,
                'remaining_hour' => $plan->hours,
                'amount' => $plan->total_amount,
            ]);

            $user = User::find(auth()->user()->id);
			$user->plan_coupon_status = $plan_coupon_status;
			$user->save();

            Transaction::create([
                'stripe_id' => $charge->id,
                'student_id' => auth()->user()->id,
                'amount' => $amount,
            ]);

        } catch (\Stripe\Error\Card $e) {
            dd($e->getMessage());
        } catch (\Stripe\Error\InvalidRequest $e) {
            dd($e->getMessage());
        }

        return redirect()->route('dashboard-home')->with('success', 'Your payment have been successfully captured!');
    }

}