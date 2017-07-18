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
use App\Superuser;
use App\Template;
use App\Template_Data;
class AdminController extends Controller {
	public function getIndex()
	{
		
		$user=User::all()->count();
		$template=Template::all()->count();
		return view('admin.home')->with('peoples',$user)
								->with('templates',$template);
	}
	public function getEdit()
	{
		$template=Template::all();
		//dd($template);
		return view('admin.templates')->with('template',$template);
	}
	public function getAddtemp()
	{
		return view('admin.addtemp');
	}
	public function postAddtemp()
	{
		$images=Input::file('template_image');
		if($images!==null)
		{
		    $filename=str_random(80).'.'.'jpg';
	        $images->move(public_path().'/aa/',$filename);
        }
		$data=new Template();
        $data->template_name=Input::get('template_name');
        if($filename!==null)
        {
        $data->template_image=$filename;
        }
        $data->save();
        return redirect('/admin/edit');
	}
	public function getEdittemp($temid)
	{

		$templateid=Template::find($temid);
		//dd($templateid);
		return view('admin.edittemp')->with('tempname',$templateid);
	}
	public function postEdittemp($temid)
	{
		$images=Input::file('template_image');
		$filename=null;
		if($images!==null)
		{
		    $filename=str_random(80).'.'.'jpg';
	        $images->move(public_path().'/aa/',$filename);
        }
        $data=Template::find($temid);
        $data->template_name=Input::get('template_name');
        if($filename!==null)
        {
        $data->template_image=$filename;
        }
        $data->save();
        return redirect('/admin/edit');
	}
	public function getDelete($temid)
	{
		$value=Template::find($temid);
        if($value->delete())
            return redirect('/admin/edit')->with('success','Record deleted');
        else
            return redirect('/admin/edit')->with('error','Error deleting record');
	}
	
}