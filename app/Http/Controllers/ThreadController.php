<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::orderBy('subject', 'desc')->paginate(5);
        return view('welcome', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'subject' => 'required',
        'type' =>'required',
          'body' =>'required'
      ]);
      $post = new Thread();
      $post->subject = $request->input('subject');
      $post->type = $request->input('type');
      $post->body = $request->input('body');

      $post->save();
      return redirect()->back()->with('success', 'post inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread, $id)
    {

        $thread = Thread::find($id);

      return view('pages.show')->with('thread',  $thread);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread, $id)
    {
        $thread = Thread::find($id);
        return view('pages.edit')->with('thread', $thread);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'type' =>'required',
              'body' =>'required'
          ]);
          $post = Thread::find($id);
          $post->subject = $request->input('subject');
          $post->type = $request->input('type');
          $post->body = $request->input('body');
    
          $post->save();
          return redirect()->back()->with('success', 'post inserted updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread, $id)
    {
        $thread = Thread::find($id);
        $thread->delete();
        return redirect('/')->with('error', 'post deleted');

    }
}
