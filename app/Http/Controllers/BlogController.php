<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Item;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(5);
        return view('blog.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'bail|required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
            'text' => 'required',

        ]);

//        $image_path = $request->file('image')->store('images', 'public');
//
//        $data = Image::create([
//            'image' => $image_path,
//
//        ]);

        $imageName = time().'.'.$request->image_name->extension();
//
//        // Public Folder
//        $request->image_name->move(public_path('images'), $imageName);

         //Store in Storage Folder
        $request->image_name->move(public_path('images'), $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB

        $blog = $request->except(['_token']);
        Blog::create($blog);
        return redirect()->route('blogs.index')->with('message','Blog created successfully');
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
        $blog = Blog::findOrFail($id);
        return view('blog.edit')->with(compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = Blog::find($request->id);
        $data = $request->except(['_token']);
        $blog->update($data);
        return redirect()->route('blogs.index')->with('message','Blog edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('message','Blog deleted successfully');
    }
}
