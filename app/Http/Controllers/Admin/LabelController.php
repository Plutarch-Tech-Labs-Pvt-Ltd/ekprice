<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use App\Label;
use DB;

class LabelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Label::select('label.*','categories.cat_title as category_title')
                ->join('categories','label.cat_id','categories.cat_id')->get();     
          
        // dd('data');
        // dd($labels);
        // $categories = DB::table('categories')
        // ->select(['categories.cat_title'])
        // ->join('cat_lab', 'categories.cat_id', '=', 'cat_lab.cat_id')
        // ->join('label', 'label.label_id', '=', 'cat_lab.label_id')
        // ->get();

        return view('admin.label.label',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all(); 
        return view('admin.label.createlabelcategory')->with(compact('categories',$categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_title' => 'required', 
            'label_title' => 'required',          
        ]);

        $labels = new Label();
        $labels->label_title = $request->input('label_title');
        $labels->l_active_status='active';
        $labels->cat_id = $request->input('cat_title');        
        $labels->save(); 

        $categories = DB::table('categories')
        ->join('label', function ($join) {
            $join->on('categories.cat_id', '=', 'label.cat_id')
                 ->select('categories.cat_title');
        })
        ->get();       

        return redirect('/admin/label')->with('success', 'Created category')->with(compact('categories',$categories));

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
        //
    }
}
