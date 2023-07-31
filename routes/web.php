<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// for guest/everyone
Route::get('/', function(){
    return redirect('/home');
})->name('welcome');

// Zoom Session Routes
Route::get('start-session/{id?}', 'ZoomController@startSession')->name('start.session');
Route::post('zoom-callback', 'ZoomController@zoomCallback')->name('zoom.callback');
Route::post('zoom-joined', 'ZoomController@zoomJoined')->name('zoom.joined');
Route::get('/zoom-oauth-redirect', 'ZoomController@OAuthRedirect')->name('zoom.oauth.redirect');
Route::get('/zoom-oauth-callback', 'ZoomController@OAuthCallback')->name('zoom.oauth.callback');


// Stripe Connect Routes
Route::get('connect-account/{id}', 'StripeConnectController@connectAccount')->name('connect');
Route::get('stripe-account', 'StripeConnectController@goToStripe')->name('stripe.account');
Route::get('boarded/{enc}', 'StripeConnectController@boarded')->name('boarded');
Route::get('transfer/{id?}', 'StripeConnectController@transfer')->name('transfer');

// Old Start Meeting
Route::get('/startMeeting', 'BigBlueController@startMeeting')->name('startMeeting');
Route::get('/joinMeeting', 'BigBlueController@joinMeeting')->name('joinMeeting');
Route::get('/testStripe', 'BigBlueController@testStripe')->name('testStripe');

Route::get('/terms_conditions', function(){
    return view('user.pages.terms');
});
Route::get('/privacy_policy', function(){
    return view('user.pages.privacy');
});

Route::get('/shop', function(){
    return view('user.pages.coming_soon');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'UserActionController@subscribe')->name('guest.subscribe');

Route::get('/forum/{keyword?}', 'HomeController@forum');
Route::middleware('check.role')->post('/forum', 'UserActionController@post_debate')->name('post.debate');
Route::get('/forum-detail/{slug}', 'HomeController@forum_detail')->name('forum.detail');

//SP New Start
Route::get('/competition/{slug?}{id?}{keyword?}', 'HomeController@competition')->name('competition');
Route::get('/competitiontrend/{trend?}', 'HomeController@competitiontrend')->name('competitiontrend');
Route::post('/competitionregister', 'UserActionController@competitionregister')->name('guest.competition.register');
Route::middleware('check.role')->post('/coursequestionlike', 'UserActionController@coursequestion_like');
Route::middleware('check.role')->post('/coursequestiondislike', 'UserActionController@coursequestion_dislike');
Route::middleware('check.role')->post('/coursequestion-reply', 'UserActionController@coursequestion_reply')->name('coursequestion-reply');
//SP New End

Route::middleware('check.role')->post('/like', 'UserActionController@like');
Route::middleware('check.role')->post('/dislike', 'UserActionController@dislike');
Route::middleware('check.role')->post('/comment', 'UserActionController@comment')->name('comment');
Route::middleware('check.role')->post('/commentlike', 'UserActionController@comment_like');
Route::middleware('check.role')->post('/comment-reply', 'UserActionController@comment_reply');

Route::get('/resources', 'HomeController@resources'); //

Route::get('/schools', 'HomeController@coaching')->name('get.plans');
Route::get('/group-coaching', 'HomeController@group_co')->name('get.plans');
Route::get('/private-coaching', 'HomeController@private_co')->name('get.plans');
Route::get('/tutor-list-public', 'HomeController@tutor_list_public')->name('tutor.list.public');
Route::post('/coaching', 'UserActionController@coaching_bulk')->name('guest.coaching_bulk');

Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'UserActionController@login')->name('guest.login');

Route::get('/register', 'HomeController@register');
Route::post('/register', 'UserActionController@register')->name('guest.register');

Route::get('/partner', 'HomeController@partner');
Route::get('/about-us', 'HomeController@about_us');

Route::get('/faqs/{keyword?}', 'HomeController@faqs');
Route::post('/faqs', 'UserActionController@contact_us')->name('guest.contact_us');

Route::get('/join-team', 'HomeController@join_team');
Route::get('/job-detail/{slug}', 'HomeController@job_detail')->name('job.detail');
Route::get('/job-apply/{slug}', 'HomeController@job_apply')->name('job.apply');
Route::post('/job-apply', 'UserActionController@applicant')->name('applicant.register');

