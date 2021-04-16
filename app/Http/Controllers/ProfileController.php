<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\TblQeury;
use App\Slider;
use App\AboutUs;
use App\Brand;
use App\Testimonial;
use App\Menu;

class ProfileController extends Controller
{
    public function ProfileInfo(){
        $ProfileData = Profile::orderby('id','desc')->first();
        return view('admin.profile',compact('ProfileData'));
    }

    public function ProfileInfoStore(Request $r){
        // return $r;
        $ProfileData = Profile::orderby('id','desc')->first();
        if($ProfileData){
           
                $data['title']= $r->title;
                $data['phone']= $r->phone;
                $data['email']= $r->email;
                $data['facebook']= $r->facebook;
                $data['twitter']= $r->twitter;
                $data['instagram']= $r->instagram;
                $data['address']= $r->address;
                if($r->hasFile('logo')) {
                    $image = $r->file('logo');
                    $name = 'weblogo.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/webassets/logo');
                    $image->move($destinationPath, $name);
                    $data['logo']= $name;
                }
            $isStore = Profile::find($ProfileData['id'])->update($data);
            if($isStore){
                return redirect('admin/profile')->with('success','Data Updated Successfully');
            }else{
                return redirect('admin/profile')->with('error','Data Update Failed!');;
            }
        }
        else{
            $logoName = '';
            if($r->hasFile('logo')) {
                $image = $r->file('logo');
                $name = 'weblogo.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/webassets/logo');
                $image->move($destinationPath, $name);
                $logoName = $name;
            }
            $isStore = Profile::create([
                'title'=>$r->title,
                'phone'=>$r->phone,
                'email'=>$r->email,
                'facebook'=>$r->facebook,
                'twitter'=>$r->twitter,
                'instagram'=>$r->instagram,
                'logo'=>$logoName,
                'address'=>$r->address,
            ]);
            if($isStore){
                return redirect('admin/profile')->with('success','Data Created Successfully');
            }else{
                return redirect('admin/profile')->with('error','Data Create Failed!');;
            }
        }        
    }

    public function QueryList(Request $r){
        $from = '';
        $to = '';
        if(isset($r->from_date) && isset($r->to_date)){
            $from = Date('Y-m-d 00:00:00',strtotime($r->from_date));
            $to = Date('Y-m-d 23:59:59',strtotime($r->to_date));
            $qeuryList = TblQeury::whereBetween('created_at',[$from,$to])->orderby('id','desc')->get();
        }
        else{
            $qeuryList = TblQeury::orderby('id','desc')->get();
        }
        return view('admin.query_list',compact('qeuryList','from','to'));
    }

    public function SliderAdd(){
        return view('admin.slider.slider-add');
    }
    public function SliderStore(Request $r){
        $sliderName = '';
        if($r->hasFile('slider')) {
            $image = $r->file('slider');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/slider');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        $isStore = Slider::create([
            'title'=>$r->title,
            'sub_title'=>$r->sub_title,
            'description'=>$r->description,
            'image'=>$sliderName,
            'status'=>1,
        ]);
        if($isStore){
            return redirect('admin/slider')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/slider')->with('error','Data Create Failed!');
        }
    }
    public function SliderList(){
        $sliderList = Slider::orderby('id','desc')->get();
        return view('admin.slider.slider_list',compact('sliderList'));
    }
    public function SliderEdit($id){
        $editData = Slider::find($id);
        return view('admin.slider.slider_edit',compact('editData'));
    }
    public function SliderUpdate(Request $r,$id){

        $data['title']= $r->title;
        $data['sub_title']= $r->sub_title;
        $data['description']= $r->description;
        $data['status']= $r->status;
        if($r->hasFile('slider')) {
            $image = $r->file('slider');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/slider');
            $image->move($destinationPath, $name);
            $data['image']= $name;
        }
        $isStore = Slider::find($id)->update($data);
        if($isStore){
            return redirect('admin/slider-list')->with('success','Data Updated Successfully');
        }else{
            return redirect('admin/slider-list')->with('error','Data Update Failed!');;
        }
    }
    public function SliderDel($id){
        $isStore = Slider::find($id)->delete();
        if($isStore){
            return redirect('admin/slider-list')->with('success','Data Deleted Successfully');
        }else{
            return redirect('admin/slider-list')->with('error','Data Delete Failed!');;
        }
    }

    public function AboutUs(){
        $AboutData = AboutUs::orderby('id','desc')->first();
        return view('admin.aboutus',compact('AboutData'));
    }

    public function AboutUsStore(Request $r){
        // return $r;
        $AboutUsData = AboutUs::orderby('id','desc')->first();
        if($AboutUsData){
                $data['title']= $r->title;
                $data['description']= $r->description;
                if($r->hasFile('image')) {
                    $image = $r->file('image');
                    $name = 'about_image.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/webassets/aboutus');
                    $image->move($destinationPath, $name);
                    $data['image']= $name;
                }
            $isStore = AboutUs::find($AboutUsData['id'])->update($data);
            if($isStore){
                return redirect('admin/about-us')->with('success','Data Updated Successfully');
            }else{
                return redirect('admin/about-us')->with('error','Data Update Failed!');;
            }
        }
        else{
            $logoName = '';
            if($r->hasFile('image')) {
                $image = $r->file('image');
                $name = 'about_image.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/webassets/aboutus');
                $image->move($destinationPath, $name);
                $logoName = $name;
            }
            $isStore = AboutUs::create([
                'title'=>$r->title,
                'description'=>$r->description,
                'image'=>$logoName,
            ]);
            if($isStore){
                return redirect('admin/about-us')->with('success','Data Created Successfully');
            }else{
                return redirect('admin/about-us')->with('error','Data Create Failed!');;
            }
        }        
    }


    public function BrandAdd(){
        return view('admin.brand.brand-add');
    }
    public function BrandStore(Request $r){
        $sliderName = '';
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/brand');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        
        $isStore = Brand::create([
            'name'=>$r->name,
            'price'=>$r->price,
            'star'=>$r->star,
            'image'=>$sliderName,
            'status'=>1,
        ]);
        if($isStore){
            return redirect('admin/brand')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/brand')->with('error','Data Create Failed!');
        }
    }
    public function BrandList(){
        $brandList = Brand::orderby('id','desc')->get();
        return view('admin.brand.brand_list',compact('brandList'));
    }
    public function BrandEdit($id){
        $editData = Brand::find($id);
        return view('admin.brand.brand_edit',compact('editData'));
    }
    public function BrandUpdate(Request $r,$id){

        $data['name']= $r->name;
        $data['star']= $r->star;
        $data['price']= $r->price;
        $data['status']= $r->status;
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/brand');
            $image->move($destinationPath, $name);
            $data['image']= $name;
        }
        $isStore = Brand::find($id)->update($data);
        if($isStore){
            return redirect('admin/brand-list')->with('success','Data Updated Successfully');
        }else{
            return redirect('admin/brand-list')->with('error','Data Update Failed!');;
        }
    }
    public function BrandDel($id){
        $isStore = Brand::find($id)->delete();
        if($isStore){
            return redirect('admin/brand-list')->with('success','Data Deleted Successfully');
        }else{
            return redirect('admin/brand-list')->with('error','Data Delete Failed!');;
        }
    }

    // Testimonial //
    public function TestimonialAdd(){
        return view('admin.testimonial.testimonial-add');
    }
    public function TestimonialStore(Request $r){
        // return $r;
        $sliderName = '';
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/testimonial');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        $isStore = Testimonial::create([
            'title'=>$r->title,
            'sub_title'=>$r->sub_title,
            'description'=>$r->description,
            'star'=>$r->star,
            'image'=>$sliderName,
            'status'=>1,
        ]);
        if($isStore){
            return redirect('admin/testimonial')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/testimonial')->with('error','Data Create Failed!');
        }
    }
    public function TestimonialList(){
        $brandList = Testimonial::orderby('id','desc')->get();
        return view('admin.testimonial.testimonial_list',compact('brandList'));
    }
    public function TestimonialEdit($id){
        $editData = Testimonial::find($id);
        return view('admin.testimonial.testimonial_edit',compact('editData'));
    }
    public function TestimonialUpdate(Request $r,$id){

        $data['title']= $r->title;
        $data['sub_title']= $r->sub_title;
        $data['description']= $r->description;
        $data['star']= $r->star;
        $data['status']= $r->status;
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/testimonial');
            $image->move($destinationPath, $name);
            $data['image']= $name;
        }
        $isStore = Testimonial::find($id)->update($data);
        if($isStore){
            return redirect('admin/testimonial-list')->with('success','Data Updated Successfully');
        }else{
            return redirect('admin/testimonial-list')->with('error','Data Update Failed!');;
        }
    }
    public function TestimonialDel($id){
        $isStore = Testimonial::find($id)->delete();
        if($isStore){
            return redirect('admin/testimonial-list')->with('success','Data Deleted Successfully');
        }else{
            return redirect('admin/testimonial-list')->with('error','Data Delete Failed!');;
        }
    }

    // Menu //
    public function MenuAdd(){
        return view('admin.menu.menu-add');
    }
    public function MenuStore(Request $r){
        // return $r;
        $isStore = Menu::create([
            'name'=>$r->name,
            'url'=>$r->url,
            'position'=>$r->position,
        ]);
        if($isStore){
            return redirect('admin/menu')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/menu')->with('error','Data Create Failed!');
        }
    }
    public function MenuList(){
        $brandList = Menu::orderby('id','desc')->get();
        return view('admin.menu.menu_list',compact('brandList'));
    }
    public function MenuEdit($id){
        $editData = Menu::find($id);
        return view('admin.menu.menu_edit',compact('editData'));
    }
    public function MenuUpdate(Request $r,$id){

        $data['name']= $r->name;
        $data['url']= $r->url;
        $data['position']= $r->position;
        
        $isStore = Menu::find($id)->update($data);
        if($isStore){
            return redirect('admin/menu-list')->with('success','Data Updated Successfully');
        }else{
            return redirect('admin/menu-list')->with('error','Data Update Failed!');;
        }
    }
    public function MenuDel($id){
        $isStore = Menu::find($id)->delete();
        if($isStore){
            return redirect('admin/menu-list')->with('success','Data Deleted Successfully');
        }else{
            return redirect('admin/menu-list')->with('error','Data Delete Failed!');;
        }
    }
}