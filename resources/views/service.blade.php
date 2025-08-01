<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Heart Fund Platform</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f5f5f5;
      color: #000;
    }

    /* Header */
    .header {
      width: 100%;
      background-color: rgb(57, 73, 87);
      position: fixed;
      top: 0;
      left: 0;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
      flex-wrap: wrap;
      gap: 10px;
    }

    .header h1 {
      color: white;
      font-size: 1.5rem;
      flex: 1 1 100%;
      text-align: center;
      margin-bottom: 5px;
    }

    .header img {
      height: 50px;
      width: auto;
    }

    .link {
      display: flex;
      gap: 20px;
      align-items: center;
      flex: 1 1 100%;
      justify-content: center;
    }

    .link a {
      color: white;
      font-size: 1.1rem;
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .link a:hover {
      background-color: white;
      color: rgb(57, 73, 87);
    }

    .link form button {
      background: transparent;
      border: 2px solid white;
      color: white;
      padding: 6px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s, color 0.3s;
    }

    .link form button:hover {
      background-color: white;
      color: rgb(57, 73, 87);
    }

    /* Main container */
    .container {
      max-width: 1200px;
      margin: 100px auto 40px; /* top margin accounts for fixed header */
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      padding: 0 15px;
    }

    .term {
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      flex: 1 1 280px;
      max-width: 300px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .term img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .pa h1 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      color: rgb(57, 73, 87);
    }

    .pa p {
      font-size: 1rem;
      margin-bottom: 20px;
      color: #333;
    }

    .pa button {
      background: transparent;
      border: 2px solid black;
      padding: 10px 20px;
      border-radius: 6px;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      color: black;
    }

    .pa button:hover {
      background-color: rgb(57, 73, 87);
      color: white;
      border-color: rgb(57, 73, 87);
    }

    /* Footer */
    .footer {
      width: 100%;
      background-color: darkgray;
      padding: 30px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .classic {
      flex: 1 1 200px;
      max-width: 300px;
      text-align: center;
    }

    .classic h1 {
      margin-bottom: 15px;
      font-size: 1.3rem;
    }

    .classic img {
      width: 40px;
      margin: 5px 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .header h1 {
        flex: 1 1 auto;
        font-size: 1.2rem;
        margin-bottom: 0;
      }
      .link {
        justify-content: center;
        flex: 1 1 100%;
      }
      .container {
        flex-direction: column;
        align-items: center;
        margin-top: 140px;
      }
      .term {
        max-width: 90%;
      }
      .footer {
        flex-direction: column;
        gap: 20px;
        padding: 20px 10px;
      }
    }
  </style>
</head>
<body>

  <header class="header">
    <h1>Heart fund platform</h1>
    <img src="{{ asset('images/log1.png') }}" alt="Logo" />
    <nav class="link">
      <a href="/task">Home</a>
      <a href="/donate">Donate</a>
      <form action="/logout" method="post" style="margin:0;">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </nav>
  </header>

  <main class="container">
    <div class="term">
      <img src="{{ asset('images/soma.png') }}" alt="Help Somalia" />
      <div class="pa">
        <h1>We are able to change the story and history poor people</h1>
        <p>Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision</p>
        <button>Keep claim and donate</button>
      </div>
    </div>

    <div class="term">
      <img src="{{ asset('images/school.png') }}" alt="School" />
      <div class="pa">
        <h1>We are able to change the story and history poor people</h1>
        <p>Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision</p>
        <button>Keep claim and donate</button>
      </div>
    </div>

    <div class="term">
      <img src="{{ asset('images/soma.png') }}" alt="Help Somalia" />
      <div class="pa">
        <h1>We are able to change the story and history poor people</h1>
        <p>Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision</p>
        <button>Keep claim and donate</button>
      </div>
    </div>

    <div class="term">
      <img src="{{ asset('images/poor.jpg') }}" alt="Poor" />
      <div class="pa">
        <h1>We are able to change the story and history poor people</h1>
        <p>Millions of Somali children at risk of dying from starvation without immediate emergency support, warns World Vision</p>
        <button>Keep claim and donate</button>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="classic">
      <h1>Contact us</h1>
      <img src="{{ asset('images/telegram.png') }}" alt="Telegram" />
      <br />
      <img src="{{ asset('images/watsapp.png') }}" alt="WhatsApp" />
    </div>

    <div class="classic">
      <h1>Useful link</h1>
      <img src="{{ asset('images/facebook.png') }}" alt="Facebook" />
      <br /><br />
      <img src="{{ asset('images/ig.png') }}" alt="Instagram" />
    </div>

    <div class="classic">
      <h1>Connect with us</h1>
      <img src="{{ asset('images/git.png') }}" alt="GitHub" />
      <br />
      <img src="{{ asset('images/google.png') }}" alt="Google" />
    </div>
  </footer>

</body>
</html>