Route::get('/forget-password', 'HomeController@forget_password');
Route::get('/course/{slug?}{cat_id?}{keyword?}', 'HomeController@course')->name('course');
Route::get('/news/','HomeController@news')->name('news');
Route::get('/news/{id}','HomeController@news_details')->name('news.details');

Route::post('/update_shares','HomeController@update_shares')->name('share.news');
//SP code 
Route::post('/demorequest', 'UserActionController@demorequest')->name('guest.demo.request');

// User Dashboard
Route::middleware('gest.auth')->group(function () {
    Route::get('/dashboard-home', 'HomeController@dashboard')->name('dashboard-home');
    Route::get('/dashboard-post', 'HomeController@post')->name('dashboard-post');
    Route::get('/dashboard-coaching', 'HomeController@manage_coaching')->name('dashboard-coaching');
    Route::get('/dashboard-resources', 'HomeController@manage_resources');
    Route::get('/dashboard-session', 'HomeController@session_history');
    Route::get('/dashboard-session/{id}', 'HomeController@session_history_get');
    Route::get('/dashboard-login', 'HomeController@dashboard_login');
    Route::get('/dashboard-profile', 'HomeController@profile');
    Route::post('/create/group','VideoRoomsController@create_group')->name('create.group');
    Route::get('/dashboard-call/{id}', 'VideoRoomsController@joinRoom')->name('call.caller');
    Route::get('/dashboard-call/group/{id}', 'VideoRoomsController@joinGroupRoom')->name('call.group.caller');
    Route::get('/student-request', 'HomeController@student_request');
    Route::get('/findacoach/{id}', 'HomeController@tutor_list');
    Route::get('/findacoach/', 'HomeController@tutor_list');
    Route::resource('user_requests','UserRequestController');
    Route::get('send/tutor/request', 'UserRequestController@send_request')->name('send.tutor.request');
    Route::get('request/accept/{id}', 'UserRequestController@accept')->name('accept.request');
    Route::get('request/reject/{id}', 'UserRequestController@reject')->name('reject.request');
    Route::post('/send/message','MessageController@send')->name('send.message');
    Route::post('/get/message','MessageController@getmsgs')->name('get.message');
    Route::post('/update/plan','PlanController@userplan')->name('update.plan');
    Route::post('/buy/course/','HomeController@buy_course')->name('buy.course');
    Route::get('/dashboard-my/courses/','HomeController@my_courses')->name('my.course');
    Route::get('/dashboard-my/courses/{slug}','HomeController@course_detail')->name('my.course.details');
    Route::post('/dashboard-profile','UserController@update_profile')->name('update.profile');
    Route::get('/dashboard-logout','HomeController@dashboard_logout')->name('user.logout');
    Route::post('/schedual-meeting','ClassPlanController@schedual_meeting')->name('create.schedual');
    Route::get('/start-meeting/plan/{id}','VideoRoomsController@start_meeting')->name('start.meeting');
    Route::get('/end-session/{id}','VideoRoomsController@end_session')->name('end.session');
    Route::get('/chat/{id}','HomeController@chat')->name('chat');
    Route::get('/chat','HomeController@mypeople')->name('chat.people');
    Route::get('/register/user/plan','HomeController@register_plan')->name('register.user.plan');
    Route::get('/search/resources','HomeController@search_my_resc')->name('search.resources');
    Route::get('/search-posts','HomeController@search_post')->name('search.posts');
    Route::post('/get-classes','HomeController@get_classes')->name('get.classes');
    Route::post('/get-active-classes','HomeController@get_active_classes')->name('get.active.classes');
    Route::get('/get-all-active-classes','HomeController@get_active_classes')->name('get.all.active.classes');
    Route::get('/get-notify','HomeController@get_noti')->name('get.noti');
    Route::get('/get-user-email/{email}','HomeController@get_user_email')->name('get.user.email');
    Route::get('/delete/post/{id}','HomeController@delete_post')->name('delete.post');
    Route::get('/delete/comment/{id}','HomeController@delete_comment')->name('delete.comment');
    Route::post('/discount/{code}','HomeController@check_refcod')->name('check.code');
    Route::post('/check_discount_code/{code}','HomeController@check_discount_code')->name('check.code_course');

    Route::post('/stripe/checkout','PlanController@StripeCheckout')->name('stripe.checkout');
    Route::get('/coach-availability', 'AvailabilityController@showAvailability')->name('coach-availability');

    // New routes 
    Route::prefix('refund_request')->name('refund_request.')->namespace('Admin')->group(function () {
        Route::get('list','RefundRequestController@requestList')->name('index');
    });
    Route::prefix('request_coach')->name('request_coach.')->namespace('Admin')->group(function () {
        Route::get('list','CoachRequestController@index')->name('index');
    });

    Route::prefix('demo_request')->name('demo_request.')->group(function () {
        Route::get('list','DemoRequestedPeoplesController@index')->name('index');
    });

    Route::prefix('session')->name('session.')->namespace('Admin')->group(function () {
        Route::get('list','SessionController@index')->name('index');
        Route::get('load-refund-form','SessionController@loadRefundForm')->name('load.refund.form');
        Route::post('refund-payment','SessionController@refundPayment')->name('refund.payment');
        Route::get('delete/{id?}','SessionController@delete')->name('delete');
    });

    Route::prefix('coach')->name('coach.')->namespace('Admin')->group(function () {
        Route::get('list','CoachController@index')->name('index');
        Route::get('load-pay-coach-form','CoachController@payTutorForm')->name('load.pay.coach.form');
        Route::post('pay','CoachController@payCoach')->name('pay');
        Route::get('load-hour-rate-form','CoachController@hourlyForm')->name('load.set.hourly_rate.form');
        Route::post('save-hourly-rate','CoachController@saveHourlyRate')->name('hourly_rate.save');
    });

    // General Ajax Routes
    

    Route::get('/load-tutor-intervals/{id?}/{day?}','Student\CoachRequestController@loadTutorIntervals')->name('student.load.tutor.intervals');

    Route::get('/load-tutor-days/{id?}','HomeController@loadTutorDays')->name('student.load.tutor.days');
    Route::post('/tutor-timetable-save', 'HomeController@timetableSave')->name('tutor.profile.timetable.save');
    Route::post('/request-tutor','Student\CoachRequestController@requestTutor')->name('student.request.tutor');
    Route::get('packages-list','HomeController@packagesList')->name('student.packages.list');
    Route::get('buy-pakcage/{id?}','HomeController@buyPackage')->name('student.buy.package');
    Route::get('payment-form/','HomeController@paymentForm')->name('student.payment.form');
    Route::post('save-payment/','HomeController@paymentSave')->name('student.payment.save');

    Route::prefix('coach/student')->name('tutor.student.')->namespace('Tutor')->group(function () {
        Route::get('requests','StudentController@studentRequests')->name('requests');
        Route::get('request/approve/{id}','StudentController@requestApprove')->name('request.approve');
        Route::get('request/cancel/{id}','StudentController@requestCancel')->name('request.cancel');
        Route::get('/load-tutor-intervals/{id?}/{day?}', 'StudentController@loadTutorIntervals')->name('load.intervals');
        Route::prefix('schedule')->group(function(){
            Route::get('students','StudentController@students')->name('students');
            Route::post('update','StudentController@saveSchedule')->name('schedule.save');
        });
    });

    Route::prefix('student/coach')->name('student.tutor.')->namespace('Student')->group(function () {
        Route::get('requests/list','TutorController@requestList')->name('request.list');
        Route::get('requests/cancel/{id}','TutorController@requestCancel')->name('request.cancel');
        Route::get('packages/{id?}', 'TutorController@packages')->name('packages');
        Route::post('buy-package', 'TutorController@buyPackage')->name('buy.package');
        Route::post('decline-request/{id?}','TutorController@declineRequest')->name('decline_request');
    });

    Route::prefix('student/session')->name('student.session.')->namespace('Student')->group(function () {
        Route::get('list','MeetingSessionController@list')->name('list');
        Route::get('review/{id?}','MeetingSessionController@addReview')->name('review.add');
        Route::post('save-review','MeetingSessionController@saveReview')->name('review.save');
        Route::get('request-refund/{id?}','MeetingSessionController@requestRefund')->name('request.refund');
    });

    Route::prefix('parent/student')->name('parent.student.')->namespace('Parent')->group(function () {
        Route::get('list', 'StudentController@list')->name('list');
        Route::get('add', 'StudentController@add')->name('add');
        Route::get('edit/{id?}', 'StudentController@edit')->name('edit');
        Route::post('save', 'StudentController@save')->name('save');
        Route::get('delete/{id?}', 'StudentController@delete')->name('delete');
    });

    Route::prefix('tutor/session')->name('tutor.session.')->namespace('Tutor')->group(function () {
        Route::get('list','MeetingSessionController@list')->name('list');
        Route::get('review/{id?}','MeetingSessionController@addReview')->name('review.add');
        Route::post('save-review','MeetingSessionController@saveReview')->name('review.save');
    });

    Route::prefix('tutor/payout')->name('tutor.payout.')->namespace('Tutor')->group(function () {
        Route::get('list','PayoutController@list')->name('list');
    });

    Route::prefix('tutor/chat')->name('tutor.')->namespace('Tutor')->group(function () {
        Route::get('','ChatController@chat')->name('chat');
        Route::get('student-contacts', 'ChatController@studentContacts')->name('contacts');
        Route::get('/get-chat', 'ChatController@getChat')->name('get.chat');
        Route::post('/save-message', 'ChatController@saveMessage')->name('save.messsage');
    });

    Route::prefix('student/chat')->name('student.')->namespace('Student')->group(function () {
        Route::get('','ChatController@chat')->name('chat');
        Route::get('tutor-contacts', 'ChatController@tutorContacts')->name('contacts');
        Route::get('/get-chat', 'ChatController@getChat')->name('get.chat');
        Route::post('/save-message', 'ChatController@saveMessage')->name('save.messsage');
    });

});


