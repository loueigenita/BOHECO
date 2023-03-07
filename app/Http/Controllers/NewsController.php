<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $news = News::all();
        $news = News::paginate(5);
        return view ('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        return view('news.create',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'article' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/news'))
            {
                mkdir('uploads/news',0777,true);
            }
            $image->move('uploads/news',$imagename);
        }else{
            $imagename = "default.png";
        }
        $news = new News();
        $news->title = $request->title;
        $news->article = $request->article;
        $news->image = $imagename;
        $news->save();

        return redirect()->route('news.index')->with('toast_success','New News Successfully Created');
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
        $news = News::find($id);
        return view('news.edit',compact('news'));
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
        $this->validate($request,[
            'title' => 'required',
            'article' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $new = News::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/news'))
            {
                mkdir('uploads/news',0777,true);
            }
            unlink('uploads/news/'.$new->image);
            $image->move('uploads/news',$imagename);
        }else{
            $imagename = $new->image;
        }

        $new->title = $request->title;
        $new->article = $request->article;
        $new->image = $imagename;
        $new->save();
        
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if (file_exists('uploads/news/'.$news->image))
        {
            unlink('uploads/news/'.$news->image);
        }
        $news->delete();
        return redirect()->back()->with('toast_success','News Successfully Deleted');
    }
}
