 
@extends('layouts._main')



@section('content')
   <header class="masthead" style="background-image:url('assets/img/hairdresser.jpg');">
       <div id="appView" class="intro-body">
           <div class="container">
               <div class="row">
                   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-5 mx-auto">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="card-title" style="color: rgb(2,2,2);">Login</h4>
                              
                                 <form method="POST" action="{{ route('login') }}">
  @csrf
                                   <div class="form-group">
                                       
                                   
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
                               <div class="form-group"> 
                                   <input id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
</div>
@if (Route::has('password.request'))
                               <div class="form-group">
                                   <a href="{{ route('password.request') }}">
                                       <p style="color: rgb(0,0,0);font-size: 12px;">Forgot Password?</p>
                                   </a>
                               </div>
                               @endif
                               <div class="form-group"><button class="btn btn-primary" type="submit">log in</button></div>
                               <div class="form-group">
                                   <p style="color: rgb(0,0,0);font-size: 12px;">Don't have an account?&nbsp;&nbsp;<a href="#">Sign Up&nbsp;</a></p>
                               </div>
  
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
@endsection

@section('scripts')
<!-- 
<script>
   var app = new Vue({
       el: '#appView',
       data: {
           message: 'Hello Vue!',
           todos: [
               {name: 'To do 1'},
               {name: 'To do 2'},
               {name: 'To do 3'}
       ]
       }
   })
</script> -->

@endsection