// Authentication Routes For Admin...

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => 'password.update',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin','auth']],function () {
	Route::get('home','AdminController@index')->name('admin.home');
    Route::get('acount-settings/{id}/edit','AdminController@edit')->name('admin.account.edit');
    Route::put('acount-settings/{id}','AdminController@update')->name('admin.account.update');
    Route::resource('users','UserController');
    Route::resource('testimonials','TestimonialController');
    Route::resource('social_links','SocialLinkController');
    Route::resource('faqs','FaqController');
    Route::resource('categories','CategoryController');
    Route::resource('partners','PartnerController');
    Route::resource('jobs','JobController');
    Route::resource('courses','CourseController');
    Route::resource('course_contents','CourseContentController');
    Route::resource('content_types','ContentTypeController');
    Route::resource('comments','CommentController');
    Route::resource('applicants','ApplicantController');
    Route::resource('debates','DebateController');
    Route::resource('plans','PlanController');
    // Route::resource('plans','PlanController');
    Route::resource('subscribes','SubscribeController');
    Route::resource('coaching_bulks','CoachingBulkController');
    Route::resource('lessons','LessonController');
    Route::resource('class_plans','ClassPlanController');
    Route::resource('news','NewsController');
    Route::resource('coupons','DiscountCodesController');
    Route::post('dependent/courses','CourseContentController@fetch')->name('dynamicdependent.fetch');
    Route::get('enrollment/','CourseController@show_enroll')->name('show_enrolls');

    Route::post('enrollment/','CourseController@creat_enroll')->name('creat_enroll');

    Route::get('coaching_hours/show','CoachingBulkController@showCoachingHours')->name('coaching_hours.show');
    Route::post('coaching_hours/get','CoachingBulkController@getCoachingHours')->name('coaching_hours.get');

    //SP competition
    Route::resource('competitions','CompetitionController');
    Route::resource('competitionusers','CompetitionUsersController');
    Route::resource('coursequestions','CourseQuestionsController');
    Route::resource('coursequestionanswer','CourseQuestionAnswersController');

});

Route::get('/vid', "TestController@index");
Route::prefix('room')->middleware('auth')->group(function() {
    Route::get('join/{roomName}', 'TestController@joinRoom');
    Route::post('create', 'TestController@createRoom');
});

Route::middleware('auth')->group(function () {
    Route::post('user/request', 'UserRequestController@sendrequest');
});

// Google Login Routes
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');