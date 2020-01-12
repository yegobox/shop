<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use  \Webkul\Customer\Repositories\CustomerRepository;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $customerRepository;
    public function __construct(CustomerRepository $customerRepository)
     {
       $this->customerRepository = $customerRepository;
     }
    // $customerRepository  = new \Webkul\Customer\Repositories\CustomerRepository;
    public function edit($id){
            $user =  \Webkul\Customer\Models\Customer::find($id);
            if($user){
            $id= $user->id;
            }else{
            return response()->json(['message'=>'no users']);
            }
        
            $validator = Validator::make(request()->all(), [
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'email|unique:customers,email,'.$id,
            'password' => 'confirmed|min:6|required_with:oldpassword',
            'oldpassword' => 'required_with:password',
            'password_confirmation' => 'required_with:password',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()],422);
        }
    
        $data = collect(request()->input())->except('_token')->toArray();
    
    
        if (request()->get('oldpassword') != "" || request()->get('oldpassword') != null) {
        if(Hash::check(request()->get('oldpassword'), auth()->guard('customer')->user()->password)) {
            $data['password'] = bcrypt($data['password']);
        } else {
            return response()->json(['message'=>'password missmatch']);
        }
        } else {
        unset($data['password']);
        }
        $response = $this->customerRepository->update($data, $id);
        return response()->json(['data'=>$response]);
    }
}
