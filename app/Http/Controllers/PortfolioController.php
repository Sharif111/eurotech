<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Team;
use App\Service;

class PortfolioController extends Controller
{
    public function PortfolioAdd(){
        return view('admin.portfolio.portfolio-add');
    }
    public function PortfolioStore(Request $r){
        $sliderName = '';
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/portfolio');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        $isStore = Portfolio::create([
            'name'=>$r->name,
            'description'=>$r->description,
            'image'=>$sliderName,
            
        ]);
        if($isStore){
            return redirect('admin/portfolio')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/portfolio')->with('error','Data Create Failed!');
        }
    }
    public function PortfolioList(){
        $portfolioList = Portfolio::orderby('id','desc')->get();
        return view('admin.portfolio.portfolio_list',compact('portfolioList'));
    }










    public function TeamAdd(){
        return view('admin.team.team-add');
    }
    public function TeamStore(Request $r){
        $sliderName = '';
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/portfolio');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        $isStore = Team::create([
            'name'=>$r->name,
            'designation'=>$r->designation,
            'message'=>$r->message,
            'image'=>$sliderName,
            
        ]);
        if($isStore){
            return redirect('admin/team')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/team')->with('error','Data Create Failed!');
        }
    }
    public function TeamList(){
        $teamList = Team::orderby('id','desc')->get();
        return view('admin.team.team_list',compact('teamList'));
    }











    public function ServiceAdd(){
        return view('admin.service.service-add');
    }
    public function  ServiceStore(Request $r){
        $sliderName = '';
        if($r->hasFile('image')) {
            $image = $r->file('image');
            $name = 'S'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/webassets/portfolio');
            $image->move($destinationPath, $name);
            $sliderName = $name;
        }
        $isStore =  Service::create([
            'name'=>$r->name,
            'description'=>$r->description,
            'image'=>$sliderName,
            
        ]);
        if($isStore){
            return redirect('admin/service')->with('success','Data Created Successfully');
        }else{
            return redirect('admin/service')->with('error','Data Create Failed!');
        }
    }
    public function ServiceList(){
        $serviceList = Service::orderby('id','desc')->get();
        return view('admin.service.service_list',compact('serviceList'));
    }












}
