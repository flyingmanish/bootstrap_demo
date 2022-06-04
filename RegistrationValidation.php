<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        

        return [
                    'firstname' =>[
                        'required','min:3'
                    ],
                    'lastname' =>[
                        'required',
                    ],
                  
                    'email'=>[
                        'required','email:rfc','regex:/(.+)@(.+)\.(.+)/i'
                    ],
                    'password'=> [
                        'required',
                        'min:6',
                        'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/'

                    ],
                    'confirmpassword' =>[
                        'required','same:password'
                    ],    
                    'mobileno' =>[
                        'required','min:10','regex:/^(7|8|9){1}[0-9]{9}$/', 

                    ],
                    'address' =>[

                        'required',
                    ],
                    'age' => [
                        'required','before: -18 year'
                    ]

                   
                       
                ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'firstname.required' => 'hello',
            'lastname.required' => 'A message ',
            'mobileno.required' => 'Mobile number required ',
            'mobileno.min' => 'Mobile number minimum 10 digit ',
            'mobileno.regex' => 'Mobile number should be start with 7 ,8 or 9',
            'address.required' => 'Address compulsory',
            'age.before' => 'Age minimum 18+',
            'password.regex' => 'Special charecter must',
            'password.min' => 'MInimum 6 letter',
            'confirmpassword.same' => 'password not match',

           
        ];
    }
}
