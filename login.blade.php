<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Khareed-Lo/login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<link rel="stylesheet" href="{{asset('/css/main2.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
  <style></style>
</head>

<body>
<div class="container-fluid" id="con" >
            <nav class="navbar navbar-expand-sm ">
                <a  class="navbar-brand" href="main.html" class="atag"><img src="/images/khareedlo.png" height=100 width=100 alt=""></a>
                <a   class="nav-link " href="main.html" class="atag" style="color:black;"><h2 class="navbar-brand">Khareed Lo</h2></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    <li class="lst atag" ><a class="nav-link " href="male.html" style="color:black;"  >MALE</a></li>
                    <li class="lst atag" ><a class="nav-link " href="female.html" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    <li class="lst" ><button  class="slidebutton " onclick="window.location.href='login.html'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li class="lst" ><button class="slidebutton " onclick="window.location.href='search.html'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li class="lst" ><button class="slidebutton " onclick="window.location.href='cart.html'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>
	
	<div class="container-fluid">
	<h3 class="col-12 col-sm-12 offset-sm-1" ><b>LOG IN</b></h3>
	<hr   style="border-width: 5px; border-color:black">
	</div>
	<br>

  

  <div class="container" style=" text-align:center; margin-botton:20%; font-size:30px;width:50% ;background-color:red; color:black">
    <?php
            if (empty($error)){}
            else{echo $error; } 
    ?>
  </div>
	
	<div class="container" style="margin-top: 2%" >
        <div class="row">
			<div class="col-md-5 mx-auto" style="border-style: groove;">
			<div id="first" >
				<div class="myform form " >
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h4 style="padding-top:10px">I'M ALREADY A CLIENT!</h4>
							<hr>
						 </div>
					</div>
                          {{-- login/{{$pid}}" --}}
                   <form action="/login" method="post" name="login">
                       @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">EMAIL ADDRESS *</label>
                              <input type="email" name="email"  class="form-control" id="email" required >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">PASSWORD *</label>
                              <input type="password" name="password" id="password"  class="form-control" required >
                           </div>
                            <div class ="form-group">
                            <a href= "forgetPassword" style="color:blue"><b>Forgotten your password?</b></a> 
                            </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class="btn btn-dark btn-block" style="background-color:black">LOG IN</button>
                           </div>
                        </form>
						   
						   <div class="col-md-12 text-center ">
							<p style=" padding-top: 10px"> OR </p>
                              <a href="/signup" type="submit" class="btn btn-primary btn-block" >CREATE NEW ACCOUNT</a>
                           </div>
						   <br>

                    

				</div>
			</div>
			</div>
			</div>

			</div>

			<br><br>
			
			

	<footer class="page-footer font-small pt-4 text-dark" style="background-color:#f2f0f0">

  <div class="container">
  <div class="row">
  <div class="col-12 col-sm-6">

        <h5 class="text-uppercase">Footer Content</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

      </div>

  <div class="col-12 col-sm-3 offset-sm-3">
  <h4><em> Reach Us On: </em></h4>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href= "https://web.facebook.com/" class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook-official fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://twitter.com/?lang=en" class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://www.instagram.com/" class="btn-floating btn-gplus mx-1">
          <i class="fa fa-instagram fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://www.youtube.com/" class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-youtube-play fa-2x" style="color:black"> </i>
        </a>
      </li>
    </ul>
  </div>
  </div>
  </div>

  <div class="footer-copyright text-center py-3" >© 2021 Copyright:
    <a href="https://Khareed-Lo.com">Khareed-Lo.com</a>
  </div>

</footer>

</body>




</html>
