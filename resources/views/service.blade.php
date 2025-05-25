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
.header{
    width: 100%;
    height: 17vh;
    background-color:rgb(57, 73, 87);
    position: fixed;
    margin-top: -20vh;

}
.header a{
font-family: Arial, Helvetica, sans-serif;
margin-top:12px;
margin-left:0vh;
}
.header h1{
    margin-left: 50vh;
    margin-top: 20px;
    color: white;
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

}
.link button{
    width: 10vh;
    height: 30px;
    border: 2px gainsboro solid;
    border-radius: 4px;
    margin-left: 60vh;
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
}.container{
    width: 100%;
    height: 40vh;
    background-color: none;
    
}.container .term{
    width: 80%;
    height: 70vh;
    background-color: none;
    margin-top:18vh;
    margin-left: 20vh;
}.container img{
    width: 50%;
}.container .pa{
width: 40%;
height: 50vh;
background-color: none;
margin-left:84vh;
margin-top:-52vh;
color: black;
}.pa p{
    font-size: 20px;
}.pa button{
    margin-left: 20vh;
    margin-top: 12vh;
    height: 40px;
    border:2px solid black;
    border-radius: 5px;
    background-color: none;
    width: 30%;
    font-family: Arial, Helvetica, sans-serif;

}
.pa button:hover{
padding: 10px 7px;
border-radius:5px;
background-color: rgb(57, 73, 87);
}
.footer{
    width: 100%;
    height: 40vh;
    background-color: darkgray;
    margin-top: 310vh;
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
    <div class="header">
        <h1 style="color: white">Heart fund platform</h1>
        <img src="{{asset('images/log1.png')}}" alt="">
        <div class="link">
    <a href="/task">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/donate">Donate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
   <form action="/logout" method="post">
    @csrf
    <button>Logout</button></form> &nbsp;&nbsp;&nbsp;
    </div>
    </div> 

    <div class="container">
<div class="term"><img src="{{asset('images/soma.png')}}" alt=""><div class="pa"><h1>We are able to change the story and history poor peaple</h1><br><p style="color: black">Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision </p></style><a href="#"><button style="color: black">keep claim and donate</button></a></div>
    
    </div>&nbsp;&nbsp;&nbsp;<div class="term"><img src="{{asset('images/school.png')}}" alt=""><div class="pa"><h1>We are able to change the story and history poor peaple</h1><br><p style="color: black">Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision </p></style><a href="#"><button style="color: black">keep claim and donate</button></a></div></div>&nbsp;&nbsp;&nbsp;<div class="term"><img src="{{asset('images/soma.png')}}" alt=""><div class="pa"><h1>We are able to change the story and history poor peaple</h1><br><p style="color: black">Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision </p></style><a href="#"><button style="color: black">keep claim and donate</button></a></div></div>&nbsp;&nbsp;&nbsp;<div class="term"><img src="{{asset('images/poor.jpg')}}" alt=""><div class="pa"><h1>We are able to change the story and history poor peaple</h1><br><p style="color: black">Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision </p></style><a href="#"><button style="color: black">keep claim and donate</button></a></div></div>



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