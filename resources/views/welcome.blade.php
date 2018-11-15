<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <!-- <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link href="{{url('css/app.css')}}" rel="stylesheet">


  </head>
  <body>
   <div class="container">
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">@lang('home.home_menu') <span class="sr-only">(current)</span></a></li>
        <li><a href="#">@lang('home.about_menu')</a></li>
        <li><a href="#">@lang('home.contact_menu')</a></li>
     
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="locale/en"><img src="{{asset('images/en.png')}}" style="width:30px; height:20px;" alt="England">England</a></li>
        <li><a href="locale/ba"><img src="{{asset('images/ba.png')}}" style="width:30px; height:20px;" alt="Bangla">Bangladesh</a></li>
        <li><a href="locale/ja"><img src="{{asset('images/ja.png')}}" style="width:30px; height:20px;" alt="Japanese">Japanese</a></li>
        <li><a href="locale/ch"><img src="{{asset('images/ch.jpg')}}" style="width:30px; height:20px;" alt="China">China</a></li>
        <li><a href="locale/in"><img src="{{asset('images/in.png')}}" style="width:30px; height:20px;" alt="India">India</a></li>
     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   </div>

   <div class="row" style="margin-top:50px;">
   <div class="col-md-12 col-lg-8 text-center" >
       <h1>@lang('home.message') </h1>
   </div>
       
   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
  </body>
</html>