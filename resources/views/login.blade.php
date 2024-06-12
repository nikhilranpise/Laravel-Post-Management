<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('Content')}}/images/log.png">
    <title>Admin - Log In </title>
    <link href="{{asset ('Content/css/Login/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{asset('Content/css/Login/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Content/css/Login/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #eef9ff !important">
    <div class="content">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8 mt-5">
                            <div>
                                <p class="mb-4">Sign in to continue to Posts Admin.</p>
                            </div>
                        

                            @if(Session::has('success'))
                            <div id="flashdivs" class="sucess_msg text-success" style="text-align: center;">{{ session('success') }}
                            </div>
                            @elseif(Session::has('error'))
                            <div id="flashdivs" class="sucess_msg text-danger" style="text-align: center;">{{ session('error') }}
                            </div>
                            <br> 
                            @endif

                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <div class="form-group first">
                                    <input type="text" class="form-control" name="username" id="textbox1" autocomplete="off" placeholder="Username">
                                    <span class="text-danger" >@error('username'){{ $message }}@enderror</span>
                                </div><br />
                                <div class="form-group last mb-4">
                                    <input type="password" class="form-control" name="password" id="textbox2" placeholder="Password" autocomplete="off">
                                    <span class="text-danger" >@error('password'){{ $message }}@enderror</span>
                                </div>
                                <input type="submit" value="Log In" id="btnLogin" class="btn btn-block btn-grad">

                                
                            </form>
                            <br>
                            <a href="{{ url('/register') }}">Register as Admin</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="{{asset('Content/css/Login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Content/css/Login/js/main.js')}}"></script>
    <script src="{{asset('Content/css/Login/js/popper.min.js')}}"></script>
    <script>  
    setTimeout(function() { $('#flashdivs').hide('slow'); }, 4000); 
    </script>
</body>
</html>