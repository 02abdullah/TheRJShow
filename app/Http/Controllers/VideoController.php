<?php

namespace App\Http\Controllers;

use App\Models\Video;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create variable and store all blog posts
        $videos = Video::orderBy('id','desc')->get();

        //return view and pass in variable
        return view('videos.index')->withVideos($videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::id()=='4'){
        return view('videos.create');
        } else{
            return redirect('videos');
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
        $this->validate($request, array('name' => 'required|max:255',
            'url'=>'required|url'
        ));

        //store the data
        $video= new Video;

        $video->name = $request->name;
        $video->url = $request->url;

        $video->save();

        // redirect to page
        return redirect()->route('videos.index')->with('success','Video successfully added to gallery!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        $video->delete();

        return redirect()->route('videos.index')->with('success','The video has been deleted successfully.');
    }
}
