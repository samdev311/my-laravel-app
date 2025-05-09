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
}.form{
    width: 50%;
    height: 80vh;
    background-color: ;
    margin-left: 50vh;
    position: absolute;
    top:30%;
    align-content: center;
    
  background-image: url('images/chrld5.jpg'); 
  background-size: cover;        
  background-repeat: no-repeat;  
  background-position: center;   


    
}
.form label{
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}
.form form{
    align-items: center;
    margin-left: 100px;
}
form h1{
    font-family: Arial, Helvetica, sans-serif;
    margin-top: -12px;
}
form label{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
   
}
form input{
    width: 70%;
    height: 6vh;
    border:3px gainsboro solid;
    border-radius:6px;
    background-color: transparent;
}
form button{
    width: 15%;
    height: 5vh;
    background-color:rgb(57, 73, 87); 
    border:3px gainsboro solid;
    border-radius: 4px;
}.footer{
    width: 100%;
    height: 40vh;
    background-color: darkgray;
    margin-top: 150vh;
    display: inline-flex;
}
.classic{
    width: 20%;
    height:30vh;
    background-color: antiquewhite;
    margin-left: 20vh;
    margin-top: 6vh;

}.classic h1{
    text-align: center; 
}
.classic p{
    text-align: center;
}

    </style>
</head>
<body>
 
        
   
    <div class="header">
        <h1 style="color: white">Heart fund platform</h1>
        <img src="{{asset('images/log1.png')}}" alt="">
        <div class="link">
    <a href="/task">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Donate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/login"><button>Login</button></a>&nbsp;&nbsp;&nbsp;
    </div>
    </div> 
    <div class="form">
<form action="/register" method="POST">
    @csrf
<h1 style="color: rgb(245, 240, 240)">Register Here for Donation</h1>
<label for="firstname">First name</label><br><input type="text" name="firstname"><br>
<label for="firstname">Last name</label><br><input type="text" name="lastname"><br>

<label for="coming_from">Coming from</label><br><input type="text" name="coming_from"><br>
<label for="email">Email</label><br><input type="email" name="email"><br>
<label for="password">Password</label><br><input type="password" name="password"><br><br>
<button type="submit" name="submit">Register</button>&nbsp;&nbsp;<button type="submit" name="submit">Cancer</button><br><br>
<p style="color:white">Already have an account <a href="/login" style="size: 40px">login</a></p>






</form>




    </div>
    <div class="footer">
        <div class="classic">
        <h1>Contact us</h1><br>
        <p>0798771954</p>
        </div>
        
        <div class="classic">
        <h1>Usefull link</h1><br>
        <p>Join us on facebook</p>
        </div>
        <div class="classic">
        <h1>Connect with us</h1><br>
        <p>Samdev311@gmail.com</p>
        </div>
        
        
        </div>
    
    
</body>
</html>