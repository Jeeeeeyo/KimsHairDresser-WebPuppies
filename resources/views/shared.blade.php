 @extends('layouts._layout')
 
@section('content') 
 
<div class="container" style="background-color: #ffffff;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-12" style="margin: 10px;">
            <h3 style="color: rgb(0,0,0);">{{$form_name}}</h3>
        </div>
        <div class="col-md-12" style="margin: 10px;">
        <div class="form-group"><label style="color: #000000;">Customer Name&nbsp;</label>
            <input class="border-dark form-control" id="name_respondent" type="text" required>
        </div> 
    </div>a
        <div class="col-md-12 col-lg-12" style="margin: 10px;">
            <div class="table-responsive">
                <form id="fb-render">
                    



                </form>
                <button type="button" id="get-user-data">Get Updated formData</button>
            </div>
        </div>
    </div>



    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
@endsection
@section('scripts')
<script>  
 var formData = '@json($form_)';
 var fbOptions = {formData};
 
 
setTimeout(() => {
   var frInstance = $('#fb-render').formRender(fbOptions);
  }, 2000);  
const getUserDataBtn = document.getElementById("get-user-data");
const fbRender = document.getElementById("fb-render");
jQuery(function($) { 
  getUserDataBtn.addEventListener(
    "click",
    () => {
      console.log(window.JSON.stringify($(fbRender).formRender("userData")));
    },
    false
  );
});












</script>  
 
@endsection