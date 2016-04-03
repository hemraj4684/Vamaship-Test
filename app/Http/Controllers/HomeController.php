<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Validator,Redirect;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return view('postList', compact('posts'));
	}
	public function create()
	{
		return view('postCreate');
	}

	public function store(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
           'post_article'     => 'required|max:255',
           'post_description'    => 'required|max:255'
       ]);
	    
	    if ($validator->fails())
	    {
	        return redirect('postCreate')->withErrors($validator);
	    }
	   	else{ 
	       $result = Post::create([
	                      'article_name'        => $request['post_article'],
	                      'article_discription' => $request['post_description']
	                 ]);

       if($result)
	      return Redirect::route('postListing')->with('success','Created');  	
	   
		}
	}

	public function edit($id){
		$posts = Post::find($id);
		//dd($id,$posts);
		return view('postEdit', compact('posts'));
	}

	public function update(Request $request){
		$posts = Post::find($request->post_id);

		$validator = Validator::make($request->all(), [
           'post_article'     => 'required|max:255',
           'post_description'    => 'required|max:255'
        ]);
	    
	    if ($validator->fails())
	    {
	        return Redirect::route('postEdit',['id' => $request->post_id])->withErrors($validator);
	    }
	   	else{
			$posts->article_name = $request->post_article;
		    $posts->article_discription = $request->post_description;
		    $posts->save();
		    return Redirect::route('postListing')->with('success','Updated');
	    }
	}

	public function delete($id){
		$posts = Post::destroy($id);
		return Redirect::route('postListing')->with('success','Deleted');  	
	}
}
