<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Forms;
use App\CustomerResponse;

class FormController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
}
    // GET ALL FORMS IN DB 
    public function GetAll()
    {
      $forms = Forms::all();
      return $forms->toArray();
    }
    public function index()
    {
      return view('getall');
    }
    // GET SINGLE FORM FROM DB BY ID 
    public function Get($id)
    {
      $forms = Forms::where('id', $id);
      return $forms->first();
    }
    // STORE FORM TO DB
    public function Store(Request $request)
    {
      $forms = new Forms;
      $forms->user_id = $request->user_id;
      $forms->form_name = $request->form_name;
      $forms->form_json = $request->form_json;
      $forms->visibility = $request->visibility;
      $forms->description = "";
      $forms->save();

      $this->CreateLink($forms);

      return response('OK', 200)->header('Content-Type', 'text/plain');
    }
     // STORE FORM TO DB
     public function StoreFormData(Request $request)
     {
       $forms = new CustomerResponse;
       $forms->user_id = $request->user_id;
       $forms->form_name = $request->form_name;
       $forms->form_id = $request->form_id;
       $forms->form_json = $request->form_json;
       $forms->save();
 
       return response('OK', 200)->header('Content-Type', 'text/plain');
     }
    public function CreateLink($forms)
    {
      // $forms = Forms::where('id', $request->id);
      $forms->description = 'form/shared/' . $forms->id;
      $forms->save();
      return true;
    }
    public function Shared($id)
    {
      $forms = $this->Get($id);
        
      $form_ = json_decode($forms->form_json);
      return view('shared',compact('form_'),compact('forms'));
    }
    public function view_responses($id)
    {
      return view('allresponse',compact('id'));
    }
    public function GetResponse($id){        
      $forms = Forms::where('id', $id)->with('CustomerResponse')->first();
      $customerResponse = $forms->CustomerResponse;
      return $customerResponse->toArray();
    }
    public function ViewResponseForm($id)
    {
      $forms_response = CustomerResponse::where('id', $id)->first();

      $forms = $this->Get($forms_response->form_id);
      $form_ = json_decode($forms_response->form_json);
      return view('shared',compact('form_'),compact('forms'));
    }
    





}
