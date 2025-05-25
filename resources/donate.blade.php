<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
.type{
    width: 100%;
    height:25vh;
    background-color: rgb(57,73,87);
    position: fixed;
    margin-top: -40vh;
}.type img{
    width: 43%;
    width: 17vh;
    margin-top: -19vh;
    margin-left: 19px;
}
.form{
    width: 40%;
   margin-right: 40vh;
    height: 50vh;
 
    background-color: transparent;
    margin-left: 0vh;
    margin-top: 40vh;
   
    
     
}
.form form{
    align-content: center;
    margin-left:15vh;
}
.form label{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 100;
    font-size: 20px;

}.form form input{
    width: 70%;
    height: 4vh;
    border:2px gray solid;
    border-radius: 9px;
}
.form form button{
    width: 30%;
    height: 40px;
    border: 2px gray solid;
    border-radius:5px;
}
.form form button:hover{
    padding: 10px 7px;
    color: black;
    background-color: rgb(57,73,87);
}.type .li{
  width: 30%;
  height: 5vh;
  background-color: rgb(57,73,87);
  margin-left: 150vh;
  margin-top:-8.5vh;
}
.type .li a{
    font-family: Arial, Helvetica, sans-serif;
    font-size:27px;
    text-decoration: none;
    color: white;
    margin-top: 12vh;
}
.type .li button{
    width: 10vh;
    height: 30px;
    color: white;
    border: 3px white solid;
    border-radius:5px;
    font-weight: 300;
    margin-left: 27vh;
    margin-top: -20vh;
    background: none;
}.type h1{
    color:white;
    text-align: center;
    margin-top:10vh;
}.container{
    width: 100%;
    height: 70vh;
    background-color: transparent;
    
    margin-top: 0vh;
}
    .conatiner .form{
        width: 40%;
    height: 50vh;
    background-color: transparent;
    margin-left: 60vh;
    margin-top: 40vh;
    

    }
.container .form img{
    width: 100%;
    height: 20vh;


}.go{
    margin-left: 120vh;
    margin-top: -90vh;
    width: 50%;
    
}
.footer{
    width: 100%;
    height: 40vh;
    background-color: darkgray;
    margin-top: 0vh;
    display: inline-flex;
}
.classic{
    width: 20%;
    height:30vh;
    background-color: none;
    margin-left: 20vh;
    margin-top: 6vh;

}.classic h1{
    text-align: center; 
}
.classic p{
    text-align: center;
    margin-top:0;
}
.classic img{
    width: 14%;
    height: 6vh;
    margin-left: 12vh;
}
    </style>

</head>
<body>
 <div class="type"><h1>Heart fund platform</h1><div class="li">
<a href="/task">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/service">service</a>&nbsp;<form action="/logout" method="POST">
    @csrf
    <button>logout</button></form></div>
    <img src="{{asset('images/log1.png')}}" alt="">
 </div>
       

<div class="container">
<div class="form">
<form action="/payment" method="post">
    @csrf
    <h1>Pay your donation with the heart fund</h1>
    <label for="firstname">Fastname</label><br>
    <input type="text" name="firstname"><br>
    <label for="lastname">Lastname</label><br>
    <input type="text" name="lastname"><br>
    <label for="coming_from">Coming_from</label><br>
    <input type="text" name="coming_from"><br>
    <label for="amount_to_pay">amount to pay</label><br>
    <input type="text" name="amount_to_pay"><br><br>
    <button type="submit" name="submit">Donate now</button>&nbsp;&nbsp;&nbsp;<button>Cancel</button>
</form>
</div><div class="go"><div class="form"><img src="{{asset('images/soma.png')}}" alt=""><br><h2>We are here to help every one</h2><br><p>Donation is the act of humanity
    that is why is the responsabilities of every one that are in the world the chirld of somalia and south sudan are most child that need the imediately support</p></div></div>
</div>

<div class="footer">
    <div class="classic">
    <h1>Contact us</h1><img src="{{asset('images/telegram.png')}}" alt=""><br>
    
    <img src="{{asset('images/watsapp.png')}}" alt="">
    </div>
    
    <div class="classic">
    <h1>Usefull link</h1><img src="{{asset('images/facebook.png')}}" alt=""><br>
    <br>
    <img src="{{asset('images/ig.png')}}" alt="">
    
    </div>
    <div class="classic">
    <h1>Connect with us</h1><img src="{{asset('images/git.png')}}" alt=""><br>
    
    <img src="{{asset('images/google.png')}}" alt="">
    </div>
    
    
    </div>
</body>
</html>