
<html>
    <head>
        <title>
            Khareed Lo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-sm ">
                <a class="navbar-brand" href="main.html"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <a class="nav-link " href="main.html" style="color:black;"><h2 class="navbar-brand">Khareed Lo</h2></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    <li><a class="nav-link " href="/productPage/{{"male"}}" style="color:black;">MALE</a></li>
                    <li><a class="nav-link " href="/productPage/{{"female"}}" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    <li><button onclick="window.location.href='login'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    
                    <li><button onclick="window.location.href='search.html'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    
                    <li><button onclick="window.location.href='cart'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <span id=cartNum></span>
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>

        <div class="container" style="text-align:center;">
            <h2>Thank you for Shopping with us!</h2>
        </div>
        <div class="container" style=";">
            <button type="" class="btn btn-dark btn-block" onclick="window.location.href='/home'" style="background-color:black; margin-top: 10px; width:30%;height:10%;margin:auto;">Continue Shopping</button>
        </div>

        

        
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
    
      <div class="footer-copyright text-center py-3" >?? 2021 Copyright:
        <a href="https://Khareed-Lo.com">Khareed-Lo.com</a>
      </div>
    
    </footer>

    
    <script>
        function login(){
            window.location = 'login.html';
        }

        var qty=localStorage.getItem('qty');
        document.getElementById('cartNum').innerHTML=qty;
     </script>
        


        
        

        
    
        
    </body>
</html>


