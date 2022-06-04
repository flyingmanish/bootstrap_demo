<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\RegistrationValidation;
use App\Registration;
use PDF;
use App\Otp;

// use Illuminate\Support\Facades\Mail;


// use Mail;
// use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function storeData(Request $request)
    {
    	// dd($request->all());
    	// $validator = Validator::make($request->all(), [
    	// 	'firstname' => 'required'
    	// ]);
    	$form=$request->all();
    	$Registrationdata = new Registration;
		$Registrationdata->firstname = $form['firstname'];
		$Registrationdata->lastname = $form['lastname'];
		$Registrationdata->email = $form['email'];
		$Registrationdata->address = $form['address'];
		$Registrationdata->mobileno = $form['mobileno'];
		$Registrationdata->age = $form['age'];
		$Registrationdata->password = $form['password'];
		$Registrationdata->save();
		// $data = [
  //           'firstname' => $form['firstname'],
  //           'lastname' => $form['lastname'],
  //           'email' => $form['email'],
  //           'address' => $form['address'],
  //           'mobileno' => $form['mobileno'],
  //           'age' => $form['age'],
  //       ];
          
  //       $pdf = PDF::loadView('mail', $data);

       $wordlist = Otp::where('mobileno', '=', $form['mobileno'])->get();
       $wordCount = $wordlist->count();
       if ($wordCount == "0") {
           $saveotp = new Otp;
           $saveotp->mobileno = $form['mobileno'];
           $saveotp->otp_number = rand(1000,9999);
           $saveotp->save();
           //echo "data save";
       }else{
          $res = Otp::where('mobileno',$form['mobileno'])->delete();
          $saveotp = new Otp;
          $saveotp->mobileno = $form['mobileno'];
          $saveotp->otp_number = rand(1000,9999);
          $saveotp->save();
       }
         // return $pdf->download('itsolutionstuff.pdf');
       return view('otp',['mobileno' => $form['mobileno']]);
       // return redirect('/otp')->with( ['mobileno' => $form['mobileno']] );
    }

    public function showdata(Request $request)
    {
    	$dataview = Registration::all();
    	// dd($data2);exit;
    	return view('view', compact('dataview'));

    }

    public function delete(Request $request, $id)
    {
    	$id = Registration::find($id);
    	$id->delete();
    	return back()->withStatus('Delete Data'); 

    }

    public function edit(Request $request, $id)
    {
    	$editdata = Registration::find($id);
  		return view('edit', compact('editdata'));
    	// return back()->withStatus('Delete Data'); 

    }

    public function update(Request $request ,$id)
    {
    			$form=$request->all();
    			$updatedata = Registration::find($id);

    			$updatedata->firstname = $form['firstname'];
    			$updatedata->lastname = $form['lastname'];
    			$updatedata->email = $form['email'];
    			$updatedata->address = $form['address'];
    			$updatedata->mobileno = $form['mobileno'];
    			$updatedata->age = $form['age'];
    			$updatedata->save();
    			// print_r($updatedata);exit();
    			return redirect('/showdata');
    }

    public function otpverify(Request $request)
    {
        $form=$request->all();

       $wordlist = Otp::where('mobileno', '=', $form['mobileto'])->where('otp','=', $form['otp'])->get();
       $wordCount = $wordlist->count();
       print_r($wordCount);
    }


 
}
