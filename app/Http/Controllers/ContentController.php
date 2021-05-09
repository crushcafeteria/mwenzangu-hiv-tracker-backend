<?php

namespace App\Http\Controllers;


use App\Models\Content;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::query();
        if (request()->topic) {
            $content = $content->where('topic_id', request()->topic);
        }
        return view('content.list', [
            'content' => $content->paginate(),
            'topics'  => Topic::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create', [
            'topics' => Topic::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'    => 'required',
            'text'     => 'required',
            'topic_id' => 'required',
            'type'     => 'required',
            'media'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $content = Content::create([
            'topic_id' => $request->topic_id,
            'media'    => $request->media,
            'text'     => $request->text,
            'title'    => $request->title,
            'type'     => $request->type,
            'user_id'  => Auth::user()->id,
        ]);

        return redirect()->route('content.index')->with('message', 'Content created successfully !');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Content $content)
    {

        return view('content.show', [
            'content' => $content,
            'topic'  => Topic::where('id',$content->topic_id)->first(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('content.edit', [
            'content' => $content,
            'topics'  => Topic::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Content $content)
    {
        $validator = Validator::make($request->all(), [
            'title'    => 'required',
            'text'     => 'required',
            'topic_id' => 'required',
            'type'     => 'required',
            'media'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $content->update($request->all());

        return redirect()->route('content.index')->with('message','Content updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
