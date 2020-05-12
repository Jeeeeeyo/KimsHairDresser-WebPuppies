@extends('layouts._layout')

@section('content')
<header style="height: 30px;"></header>
<div class="container" style="background-color: #ffffff;margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-12" style="margin: 10px;">
                <h3 style="color: rgb(0,0,0);">Forms</h3>
            </div>
            <div class="col-md-12" style="margin: 10px;">
                <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th> 
                
                <th>Name</th>
                <th>Created By</th>
                <th>Link</th> 
                <th>Date Created</th>    
                <th>View Responses</th>    
            </tr>
        </thead>
    </table> 
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
 
$(document).ready(function() {
    $('#example').DataTable( {
      "ajax": {
          "url": "{{route('form.getall')}}",
          "type": "GET",
          "dataSrc": ""
      },
      columns: [
            { data: "id" },            
            { data: "form_name" },
            { data: "user_id" },
            { data: "description",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="' + data + '">' + data + '</a>';
            }

            return data; }},  
            { data: "created_at" },
            { data: "description",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="/form/view_responses/' + row.id + '">View Responses</a>';
            }

            return data; }} 
        ],
    } );
} );
</script>  

<!-- //https://formbuilder.online/docs/formBuilder/options/formData/ -->
@endsection