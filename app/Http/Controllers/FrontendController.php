<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Slider;
use App\Models\Aboutus;
use App\Models\Whatwedo;
use App\Models\Counter;
use App\Models\Cause;
use App\Models\Event;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Contactform;
use App\Http\Requests\ContactformRequest;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['setting'] = Setting::first();
        $data['aboutus'] = Aboutus::first();
        $data['social'] = Social::first();
        $data['whatwedo'] = Whatwedo::get();
        $data['counter'] = Counter::get();
        $data['slider'] = Slider::orderBy('id','desc')->get();
        $data['cause'] = Cause::orderBy('id','desc')->take(4)->get();
        $data['event'] = Event::orderBy('id','desc')->take(4)->get();
        $data['team'] = Team::orderBy('id','desc')->get();
        $data['testimonial'] = Testimonial::orderBy('id','desc')->get();
        $data['blog'] = Blog::orderBy('id','desc')->take(4)->get();
        return view('frontend.index', $data);
    }

    public function contactSubmit(ContactformRequest $request){
        $contactform = Contactform::create($request->all());
        return redirect()->back()->with('success', 'Thanks for your message!');
    }

    public function about(){
        $data['setting'] = Setting::first();
        $data['aboutus'] = Aboutus::first();
        $data['social'] = Social::first();

        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.aboutus', $data);
    }


    public function cause(){
        $data['setting'] = Setting::first();
        $data['cause'] = Cause::get();
        $data['social'] = Social::first();
        $data['whatwedo'] = Whatwedo::get();
        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.causes', $data);
    }


    public function event(){
        $data['setting'] = Setting::first();
        $data['event'] = Event::get();
        $data['social'] = Social::first();
        
        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.event', $data);
    }


    public function blog(){
        $data['setting'] = Setting::first();
        $data['blog'] = Blog::paginate(12);
        $data['social'] = Social::first();
        
        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.blog', $data);
    }


    public function blog_details($id){
        $data['setting'] = Setting::first();
        $data['blog'] = Blog::where('id', $id)->first();
        $data['blog_recent'] = Blog::orderBy('id','desc')->take(4)->get();
        $data['social'] = Social::first();
        
        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.blog_details', $data);
    }

    public function cause_details($id){
        $data['setting'] = Setting::first();
        $data['cause'] = Cause::where('id', $id)->first();
        $data['cause_recent'] = Cause::orderBy('id','desc')->take(4)->get();
        $data['social'] = Social::first();
        
        $data['slider'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.cause_details', $data);
    }
}
