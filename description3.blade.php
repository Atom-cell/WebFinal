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

        <div class="container" style=" text-align:center; font-size:20px;width:30%; padding:20px; color:black">
            <?php
                    if (empty($msg)){}
                    else{echo $msg; } 
            ?>
        </div>

        <div class="container" >
            <div class="row">
                @foreach($Record as $rcd)
                <div class="col-12 col-sm-6">
                    <img  src="/{{$rcd->picture}}" class="img-fluid" alt="" class="hero-img" />
                </div>
                <div class="col-12 col-sm-6 info" >
                    <h1 class="name">{{$rcd->name}}</h1>
                    <h4 class="price">Rs.{{$rcd->price}}</h4>
                    <label for="">Size:</label>
                    <br>

                    <form action="/addToCart/{{$rcd->id}}" method="POST">
                        @csrf
                        <input type="radio" id="small" name="size" value="9" required>
                        <label for="9">9</label><br>
                        <input type="radio" id="medium" name="size" value="10" required>
                        <label for="10">10</label><br>
                        <input type="radio" id="large" name="size" value="11" required>
                        <label for="11">11</label><br>
                        <input type="radio" id="xlarge" name="size" value="12" required>
                        <label for="12">12</label>
                        
                        <br><br>
                        <label for="quantity">Quantity</label>
                        <input type="number" value="1" min="1" name='quantity' id="qty" required>
                        <br><br>
                        <button class="btn btn-lg btn-block" id="cartBtn" onclick="cartAdd({{$rcd->quantity}})">Add to cart</button>

                    </form>
                    {{-- onclick="cartAdd({{$rcd->quantity}})" --}}

                    <p><b>Composition & Care:</b></p>
                    <p>
                        {{$rcd->details}} <br>
     
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        <script>
            
            // var qty=localStorage.getItem('qty');
            // document.getElementById('cartNum').innerHTML=qty;

            function cartAdd(quantity)
            {
                var a = document.getElementById("qty").value;
                var b = parseInt(a);
                if(quantity>a){

                    // const element = document.querySelector('form');
                    // element.addEventListener('submit', event => {
                    // event.returnValue = true;
                    // var qty=document.getElementById("cartNum").innerHTML;
                    // if(qty==""){
                    //     qty=0;
                    //     var c= parseInt(qty);
                    //     c+=b;
                    //     qty=c;
                    // }
                    // else{
                    //     var c= parseInt(qty);
                    //     c+=b;
                    //     qty=c;
                        
                    // }

                    // document.getElementById("cartNum").innerHTML=qty;
                    // localStorage.setItem('qty', qty);
                    // alert(qty);
                }
                else{
                    alert("UNavailable");
                    const element = document.querySelector('form');
                    element.addEventListener('submit', event => {
                    event.preventDefault();

                    location.reload();
                    });
                }
            }








            // function cartAdd(){
                // var qty=document.getElementById("cartNum").innerHTML;
            //     if(qty==""){
            //         qty=0;
            //         qty++;
            //     }
            //     else{
            //         qty++;
                    
            //     }

            //     document.getElementById("cartNum").innerHTML=qty;
            //     localStorage.setItem('qty', qty);
            // }

        </script>


    </body>
</html>