<html>
    <head>
      <title>
        Khareed Lo
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link rel="stylesheet" href="{{asset('/css/description.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <style>
      
     .img-wrapper {
      position: relative;
    }
    
    .img-wrapper img {
      width: 100%;
      height: 200%;
    }
    
    .img-wrapper .overlay {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    
    .img-wrapper h2 {
      margin: 0 0 .5em;
    }
    
    #text {
      z-index: 100;
      position: absolute;
      color: white;
      font-size: 24px;
      font-weight: bold;
      left: 150px;
      top: 350px;
    }
      </style>
    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-sm ">
                <a class="navbar-brand" href="main.html"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <h2 class="navbar-brand">Khareed Lo</h2>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    <li><a class="nav-link " href="male.html" style="color:black;">MALE</a></li>
                    <li><a class="nav-link " href="female.html" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    <li><button onclick="window.location.href='login.html'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li><button onclick="window.location.href='search.html'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li><button onclick="window.location.href='/cart'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <span id=cartNum></span>
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>

        <div class="container-fluid">
            <h3 style="text-align:center; text-decoration: underline; text-transform: uppercase;">{{$gender}}</h3>
        </div>
        <br><br>

        <div class="img-wrapper">
          <a href ="/main/{{$gender}}/{{"shirt"}}" > <img src="/images/shirt3.jpg" class="img-responsive" style="object-fit: fill; height:auto;"/></a>
          
          <div class="carousel-caption">
           <h1 style ="color:#6b7082"><em>Shirts.<br> New Arrival </em></h1>
           </div>
        
        </div>
        <div class="img-wrapper">
          <a href="/main/{{$gender}}/{{"pant"}}"> <img src="/images/pant3.jpg" style="object-fit: contain; height:auto; " /></a>
           <div class="carousel-caption">
           <h1 style ="color:#3f57ab"><em>Pants. <br> Wear a Brand. </em></h1>
           </div>
        </div>
        <div class="img-wrapper">
          <a href="/main/{{$gender}}/{{"shoes"}}"> <img src="/images/shoes1.jpg" style="object-fit: contain; height:auto;"/></a>
           <div class="carousel-caption">
           <h1 style ="color:#332f18"><em>Shoes. <br> Get Comfortable!</em></h1>
           </div>
        </div>
        
        <br>

        {{-- <button class="btn btn-block"><a href="/main/{{$gender}}/{{"shirt"}}">SHIRTS</a></button>
        <button class="btn btn-block"><a href="/main/{{$gender}}/{{"pant"}}">PANTS</a></button>
        <button class="btn btn-block"><a href="/main/{{$gender}}/{{"shoes"}}">SHOES</a></button> --}}
        


        <br>

        
    
        <br>
        <footer class="page-footer font-small pt-4  text-dark" style="background-color:#f2f0f0">
    
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

    <script>
        var qty=localStorage.getItem('qty');
        document.getElementById('cartNum').innerHTML=qty;
    </script>


    </body>
</html>