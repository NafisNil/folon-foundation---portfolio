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
        $data['cause'] = Cause::orderBy('id','desc')->get();
        $data['event'] = Event::orderBy('id','desc')->get();
        $data['team'] = Team::orderBy('id','desc')->get();
        $data['testimonial'] = Testimonial::orderBy('id','desc')->get();
        $data['blog'] = Blog::orderBy('id','desc')->get();
        return view('frontend.index', $data);
    }

    public function contactSubmit(Request $request){
        
    }
}
