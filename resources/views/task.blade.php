<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task - Responsive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            width: 100%;
            height: auto;
            background-color: rgb(57, 73, 87);
            position: fixed;
            z-index: 1000;
            padding: 10px 0;
        }

        .header h1 {
            color: white;
            text-align: center;
            font-size: 1.5rem;
        }

        .header img {
            height: 50px;
            margin-left: 20px;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            font-size: 18px;
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .link a:hover {
            background-color: white;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .link button {
            border: 1px solid white;
            border-radius: 5px;
            background: transparent;
            color: white;
            padding: 5px 10px;
        }

        .main {
            padding-top: 100px;
            background-color: rgb(61, 126, 130);
        }

        .main img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .par {
            text-align: center;
            color: white;
            font-size: 1.5rem;
            margin: 30px 20px;
        }

        .organ,
        .organ2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 40px 10px;
        }

        .ono,
        .or {
            background-color: rgb(18, 21, 21);
            color: white;
            width: 100%;
            max-width: 250px;
            border-radius: 5px;
            overflow: hidden;
        }

        .ono img,
        .or img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .ono p,
        .or p {
            padding: 10px;
            text-align: center;
        }

        .ono button,
        .or button {
            margin: 10px auto;
            display: block;
            width: 80%;
            border: 2px solid gainsboro;
            border-radius: 5px;
            padding: 5px;
        }

        .footer {
            background-color: darkgray;
            padding: 40px 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .classic {
            width: 100%;
            max-width: 300px;
            text-align: center;
            margin-bottom: 20px;
        }

        .classic img {
            width: 40px;
            margin: 5px;
        }

        @media (min-width: 768px) {
            .header h1 {
                text-align: left;
                margin-left: 70px;
                font-size: 2rem;
            }

            .link {
                text-align: right;
                margin-right: 40px;
            }
        }
    </style>
</head>
<body>

    <div class="header d-flex flex-column flex-md-row justify-content-between align-items-center px-3">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/log1.png') }}" alt="Logo">
            <h1 class="ms-3">Heart fund platform</h1>
        </div>
        <div class="link mt-2 mt-md-0">
            <a href="#">Home</a>
            <a href="/service">Service</a>
            <a href="/donate">Donate</a>
            <a href="/login"><button>Login</button></a>
            <a href="/signup"><button>Sign Up</button></a>
        </div>
    </div>

    <div class="main">
        <img src="{{ asset('images/poor.jpg') }}" alt="Food Image">

        <div class="par">
            <p>Join the world’s families to change the story of poverty.</p>
        </div>

        <div class="organ">
            <div class="ono">
                <img src="{{ asset('images/chirld1.jpg') }}" alt="">
                <p>South Sudan children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="ono">
                <img src="{{ asset('images/chirld2.jpg') }}" alt="">
                <p>Somalia children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="ono">
                <img src="{{ asset('images/chirld3.jpg') }}" alt="">
                <p>Burkina Faso children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="ono">
                <img src="{{ asset('images/chirld4.jpg') }}" alt="">
                <p>Namibia children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
        </div>

        <div class="organ2">
            <div class="or">
                <img src="{{ asset('images/chirld7.jpg') }}" alt="">
                <p>South Sudan children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="or">
                <img src="{{ asset('images/chirld8.jpg') }}" alt="">
                <p>Somalia children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="or">
                <img src="{{ asset('images/chrld6.jpg') }}" alt="">
                <p>Burkina Faso children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
            <div class="or">
                <img src="{{ asset('images/chirld7.jpg') }}" alt="">
                <p>Namibia children</p>
                <a href="/button"><button>Donate now</button></a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="classic">
            <h1>Contact us</h1>
            <img src="{{ asset('images/telegram.png') }}" alt="">
            <img src="{{ asset('images/watsapp.png') }}" alt="">
        </div>
        <div class="classic">
            <h1>Useful Links</h1>
            <img src="{{ asset('images/facebook.png') }}" alt="">
            <img src="{{ asset('images/ig.png') }}" alt="">
        </div>
        <div class="classic">
            <h1>Connect with us</h1>
            <img src="{{ asset('images/git.png') }}" alt="">
            <img src="{{ asset('images/google.png') }}" alt="">
        </div>
    </div>

</body>
</html>
