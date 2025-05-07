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
    background-color: transparent;
    display: inline-flex;
}.container .term{
    width: 30%;
    height: 20vh;
    background-color: darkgray;
    margin-top:20vh;
}
    </style>
</head>
<body>
    <div class="header">
        <h1 style="color: white">Heart fund platform</h1>
        <img src="{{asset('images/log1.png')}}" alt="">
        <div class="link">
    <a href="/task">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Donate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <form action="/logout" method="post">
    @csrf
    <button>Logout</button></form> &nbsp;&nbsp;&nbsp;
    </div>
    </div> 

    <div class="container">
<div class="term"></div>&nbsp;&nbsp;&nbsp;<div class="term"></div>&nbsp;&nbsp;&nbsp;<div class="term"></div>&nbsp;&nbsp;&nbsp;<div class="term"></div>




    </div>
</body>
</html>