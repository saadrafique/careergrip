<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Euser;
use DB;
use App\Juser;
use App\Seinfo;
use App\User;
use App\Pinfo;
use App\Post;
use App\Awinfo;
use App\Vrinfo;
use App\Cinfo;
use App\Jinfo;
use App\Langinfo;
use App\Compinfo;
use App\Rpinfo;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DesignController extends Controller
{
  public function signup()
  {
    return view('Design.signup');
  }
	public function jssignup()
	{
		return view('Design.jssignup');
	}
	public function jsprofile($id)
	{
    $Juser=Juser::find($id);
    return view('Design.jsprofile',compact('Juser'));
	}

 public  function show($id){
 	
       $Compinfo=Compinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.empshow',compact('Compinfo'));
    }


public function estore(Requests\EuserRequest $request){

      
      // $user->profile->save($request);
    //    dd($request);
       
        $Eusers = Euser :: Create($request->all());
      //  dd($Eusers);

        $Eusers->save();


      $emprofile = 'emprofile/' . $Eusers->id ;



  return redirect ($emprofile);

    }
public function loginsite(Request $request){


dd($request->email);

//$email=''.$request->email;

//dd($email);

//$user = Euser :: where('email' , '=', $request->get('email'))->get() ;

 $user = Euser :: where ('email' , '=', $request->email)->where('password' , '=', $request->password)->get();

dd($user);












//$users = DB::table('users')->get();

  /*   if(Auth::check())
      {

        return "login";
  //      return redirect('h');
      }

      return "not login";
      return redirect('logsite');
*/      

  
     // return "not login";
  //    return redirect('logsite');
      
      // $user->profile->save($request);
   
    }



public function store(Requests\CompinfoRequest $request){


//dd($request);

     //  $user = Euser::Find($id);
      
      // $user->profile->save($request);

        $Compinfoes = Compinfo :: Create($request->all());
        $Compinfoes->save();

         // dd($Compinfoes);
//        $image = $Compinfoes->company_logo;


        if (isset($request -> company_logo)) 
        {
          # code...
        

        $imageName = $Compinfoes->id . '_compinfo.' .
        $request->file('company_logo')->getClientOriginalExtension();
        $imageCompletePath = '/company_logo/'. $imageName ;
        $request->file('company_logo')->move(
        base_path() . '/public/company_logo/', $imageName);
        $Compinfoes->update(array('company_logo' => $imageCompletePath));

}





$show = 'show/' . $Compinfoes->id ;
  return redirect ($show);
  
    }

/*
xpublic  function showjobseeker($id){
  
       $Pinfos=Pinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.jobseekershow',compact('Pinfos'));
    }

*/
  public  function showjobseeker($id){
  
       $Pinfos=Pinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.showjobseeker',compact('Pinfos'));
    }  

public function storejobseeker(Requests\PinfoRequest $request){

     //  $user = Juser::Find(1);
      
      // $user->profile->save($request);

        $Pinfos = Pinfo :: Create($request->all());
        $Pinfos->save();


if (isset($request -> image)) 
        {
          # code...


         // $imageName = $Compinfoes->id . '_compinfo.' .
        $imageName = $Pinfos->id . '_picinfo.' .
   //     dd($imageName);
        $request->file('image')->getClientOriginalExtension();
        $imageCompletePath = '/image/'. $imageName ;
        $request->file('image')->move(
        base_path() . '/public/image/', $imageName);
        $Pinfos->update(array('image' => $imageCompletePath));

}

$showjobseeker = 'showjobseeker/' . $Pinfos->id ;
  return redirect ($showjobseeker );

    }


public function jstore(Requests\JuserRequest $request){

             
      // $user->profile->save($request);

        $Jusers = Juser :: Create($request->all());
        $Jusers->save();

  $jsprofile = 'jsprofile/' . $Jusers->id ;

  return redirect ($jsprofile);

    }

public function rpstore(Requests\RpinfoRequest $request){

             
      // $user->profile->save($request);

        $Rpinfos = Rpinfo :: Create($request->all());
        $Rpinfos->save();

 return "success";

    }

public function coursestore(Requests\CinfoRequest $request){

             
      // $user->profile->save($request);

        $Cinfos = Cinfo :: Create($request->all());
        $Cinfos->save();

 return"succes";

    }
public function skillestore(Requests\skinfoRequest $request){

             
      // $user->profile->save($request);

        $Skinfos = Skinfo :: Create($request->all());
        $Skinfos->save();

 return"succes";

    }
public function Languagestore(Requests\LanginfoRequest $request){

             
      // $user->profile->save($request);

        $langinfos = Lang_info :: Create($request->all());
        $langinfos->save();

 return"succes";

    }
 
 public function edustore(Requests\EinfoRequest $request){

             
      // $user->profile->save($request);

        $Einfos = Einfo :: Create($request->all());
        $Einfos->save();

 return"succes";

    }
public function jobexp_store(Requests\JinfoRequest $request){

             
      // $user->profile->save($request);

        $Jinfos = Jinfo :: Create($request->all());
        $Jinfos->save();

 return"succes";

    }

public function seminar_store(Requests\SeinfoRequest $request){

             
      // $user->profile->save($request);

        $Seinfos = Seinfo :: Create($request->all());
        $Seinfos->save();

 return"succes";

    }
public function award_store(Requests\AwinfoRequest $request){

             
      // $user->profile->save($request);

        $Awinfos = Awinfo :: Create($request->all());
        $Awinfos->save();

 return"succes";

    }
    public function volunteer_store(Requests\VrinfoRequest $request){

             
      // $user->profile->save($request);

        $Vrinfos = Vrinfo :: Create($request->all());
        $Vrinfos->save();

 return"succes";

    }
public function jobstore(Requests\PostRequest $request){

             
      // $user->profile->save($request);

        $Posts = Post :: Create($request->all());
        $Posts->save();

 return redirect ('jobshow');

    }

	public function emsignup()
	{
    
		return view('Design.emsignup');
	}



	public function emprofile($id)
	{

    $Euser=Euser::find($id);
    return view('Asif.emprofile',compact('Euser'));
	}




	public function login()
	{
		return view('Design.login');
	}

	public function job()
	{
		return view('Design.job');
	}
   public function jobshow()
  {
    $Posts=Post::all();
    return view('Design.jobshow',compact('Posts'));
  } 




}













