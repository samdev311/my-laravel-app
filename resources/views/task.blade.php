<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
.header{
    width: 100%;
    height: 17vh;
    background-color:rgb(57, 73, 87);
    position: fixed;

}
.header a{
font-family: Arial, Helvetica, sans-serif;
margin-top:12px;
margin-left:0vh;
}
.link a:hover{
    background-color: white;
    color:black;
}
.link{
    width: 40%;
    height: 10vh;
    background-color: :rgb(57, 73, 87);
position: absolute;
left: 120vh;
top:30px;

}.link a{
    font-size: 25px;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    padding: 10px 7px;

}
.link button{
    width: 10vh;
    height: 30px;
    border: 2px gainsboro solid;
    border-radius: 4px;
    background-color: transparent;
    color: white;
}
.link .hvr:hover{
    background-color: transparent;
    

}
.main{
    width: 100%;
    height: 80vh;
    background-color: rgb(61, 126, 130);
    
}
.main .menu{
    width: 25%;
    height: 63vh;
    background-color:black;
    position: fixed;
    margin-top: 17vh;
}
.menu h1{
    color:rgb(243, 247, 250);
    text-align: center;
    text-decoration: none;
}
.main img{
    height: 85vh;
    width: 100%;
    opacity: 20px black;
}
.header img{
    width: 40%;
    width: 15vh;
    margin-top: -32px;
    margin-left: 19px;
}.header h1{
    margin-left: 50vh;
    margin-top: 20px;
    color: white;
}
.par{
    width: 20%;
    height: 15vh;
    background-color: transparent;
    margin-left: 70vh;
    margin-top: -36vh;
}.par p{
    font-size: 40px;
    color: white;
}
.organ{
    width: 100%;
    height: 70vh;
    background-color: transparent[];
    display:inline-flex;
    margin-top: 159px;
   
}
.ono{
    margin-top: 60px;
    width: 20%;
    height: 50vh;
    background-color: rgb(18, 21, 21);
    margin-left: 8vh;

}
.ono img{
    width: 100%;
    height: 30vh;
}
.ono p{
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    margin-top: 15px;

}
.ono button{
    margin-top:23px;
    margin-left: 80px;
    width: 10vh;
    height: 4vh;
    border:3px gainsboro solid;
    border-radius:4px;
}
.organ2{
    width: 100%;
    height: 70vh;
    background-color: transparent;
    display: inline-flex;
}.or{
    margin-top: 60px;
    width: 20%;
    height: 50vh;
    background-color: rgb(18, 21, 21);
    margin-left: 8vh;
}
.or img{
    width: 100%;
    height: 30vh;
}
.or p{
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    margin-top: 15px;
}
.or button{
    margin-top:23px;
    margin-left: 80px;
    width: 10vh;
    height: 4vh;
    border:3px gainsboro solid;
    border-radius:4px;
}
.footer{
    width: 100%;
    height: 40vh;
    background-color: darkgray;
    margin-top: 150vh;
    display: inline-flex;
}
.classic{
    width: 20%;
    height:30vh;
    background-color: transparent;
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
<div class="header">
    <h1>Heart fund platform</h1>
    <img src="{{asset('images/log1.png')}}" alt="">
    <div class="link">
<a href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/service">Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/donate">Donate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="/login"><button class="hvr">Login</button></a>&nbsp;&nbsp;&nbsp;<a href="/signup"><button class="hvr">Sign up</button></a>

</div>
</div>
<div class="main">
    
    <img src="{{ asset('images/poor.jpg') }}" alt="Food Image">

    <div class="par"><p>Join the world’s families to change the story of poverty.</p></div>
    <div class="organ">
<div class="ono"><img src="{{asset('images/chirld1.jpg')}}" alt=""><p>South sudan chirldren</p><a href="/donate"><button>Donate now</button></a></div><div class="ono"><img src="{{asset('images/chirld2.jpg')}}" alt=""><p>Somalia chirldren</p><a href="/donate"><button>Donate now</button></a>
</div><div class="ono"><img src="{{asset('images/chirld3.jpg')}}" alt=""><p>Burkinafaso chirldren</p><a href="/donate"><button>Donate now</button></a></div><div class="ono"><img src="{{asset('images/chirld4.jpg')}}" alt=""><p>Namibia chirldren</p><a href="/donate"><button>Donate now</button></a></div>

    </div>
    <div class="organ2">
        <div class="or"><img src="{{asset('images/chirld7.jpg')}}" alt=""><p>South sudan chirldren</p><a href="/donate"><button>Donate now</button></a></div><div class="or"><img src="{{asset('images/chirld8.jpg')}}" alt=""><p>South sudan chirldren</p><a href="/donate"><button>Donate now</button></a></div>
        <div class="or"><img src="{{asset('images/chrld6.jpg')}}" alt=""><p>South sudan chirldren</p><a href="/donate"><button>Donate now</button></a></div><div class="or"><img src="{{asset('images/chirld7.jpg')}}" alt=""><p>South sudan chirldren</p><a href="/donate"><button>Donate now</button></a></div>
    </div>
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