<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Rider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function register_company(){
        return view('register_company');
    }

    public function register_agent(){

        return view('register_agent');
    }

    public function signin(){
        return view('signin');
    }

    public function login(){
        return view('login');
    }
    public function applicant(){

         if(Auth::user()->type_status == 'company'){
           $pay =  Payment::where(['user_id'=>Auth::user()->id,  'credit'=>0])->first();
            $number = intval($pay->number_of_job);
           $arr = Rider::where('riding/driving', $pay->name_of_job)->take($number)->get();
                //echo $pay->created_at->diffForHumans();
                //$pay->week.' ago';
                //$compare = Carbon::parse($pay->week.' ago')->diffForHumans();
                //$to = $pay->created_at->diffForHumans();
                //$date = Carbon::now()->subDays(7);
            $present = Carbon::now();
             $newDateTime = $pay->created_at->addDay(7);

            $ans =  $present->gte($newDateTime);
             if($ans){
                echo "do not display";
                return view('applicant',['arr'=>'please purchase credit to view jobs']);
             }else if(!$ans){
                //echo "display";
               // echo json_encode($arr);
                $this->lastofus($ans);
                return view('applicant', ['arr'=>$arr]);
             
             }
         }else if(Auth::user()->type_status !== 'company'){
            return Redirect(route('signin'))->with('error', 'please do this the correct way');
         }

    }
    public function send(Request $request){

        $request->validate([
            "name" => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
            "email" => 'email|unique:users',
            "Address" => 'required',
            "phone" => 'digits_between:11,11',
             "type_status" => 'required|alpha',
            ]);
         $user = new User();
         $user->name =  $request->name;
         $user->email =   $request->email;
         $user->Address =  $request->Address;
         $user->phone = $request->phone;
         $user->type_status = $request->type_status;
         $user->verification_code = sha1(time());
         $user->save();
      if($user){
          MailController::SendRegisterEmail( $user->name, $user->email, $user->verification_code);
          return response()->json(['sucess'=>'your accout has been created please check your email']);
      }
    }

    public function verify($code){
       $user = User::where('verification_code', $code)->first();

       if($user){

        return view('verify', ['code'=>$code]);
       }else{
          return Redirect(route('register_company'))->with('error', 'please do this the correct way');
       }

    }

    public function check(Request $request){

    $request->validate([
        'password'=>'required|confirmed|min:8'
    ]);

    $user = User::where('verification_code', $request->pin )->first();

    if($user->is_verified != 1){
        $user->password = Hash::make($request->password);
        $user->is_verified = 1;
        $user->save();
       $credentials = ['email'=>$user->email, 'password'=>$request->password];

      if(Auth::attempt($credentials)){
          $individual =  User::where("type_status",  Auth::user()->type_status)->first();

        if($individual->type_status == 'company'){

            return response()->json(['sent'=>Auth::user()->type_status.'_dashboard', 'user'=>Auth::user()->name]);


        }else if($individual->type_status == 'agent'){
            return response()->json(['sent'=>Auth::user()->type_status.'_dashboard', 'user'=>Auth::user()->name]);
        }
       }

    }else if($user->is_verified == 1){

     return response()->json(['equal'=>$user->type_status]);
    }

    }

    public function log(Request $request){

     $request->validate([
        "email" => "required|email",
        "password"=>"required",
     ]);
     $credentials = $request->only('email', 'password');
     if (Auth::attempt($credentials)) {

        return response()->json(['status'=>Auth::user()->type_status.'_dashboard', 'user'=>Auth::user()->name]);

     }

     return response()->json(['errors'=> 'Wrong password or email']);
    }

    public function agent_dashboard(Request $request, $user){

      return view('agent_dashboard');
    }

    public function company_dashboard(Request $request, $user){
     // echo  Auth::user()->created_at->diffForHumans();
    // echo User::where(['id'=>Auth::user()->id, 'name'=>Auth::user()->name])->first();


     return view('company_dashboard');
    }


    public function Logout(){
        Auth::logout();
        return redirect('/');
    }

    public function info(Request $request){
         dd($request->all());
    }


    public function payment(Request $request){

     $pay = new  Payment();
     $pay->user_id = Auth::user()->id;
     $pay->price = $request->amount;
     $pay->name_of_job = $request->job;
     $pay->number_of_job = $request->number;
     $pay->week = $request->week;
     $pay->verification = $request->message;
     $pay->ReferenceCode = $request->code;
     $pay->save();
   }

   public function money ($ref){
    $sercrtKey = "sk_test_8a40b954383a29bc20a711400387d2c3205478f9";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.paystack.co/transaction/verify/$ref",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $sercrtKey",
        "Cache-Control: no-cache",
      ),
    ));

    $response = curl_exec($curl);
    return $response;

    $err = curl_error($curl);
    curl_close($curl);

   }

   public static function lastofus($arr){
   return $arr;
   }
}

