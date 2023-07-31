<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

class NewsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		if ($request->ajax()) {

			$course = News::with('user')->get();

			return Datatables::of($course)
				->addColumn('action', function ($course) {
					return view('admin.actions.actions_news', compact('course'))->render();
				})
				->addColumn('tags', function ($course) {
					return $course->tags;
				})
				->addColumn('small_title', function ($course) {
					return $course->small_title;
				})
				->addColumn('small_discription', function ($course) {
					return $course->small_discription;
				})
				->editColumn('id', 'ID: {{$id}}')
				->make(true);
		}

		$news = News::all();

		$user = User::whereHas('roles', function ($r) {

			return $r->where('name', 'coach')
				->orWhere('name', 'admin');

		})->pluck('name', "id")->toArray();

		return view('admin.news.index', compact('news', 'user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if ($request['photo']) {
			$originalImage = $request->file('photo');
			$request['picture'] = $request->file('photo')->store('public/storage');
			$request['picture'] = Storage::url($request['picture']);
			$request['picture'] = asset($request['picture']);
			// $filename = $request->file('photo')->hashName();
			$request['image'] = $request['picture'];
		} else {
			$request['image'] = asset('images/img 1.png');
		}

		$news = new News;
		$news->create($request->all());

		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function show(News $news) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$new = News::with('user')->whereId($id)->first();
		$news = News::all();
		$user = User::whereHas('roles', function ($r) {
			return $r->where('name', 'coach');
		})->pluck('name', 'id')->toArray();
		return view('admin.news.index', compact('news', 'user', 'new'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		if ($request['photo']) {
			$originalImage = $request->file('photo');
			$request['picture'] = $request->file('photo')->store('public/storage');
			$request['picture'] = Storage::url($request['picture']);
			$request['picture'] = asset($request['picture']);
			// $filename = $request->file('photo')->hashName();
			$request['image'] = $request['picture'];
		}

		$news = News::whereId($id)->first();
		$news->update($request->all());

		return redirect('admin/news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$news = News::find($id)->delete();
		return response()->json(['message' => 'deleted successfully'], 200);
	}
}
