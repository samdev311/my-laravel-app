<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Heart Fund Platform - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f0f0f0;
      color: white;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header */
    .header {
      width: 100%;
      height: 80px;
      background-color: rgb(57, 73, 87);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: space-between;
    }

    .header h1 {
      flex: 1 1 100%;
      text-align: center;
      margin-bottom: 5px;
      font-size: 1.8rem;
      color: white;
    }

    .header img {
      height: 50px;
      width: auto;
      margin-left: 10px;
    }

    .link {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex: 1 1 100%;
      flex-wrap: wrap;
    }

    .link a {
      font-size: 1.2rem;
      color: white;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .link a:hover {
      background-color: white;
      color: rgb(57, 73, 87);
    }

    .link button {
      width: auto;
      min-width: 80px;
      height: 35px;
      border: 2px gainsboro solid;
      border-radius: 4px;
      background: transparent;
      color: white;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s, color 0.3s;
    }

    .link button:hover {
      background-color: white;
      color: rgb(57, 73, 87);
    }

    /* Form container */
    .form {
      width: 90%;
      max-width: 500px;
      height: auto;
      min-height: 60vh;
      background-image: url('images/chrld5.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      margin: 120px auto 40px; /* margin top to clear fixed header */
      padding: 30px 25px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.5);
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: white;
      backdrop-filter: brightness(0.6);
    }

    .form h1 {
      font-size: 2rem;
      margin-bottom: 20px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .form label {
      font-size: 1.1rem;
      margin-bottom: 6px;
      display: block;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
    }

    .form input {
      width: 100%;
      height: 45px;
      margin-bottom: 18px;
      border: 3px gainsboro solid;
      border-radius: 6px;
      background-color: transparent;
      color: white;
      font-size: 1rem;
      padding: 0 10px;
      outline: none;
    }

    .form input::placeholder {
      color: #ddd;
    }

    .form button {
      width: 48%;
      height: 45px;
      margin-right: 4%;
      background-color: rgb(57, 73, 87);
      border: 3px gainsboro solid;
      border-radius: 4px;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form button:last-child {
      margin-right: 0;
      background-color: transparent;
      color: gainsboro;
      border-color: gainsboro;
    }

    .form button:hover {
      background-color: white;
      color: rgb(57, 73, 87);
    }

    .form p {
      margin-top: 20px;
      font-size: 1rem;
      text-align: center;
      color: white;
    }

    .form p a {
      color: rgb(200, 230, 250);
      text-decoration: underline;
    }

    /* Footer */
    .footer {
      width: 100%;
      background-color: darkgray;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 30px 20px;
      margin-top: auto;
    }

    .classic {
      width: 250px;
      text-align: center;
      color: black;
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
        font-size: 1.3rem;
        margin-bottom: 0;
      }

      .link {
        justify-content: center;
        gap: 10px;
      }

      .form {
        width: 95%;
        margin: 100px auto 40px;
        padding: 20px;
        min-height: auto;
      }

      .form h1 {
        font-size: 1.5rem;
      }

      .form label {
        font-size: 1rem;
      }

      .form input {
        height: 40px;
        font-size: 0.9rem;
      }

      .form button {
        width: 48%;
        height: 40px;
        font-size: 0.9rem;
      }

      .footer {
        gap: 20px;
        padding: 20px 10px;
      }

      .classic {
        width: 90%;
        max-width: 300px;
      }
    }

    @media (max-width: 400px) {
      .form button {
        width: 100%;
        margin: 8px 0;
      }

      .form button:last-child {
        margin-right: 0;
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
      <a href="#">Service</a>
      <a href="/donate">Donate</a>
      <a href="/signup"><button>Sign up</button></a>
    </nav>
  </header>

  <section class="form">
    <form action="/login" method="POST">
      @csrf
      <h1>Login here for donation</h1>

      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Enter your email" required />

      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Enter your password" required />

      <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
        <button type="submit" name="submit">Login</button>
        <button type="reset" name="cancel">Cancel</button>
      </div>

      <p>Don't have an account? <a href="/signup">Register</a></p>
    </form>
  </section>

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
