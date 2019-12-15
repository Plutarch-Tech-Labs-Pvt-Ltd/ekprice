<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use App\Label;
use DB;

class CategoriesController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Categories::all();
        return view('admin.categories.categories')->with(compact('categories',$categories));
        
    }
   
    public function create()
    {
        return view('admin.categories.createcategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_title' => 'required',            
        ]);

        //create category
        
        $category = new Categories;
        $category->cat_title = $request->input('cat_title');
        $category->c_active_status='active';
        $category->save();        

        return redirect('/admin/categories')->with('success', 'Created category');
    }

    public function edit($id)
    {
       
       
        $categories = Categories::find($id);
        return view('admin.categories.editcategory',compact('categories','id'));
    }

    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);
        $categories->cat_title = $request->get('title');
        $categories->c_active_status = 'Active';       
        $categories->save();
        return redirect('/admin/categories')->with('success', 'Updated category');
    }

    public function destroy($id)
    {
      $categories = Categories::find($id);
      $categories->delete();

      return redirect('/admin/categories')->with('success', 'Category Deleted');
    }


    public function active($id)
    {

        DB::table('categories')
            ->where('cat_id', $id)
            ->update(['c_active_status' => 'Active']);

        return redirect('/admin/categories')->with('success', 'Updated category');
    }
    public function inactive($id)
    {

        DB::table('categories')
            ->where('cat_id', $id)
            ->update(['c_active_status' => 'Inactive']);

        return redirect('/admin/categories')->with('success', 'Updated category');
    }

    /**********Label categories *************/

    

   

    public function storelabel(Request $request)
    {
        $request->validate([
            'label_title' => 'required',            
        ]);

        //create category
        
        $label = new Label();
        $label->label_title = $request->input('label_title');
        $label->save();     
           

        return redirect('/admin/labelcategories')->with('success', 'Created category');
    }

}
