<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Country;
use App\State;
use App\City;
use App\Seller;
use App\Language;
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

    public function seller_register()
    {
        $country = Country::get();
        $state = State::get();
        $city = City::get();
        $language =  Language::get();
        $seller_st = 0;
        $seller = Seller::where("user_id",Auth::user()->id)->get();
        $seller_dt = '';
        if(count($seller)>0)
        {
            $seller_st = 1;
            $seller_dt = Seller::where("user_id",Auth::user()->id)->first();
        }
        return view('seller_register',compact('country','state','city','seller_st','seller_dt','language'));
    }
    public function add_seller_register(Request $request)
    {
        $seller_details = new Seller;
        $seller_details->seller_id      = rand('10000','99999');
        $seller_details->user_id        = Auth::user()->id;
        $seller_details->display_name   = $request->input('display_name');
        $imageName = '';
        if ($request->hasFile('profile')) {
            $file_path = asset('public/storage/user_profile').'/'.$request->profile;
            // dd($file_path);
            $imageName = time().'.'.$request->profile->getClientOriginalExtension();

            $request->profile->move(public_path('storage/user_profile'), $imageName);
        }
        $seller_details->profile                = $imageName;
        $seller_details->education              = $request->input('education');
        $seller_details->average_response_time  = $request->input('response_time');
        $seller_details->country_id             = $request->input('country');
        $seller_details->state_id               = $request->input('state');
        $seller_details->city_id                = $request->input('city');
        $seller_details->seller_type            = $request->input('seller_type');
        // store seller details
        $seller_details->save();
        return redirect()->route('seller_register');
    }  
    public function second_step(Request $request)
    {
        $sellerData = Seller::where('user_id',Auth::user()->id)->first();
        if($sellerData->seller_type=='1')
        {
            Seller::where("user_id",$sellerData->user_id)->update([
                'company_name' => $request->company_name,
                'num_years_business' => $request->business_year,
                'company_technologies' => $request->technique,
                'gstin' => $request->gst,
                'about_company_service' => $request->about_comany,
                'language1' => $request->language_1,
                'language2' => $request->language_2,
                'language3' => $request->language_3,
                'expertise_level_1' => $request->expertise_level_1,
                'expertise_level_2' => $request->expertise_level_2,
                'expertise_level_3' => $request->expertise_level_3,
            ]);
        }
        return redirect()->route('seller_register');
    } 
    public function getstate(Request $request)
    {
        $state = State::where('country_id',$request->input('cid'))->get();
        $option = '';
        if(count($state)>0)
        {
            $option .= '<option value="">Select State</option>';
            foreach($state as $value) {
                $option .= '<option value="'.$value->id.'">'.$value->name.'</option>';
            }
        }  
        echo $option;  
    }
hhh
    public function servicedetails()
    {
        return view('customer.servicedetails');
    }
}
