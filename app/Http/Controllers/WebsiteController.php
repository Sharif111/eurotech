<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblQeury;
use DB;

class WebsiteController extends Controller
{
    public function websiteIndex(){
        $data['ProfileData'] = DB::table('tbl_profile')->orderby('id','desc')->first();
        $data['AboutUs'] = DB::table('about_us')->orderby('id','desc')->first();
        $data['sliderData'] = DB::table('tbl_slider')->where('status',1)->orderby('id','desc')->get();
        $data['brandData'] = DB::table('tbl_brand')->where('status',1)->orderby('id','desc')->get();
        return view('webview.home',$data);
    }
    public function aboutPage(){
        return view('webview.about');
    }
    public function brandPage(){
        $data['brandData'] = DB::table('tbl_brand')->where('status',1)->orderby('id','desc')->get();
        return view('webview.products',$data);
    }
    public function specialPage(){
        $data['sliderData'] = DB::table('tbl_slider')->where('status',1)->orderby('id','desc')->get();
        return view('webview.news',$data);
    }
    public function technologyPage(){
        return view('webview.technology');
    }
    public function contactPage(){
        return view('webview.contact');
    }
    public function getQueryMessage(Request $r){
        // return $r;
        TblQeury::create([
            'name'=>$r->name,
            'email'=>$r->email,
            'phone'=>$r->phone,
            'message'=>$r->message,
        ]);
        return redirect()->back();
    }
}
