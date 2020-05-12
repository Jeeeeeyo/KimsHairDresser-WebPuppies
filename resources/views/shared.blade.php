 @extends('layouts._layout')
 
@section('content') 
 
<div class="container" style="background-color: #ffffff;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-12" style="margin: 10px;">
            <h3 style="color: rgb(0,0,0);">{{$forms->form_name}}</h3>
        </div>
        <div class="col-md-12" style="margin: 10px;">
        <div class="form-group"><label style="color: #000000;">Customer Name&nbsp;</label>
            <input class="border-dark form-control" id="name_respondent" type="text" required>
        </div> 
    </div>
        <div class="col-md-12 col-lg-12" style="margin: 10px;">
            <div class="table-responsive">
                <form id="fb-render">
                    



                </form>
                <button type="button" id="get-user-data">Submit Form</button>
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
jQuery(function ($) {
    getUserDataBtn.addEventListener(
        "click",
        () => {
            $.post("{{ route('form.data.store') }}", {
                    user_id: '{{ Auth::user()->id }}',
                    form_id: '{{$forms->id}}',
                    form_name: '{{$forms->form_name}}',
                    form_json: JSON.stringify($(fbRender).formRender("userData")),
                    _token: '{{ csrf_token() }}'
                },
                function () {
                    //     Swal.fire(
                    //     'Success!',
                    //     'Form has been saved!',
                    //     'success',
                    //     confirmButtonText:
                    // '<a href="/form/getall"></a> Great!',
                    //     )

                    Swal.fire({
                        title: 'Form has been submitted!',
                        icon: 'success',
                        confirmButtonText: '<a href="/forms" style="text-decoration: none;color:white;"> Great!</a>',
                    })
                });

        },
        false
    );
});












</script>  
 
@endsection