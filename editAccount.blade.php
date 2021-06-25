<html>
    <head>
        <title>
            Khareed Lo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/css/cart.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <li><button onclick="window.location.href='cart.html'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <span id=cartNum></span>
                    <!-- <button >asasas</button> -->
                    
                </ul>
                </ul>

            </div>
            </nav>
        </div>

        <div class="container-fluid">
            <h3 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px"><b>MY ACCOUNT</b></h3>
            <h5 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px">Edit Shipping Details</h5>            
            <hr   style="border-width: 3px; border-color:black">
            </div>

            <div class="container">
                <form action="/editUserAccount" method="POST">
                    @csrf
                    <label for="address">Address</label> 
                    <input type="text" name="address" maxlength="100" size="30" value='{{$Record[0]->address}}'><br><br>
    
                    <label for="city">City</label>
                    <input type="text" name="city" value={{$Record[0]->city}}><br><br>
    
                    <label for="post_code">Postal Code</label>
                    <input type="text" name="zip" value={{$Record[0]->post_code}}><br><br>
    
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" value={{$Record[0]->phone}}>

                    <input type="submit" class="btn btn-primary btn-block" style="background-color: black;margin-top=20px;" value="submit">
                        {{-- <p style=" padding-top: 10px"></p>
                          <a href="" type="submit" class="btn btn-primary btn-block" style="background-color: black">SUBMIT</a> --}}

    
    
                </form>

            </div>
            


            <div class=" container-fluid">
                <hr   style="border-width: 5px; border-color:black">
            </div>


        








        
    </body>
</html>