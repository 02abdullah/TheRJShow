<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create variable and store all blog posts
        $posts = Post::orderBy('id','desc')->simplePaginate(3);

        //create variable and store top 4 blogs by view count
        $trending = Post::orderBy('view_count','desc')->take(4)->get();

        //return view and pass in variable
        return view('posts.index')->withPosts($posts)->withTrending($trending);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //variable for logged in user
        $user = Auth::user();

        //only registered users can create
        if (Auth::check()) {
            $categories = Category::all();
            return view('posts.create')->withCategories($categories)->withUser($user);
        }else{
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array('title' => 'required|max:255',
            'body'=> 'required','category_id'=>'integer|nullable'
        ));
        //store the data
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->view_count = 0;
        $post->category_id = $request->category_id;
        $user = Auth::user();
        $post->user_name = $user->name;
        $post->user_id = $user->id;
        $post->user_email = $user->email;

        $post->save();

        // redirect to page
        return redirect()->route('posts.show', $post->id)->with('success','Your amazing post was successfully uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        //author cannot boost views by clicking their own post
        if(Auth::id()!=$post->user_id){
            DB::table('posts')->where('id',$id)->increment('view_count');
        }
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in teh database and save as variable
        $post = Post::find($id);

        //return view and pass in the variable
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data
        $this->validate($request, array('title' => 'required|max:255',
            'body'=> 'required', 'category_id' =>'integer|nullable'
        ));
        //Save data to DB
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->save();

        //Redirect to posts.show with flash success
        return redirect()->route('posts.show', $post->id)->with('success','Your edit was successfully saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success','The post has been deleted successfully.');
    }

    public function search(Request $request)
    {

        //validate search
        $this->validate($request, array('query' => 'max:255'));

        //create variable and store top 6 blogs by view count
        $trending = Post::orderBy('view_count','desc')->take(4)->get();

        //create variable for input query
        $query = $request->get('query');

        //avoid error message when search bar is empty
        if(empty($query)){
            //create variable and store all blog posts
            $posts = Post::orderBy('id','desc')->simplePaginate(3);

            //return view and pass in variable
            return view('posts.index')->withPosts($posts)->withTrending($trending);
        }
        $posts = Post::where('title', 'LIKE', '%'.$query.'%')
            ->orWhere('body', 'LIKE', '%'.$query.'%')
            ->orderBy('id', 'desc')->simplePaginate(3);

        //return view and pass in variable
        return view('posts.search')->withPosts($posts)->withTrending($trending);

    }

    public function category($category)
    {
        //create variable and find related blog posts
        $cat=$category;

        $posts = Post::where('category_id', '=', $cat)
            ->orderBy('id', 'desc')->simplePaginate(3);

        //return view and pass in variable
        return view('posts.categories')->withPosts($posts);
    }
}
