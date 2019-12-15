<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user());
        return view('frontend.home');
    }

    public function profile()
    {
        $data = User::find(Auth::user()->id);
        return view('profile',compact('data'));
    }

    public function UpdateProfile(Request $request)
    {
        $userData = User::find(Auth::user()->id);
        $request->validate([
            'name' => 'required|max:254',
            'phone_no' => 'required|digits:10|unique:users,phone_no,'.$userData->id,
            'profile_pic' => 'image|mimes:jpeg,png,jpg|max:100',
        ]);

        $imageName = $userData->profile_pic;
        $file_path = '';
        if ($request->hasFile('profile_pic')) {
            $file_path = asset('public/storage/user_profile').'/'.$userData->profile_pic;
            // dd($file_path);
            $imageName = time().'.'.$request->profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path('storage/user_profile'), $imageName);
        }

        User::find($userData->id)->update([
            'name' => $request->name,
            'phone_no' => $request->phone_no,
            'profile_pic' => $imageName,
        ]);

        if($file_path)
            File::delete($file_path);

        return redirect()->back()->with('success','Profile Updated successfully.');
    }
}
