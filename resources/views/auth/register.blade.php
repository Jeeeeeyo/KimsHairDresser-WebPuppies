
  
 
@extends('layouts._main')



@section('content')
   <header class="masthead" style="background-image:url('assets/img/hairdresser.jpg');">
       <div id="appView" class="intro-body">
           <div class="container">
               <div class="row">
                   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-5 mx-auto">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="card-title" style="color: rgb(2,2,2);">Register</h4>
                              
                    
 
                               <form method="POST" action="{{ route('register') }}">                                   
                                 @csrf
                                    <div class="form-group">
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder="Firstname"  autofocus> 
                                    
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                                    <div class="form-group">  
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Lastname" autofocus>
                                     
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>


 


                                    <div class="form-group">                                        
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"value="{{ old('email') }}" required autocomplete="email"> 
                                    
                                    
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password')  is-invalid @enderror" name="password" required autocomplete="new-password">   
                                    

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
                                    <div class="form-group">  
                                        <input id="password-confirm" type="password" class="form-control"placeholder="Re enter Password"  name="password_confirmation" required autocomplete="new-password">                                    
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary" type="submit">Register</button></div>
                                </form>



                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
@endsection 

