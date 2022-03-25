<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;


class SermonController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sermony.viewAllFile',['sermonies'=>Sermon::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sermony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'title'=>'required|string',
            'introduction'=>'required|string|max:255',
            'content'=>'required|string',
            'document'=>'required|file',
            'photo'=>'required|file',
            'type'=>'required|string'
        ]);

        $sermon = new Sermon();
        $sermon->title = $data['title'];
        $sermon->introduction = $data['introduction'];
        $sermon->content = $data['content'];
        $sermon->type = $data['type'];


        if ($request->hasFile('document'))
        {
            $sermon->document = $request->file('document')->store('documents', ['disk' =>'my_files']);
        }
        if ($request->hasFile('photo'))
        {
            $sermon->photo = $request->file('photo')->store('photos', ['disk' =>'my_files']);
        }
        $sermon->save();
        return view('sermony.viewAllFile',['sermonies'=>Sermon::paginate(10)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function show(Sermon $sermon)
    {
        return view('sermonyview',['sermon'=>$sermon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermon $sermon)
    {
        return view('sermony.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sermon $sermon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermon $sermon)
    {
        $sermon->delete();
        return redirect('/sermon');
    }
}
