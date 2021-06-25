<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Khareed-Lo/checkout</title>
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
		
  <style>
	.col-12{
	padding-bottom: 8px
	}
	
.ptag{  
    opacity: 0;
    height: 0;
	margin: 0 10px;
}

.valid{
    border-color: green;
}
.invalid{
    border-color: red;
}

.invalid + .ptag{
    font-weight: bold;
    color: red;
    opacity: 1;
	height: auto;
}

form{
    margin: 10px auto;
}
input{
    padding: 5px 12px;
    width: 100%;
}

#chk{
	width: 3%;

}


  
  </style>
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
                    
                </ul>

            </div>
            </nav>
        </div>
	
	
	
	<div class="container">
	<div class="row">
	<div class ="col-12 col-sm-7 mr-5">
	<p style="font-size: 25px"> Contact Information </p>
	<span> {{$Record[0]->fname}} {{$Record[0]->lname}}(khareedlo@gmail.com)</span><br><br>
	<a href="logout" style="color:black"><button class="btn" style="background-color: black; color: white;">LOG OUT</button></a><br>
	
	<br><br>
	<h3>Shipping Address</h3>

	<hr>
    <h4>We only Operate on Cash on Delivery (COD)</h4>
	
	<form action="/checkout" method="post">
        @csrf
      <div class="form-group">
      <div class="row">

      </div>
      </div>
      
      <div class="form-group">
        <label for="address">Address</label>

      <input type="text" name="address" class="form-control" value="{{$Record[0]->address}}"  onkeyup="validate(this)" required>
      <p class="ptag">Address in proper format i.e. without special characters</p>
      
      </div>
      
    
      <div class="form-group">
        <label for="city">City</label>
      <input type="text" name="city" class="form-control" value="{{$Record[0]->city}}"  onkeyup="validate(this)"></input>
      <p class="ptag">Only Alphabets and no space in start.</p>
      
      </div>
      
      
      <div class="form-group">
      <div class="row">
      <div class="col-12 col-sm-6">
        <label for="zip">Postal Code</label>
        <input type="text" class="form-control" id="ZIP" name="zip" value="{{$Record[0]->post_code}}"  required>
      </div>
      <div class="col-12 col-sm-6">
        <input type="hidden" id="hide" name="hide_total" value="">
      </div>

      </div>
      </div>
      
      <div class="form-group">
        <label for="Telephone">Phone#</label>
      <input type="tel" name="telephone" class="form-control" value="{{$Record[0]->phone}}" onkeyup="validate(this)"></input>
      <p class="ptag">Telephone must be a valid number</p>
      
      </div>

      <br>
      <div>
      <a href="cart"  style="color:black; "><i class="fa fa-chevron-left" aria-hidden="true"></i> Return to cart</a>
      <span class="float-right text-center ">
            <button type="submit" class="btn btn-dark btn-block" style="background-color:black;" onclick="checkZIP()">SEND ME MY CLOTHES</button>
      </span>
          </div>

	</form>
	
	</div>
	
	
	<div class="col-12 col-sm-4 bg-light rounded shadow">
	<div class="container" style="padding-top:10%">
	<img class="img-responsive" src="khareed2.png" alt="khareedlo.logo" style="padding-left:8px">	

	<hr>
	<p > Subtotal <span class="float-right" style="font-size:90%"> Rs. <span id="sub"></span></span></p>
	
	<hr>
	<p> Total <span class="float-right" >PKR <b style="font-size:120%"></b><b><span id="total" style="font-size:30px"></span></b></span></p>

	
	</div>
	</div>
	
	
	
	
	</div>
	</div>
	<br>
	
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


<script>

    var qty=localStorage.getItem('total');
    document.getElementById('sub').innerHTML=qty;
    document.getElementById('total').innerHTML=qty;
    document.getElementById('hide').setAttribute('value', qty);


const patterns = {
		Fname: /^[a-z\\s]{3,12}$/i,
		Lname: /^[a-z\\s]{3,12}$/i,
        telephone: /^[0-9]{5,15}$/,
        email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};

function validate(field){
	console.log(field.value);
    if(patterns[field.name].test(field.value)){
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
}

function checkZIP() 
{
      var constraints = {
      pak : [ '^(PK-)?\\d{5}$', "Pakistan ZIPs must have exactly 5 digits: e.g. PK-47040 or 47040" ],
      ind : [ '^(IN-)?\\d{6}$' , "India ZIPs must have exactly 6 digits: e.g. IN-560011 or 560011" ],
      usa : [ '^(US-)?\\d{5}$' , "United States ZIPs must have exactly 5 digits: e.g. US-35801 or 35801" ],
      };
      var country = document.getElementById("Country").value;
      var ZIPField = document.getElementById("ZIP");
      var constraint = new RegExp(constraints[country][0], "");
      console.log(constraint);
      if (constraint.test(ZIPField.value)) {
      ZIPField.setCustomValidity("");
      }
      else {
      ZIPField.setCustomValidity(constraints[country][1]);
      }
}



</script>
	
	
	
	
	
</body>
</html>
	
	
	