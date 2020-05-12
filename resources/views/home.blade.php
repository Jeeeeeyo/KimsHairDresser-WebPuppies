


@extends('layouts._layout')
@section('style')
<style>
.btn.btn-primary.save-template{


    visibility:hidden;

}




</style>

@endsection
@section('content')
<header style="height: 30px;"></header>
<div id="app">


<div class="container" style="background-color: #ffffff;">
            <div class="row">
                <div class="col-md-12" style="margin: 10px;">

                   
                    <form id="submit_form">
                         <div class="form-row" style="margin-top: 20px;">
                            <div class="col">
                                <h5 style="color: rgb(0,0,0);">Create your form</h5>
                            </div>
                        </div>
                        <div class="form-group"><label style="color: #000000;">Form Title:&nbsp;</label>
                            <input class="border-dark form-control" id="form_title" type="text" required>
                        </div>  
                            <div class="form-group">
<div id="build-wrap"></div></div>



                </form>
                <div class="form-group">

                    <div class="saveDataWrap">
                        <button id="saveData" type="submit">SAVE FORM</button>
                      </div></div>
            </div>
        </div>
    </div>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
 
@endsection
@section('scripts')
<script>




  jQuery(($) => {
  const fbEditor = document.getElementById("build-wrap");
  const formBuilder = $(fbEditor).formBuilder();

  document.getElementById("saveData").addEventListener("click", () => {
    const result = formBuilder.actions.save();
     var isFormValid = $("#form_title").val();
     if (isFormValid != "") {
        $.post( "{{ route('form.store') }}", {
        user_id: '{{ Auth::user()->id }}', 
        form_json: result,
        visibility: "1",
        description: "5.32 am",
        form_name: document.getElementById('form_title').value,
        _token: '{{ csrf_token() }}'
    }, 
    function() {
    //     Swal.fire(
    //     'Success!',
    //     'Form has been saved!',
    //     'success',
    //     confirmButtonText:
    // '<a href="/form/getall"></a> Great!',
    //     )

Swal.fire({
    title: 'Form has been saved!',
    icon: 'success', 
    confirmButtonText:
    '<a href="/form/getall" style="text-decoration: none;color:white;"> Great!</a>',
})
    },);
     }
     else{alert('Please add a form title')}
     
    

   

  });
}); 
</script>  

<!-- //https://formbuilder.online/docs/formBuilder/options/formData/ -->
@endsection