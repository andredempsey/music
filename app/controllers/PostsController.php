<?php

class PostsController extends BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));

	}

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$searchTitle = Input::get('searchTitle');
		$isFiltered = ($searchTitle!='') ? True : False; 
		// $posts = Post::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->paginate(4);
		$posts = Post::filteredPosts($searchTitle);
		// $recentposts = Post::with('user')->take(4)->orderBy('created_at', 'desc')->get();
		// $number = count(Post::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->get());
		// $number = count($posts);
		$number = Post::countPosts($searchTitle);
		$data = [
			'posts' => $posts,
			'number'  => $number,
			'isFiltered' => $isFiltered,
			// 'recentposts' => $recentposts
		];
		
	    return View::make('posts.index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::findBySlug($slug);
	    return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}