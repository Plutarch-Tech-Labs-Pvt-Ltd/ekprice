<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use App\Label;

class SubCategoriesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $data = SubCategories::select('subcategories.*','label.label_title as lable','categories.cat_title as category')
                ->join('label','subcategories.label_id','label.label_id')
                ->join('categories','label.cat_id','categories.cat_id')
                ->get();

        return view('admin.subcategories.subcategories',compact('data'));
     }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $subcategories = SubCategories::all();       
        return view('admin.subcategories.createsubcategory')->with(compact('categories',$categories))->with(compact('subcategories',$subcategories));
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
            'category' => 'required',            
            'lable' => 'required',            
            'subcategory' => 'required',            
        ]);

        //create category
        SubCategories::create([
            'cat_id' =>  $request->category,
            'label_id' =>  $request->lable,
            'subcat_title' =>  $request->subcategory,
            'is_active' =>  1
        ]);

        return redirect('admin/subcategory')->with('success', 'Created category');
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
        $categories = Categories::all();
        $data = SubCategories::where('subcat_id',$id)->first();
        // dd($data);
        $lable = Label::where('label_id',$data->label_id)->get();
        if(!$data)
            return back()->with('error','something went wrong');
        // dd($data->toArray());

        return view('admin.subcategories.edit',compact('data','categories','lable'));
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
        $request->validate([
            'category' => 'required',            
            'lable' => 'required',            
            'subcategory' => 'required',            
        ]);

        //create category
        $data = SubCategories::find($id);

        $data->update([
            'cat_id' =>  $request->category,
            'label_id' =>  $request->lable,
            'subcat_title' =>  $request->subcategory,
        ]);

        return redirect('admin/subcategories')->with('success','Subcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategories::find($id)->delete();

        return redirect('admin/subcategories')->with('success','Sub category deleted successfully.');


    }

    public function status($id)
    {
        dd($id);
    }

    public function getLableData(Request $request)
    {   
        $data = Label::where('cat_id',$request->id)->get();

        $getData = '';
        $getData .= '<option>Select Lable</option>';
        foreach ($data as $key => $value) {
            $getData .='<option value="'.$value->label_id.'">'.$value->label_title.'</option>';
        }
        return $getData;
    }



}
