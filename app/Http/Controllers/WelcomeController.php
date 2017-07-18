<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Template;
use App\Template_Data;
class WelcomeController extends Controller {
	public function getIndex()
	{
		$user=User::all()->count();
        $template=Template::all()->count();
        $user=Auth::User()->id;
        $templates_count=Template_Data::where('user_id','=',$user)->count();
        //dd($templates_count);
        return view('welcome')->with('people',$user)
                            ->with('total',$template)
                            ->with('used',$templates_count);
	}
	public function getAlltemplates()
	{
		$template=Template::all();
		return view('viewalltemplates')->with('template',$template);
									
	}
	public function getTemplates()
	{
		$user=Auth::User()->id;
		$templates_name=Template_Data::where('user_id','=',$user)->get();
		$template=[];
		$temp_name=[];
		foreach ($templates_name as $temp) 
		{
			$template[]=$temp->template_id; 
		}
		foreach ($template as $value)
		{
			$temp_name[]=Template::find($value);
		}
		$tempt_name=collect($temp_name);
		//dd($tempt_name);
		return view('viewtemplates')->with('tempt_name',$tempt_name);
									
	}
	public function getTemplate1()
	{
		//dd('gkjsd');
        $templateid='1';
		$userid=Auth::User()->id;
		$tempdata=Template_Data::where('template_id','=',$templateid)->where('user_id','=',$userid)->first();
        if($tempdata){
		  return view('template.template1')->with('tdata',$tempdata);
        }
        else
            return view('template.demotemplate1');
	}
	public function getTemplate2()
	{
		$templateid='2';
		$userid=Auth::User()->id;
		$tempdata=Template_Data::where('template_id','=',$templateid)->where('user_id','=',$userid)->first();
        if ($tempdata) {
		return view('template.template2')->with('tdata',$tempdata);
        }
        else
            return view('template.demotemplate2');
	}
	public function getEdittemplate($temid)
	{
		$userid=Auth::User()->id;
		$templateid=Template::find($temid);
		$tempdata=Template_Data::where('template_id','=',$temid)->where('user_id','=',$userid)->first();
		$tempname=Template::where('id','=',$temid)->first();
		return view('edittemplate')->with('userid',$userid)
									->with('temname',$tempname)
									->with('tdata',$tempdata);
		
	}
	public function postEdittemplate($tempid)
	{
		$userid=Auth::User()->id;
		$templateid=Template::find($tempid);
		$filename=null;
		$port_filename1=null;
		$port_filename2=null;
		$port_filename3=null;
		$images=Input::file('image');
		if($images!==null)
		{
		    $filename=str_random(80).'.'.'jpg';
	        $images->move(public_path().'/aa/',$filename);
        }
    	
    	$portfolioimage1=Input::file('portfolio_images1');
		if($portfolioimage1!==null)
		{
		    $port_filename1=str_random(80).'.'.'jpg';
	        $portfolioimage1->move(public_path().'/aa/',$port_filename1);
        }
        $portfolioimage2=Input::file('portfolio_images2');
		if($portfolioimage2!==null)
		{
		    $port_filename2=str_random(80).'.'.'jpg';
	        $portfolioimage2->move(public_path().'/aa/',$port_filename2);
        }
        $portfolioimage3=Input::file('portfolio_images3');
		if($portfolioimage3!==null)
		{
		    $port_filename3=str_random(80).'.'.'jpg';
	        $portfolioimage3->move(public_path().'/aa/',$port_filename3);
        }
        //dd($portfolioimage3);
        $tempdata=Template_Data::where('template_id','=',$tempid)->where('user_id','=',$userid)->first();
         if($tempdata!==null)
        {
        $tempdata->first_name=Input::get('first_name');
        $tempdata->middle_name=Input::get('middle_name');
        $tempdata->last_name=Input::get('last_name');
        $tempdata->short_info=Input::get('short_info');
        $tempdata->long_info=Input::get('long_info');
        $tempdata->skills_list1=Input::get('skill_list1');
        $tempdata->skills_list2=Input::get('skill_list2');
        $tempdata->skills_list3=Input::get('skill_list3');
        $tempdata->skills_list4=Input::get('skill_list4');
        $tempdata->service_name1=Input::get('service_name1');
        $tempdata->service_info1=Input::get('service_info1');
        $tempdata->service_name2=Input::get('service_name2');
        $tempdata->service_info2=Input::get('service_info2');
        $tempdata->service_name3=Input::get('service_name3');
        $tempdata->service_info3=Input::get('service_info3');
        $tempdata->phone_no=Input::get('phone_no');
        $tempdata->email=Input::get('email');
        $tempdata->address=Input::get('address');
        $tempdata->facebook_link=Input::get('facebook_link');
        $tempdata->twitter_link=Input::get('twitter_link');
        $tempdata->google_link=Input::get('google_link');
        if($filename!==null)
        {
        $tempdata->image=$filename;
        }
        if($port_filename1!==null)
        {
        $tempdata->portfolio_images1=$port_filename1;
        }
        if($port_filename2!==null)
        {
        $tempdata->portfolio_images2=$port_filename2;
        }
        if($port_filename3!==null)
        {
        $tempdata->portfolio_images3=$port_filename3;
        }
        $tempdata->template_id=$tempid;
        $tempdata->user_id=$userid;
        //dd($tempdata);
        $tempdata->save();
        }
        else 
        {
        $data=new Template_Data();
        $data->first_name=Input::get('first_name');
        $data->middle_name=Input::get('middle_name');
        $data->last_name=Input::get('last_name');
        $data->short_info=Input::get('short_info');
        $data->long_info=Input::get('long_info');
        $data->skills_list1=Input::get('skill_list1');
        $data->skills_list2=Input::get('skill_list2');
        $data->skills_list3=Input::get('skill_list3');
        $data->skills_list4=Input::get('skill_list4');
        $data->service_name1=Input::get('service_name1');
        $data->service_info1=Input::get('service_info1');
        $data->service_name2=Input::get('service_name2');
        $data->service_info2=Input::get('service_info2');
        $data->service_name3=Input::get('service_name3');
        $data->service_info3=Input::get('service_info3');
        $data->phone_no=Input::get('phone_no');
        $data->email=Input::get('email');
        $data->address=Input::get('address');
        $data->facebook_link=Input::get('facebook_link');
        $data->twitter_link=Input::get('twitter_link');
        $data->google_link=Input::get('google_link');
        if($filename!==null)
        {
        $data->image=$filename;
        }
        if($port_filename1!==null)
        {
        $data->portfolio_images1=$port_filename1;
        }
        if($port_filename2!==null)
        {
        $data->portfolio_images2=$port_filename2;
        }
        if($port_filename3!==null)
        {
        $data->portfolio_images3=$port_filename3;
        }
        $data->template_id=$tempid;
        $data->user_id=$userid;
        $data->save();
        }    
        return redirect('/edittemplate/'.$tempid);
		
	}
}