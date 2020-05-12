<nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="{{ route('welcome') }}">UR HD</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">download</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">contact</a></li>
                    @if (Route::has('register'))
                            
                          <li class="nav-item nav-link js-scroll-trigger" role="presentation">
                        
                    
                    
                    <button class="btn btn-primary" type="button"  ><a href="{{ route('register') }}">SIGN UP&nbsp;</a></button></li>    @endif 
                    @if (Route::has('login'))
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation">
                        
                    
                    
                    <button class="btn btn-primary" type="button" ><a class="js-scroll-trigger" href="{{ route('login') }}">LOG IN&nbsp;&nbsp;</a></button></li> @endif 
                   
             </ul>
            </div>
        </div>
    </nav>

    