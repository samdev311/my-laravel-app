<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Donation Form - Responsive</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f5f5f5;
  }

  /* Header */
  .type {
    width: 100%;
    background-color: rgb(57, 73, 87);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    padding: 1rem 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  .type h1 {
    color: white;
    font-size: 1.8rem;
    flex: 1 1 100%;
    text-align: center;
    margin-bottom: 10px;
  }
  .type img {
    height: 50px;
    width: auto;
  }
  .li {
    display: flex;
    align-items: center;
    gap: 1rem;
  }
  .li a {
    font-size: 1rem;
    text-decoration: none;
    color: white;
    padding: 6px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
  }
  .li a:hover {
    background-color: white;
    color: rgb(57, 73, 87);
  }
  .li form button {
    background: transparent;
    border: 2px solid white;
    color: white;
    padding: 6px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s, color 0.3s;
  }
  .li form button:hover {
    background-color: white;
    color: rgb(57, 73, 87);
  }

  /* Container */
  .container {
    margin-top: 140px; /* account for fixed header */
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 15px;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
  }

  /* Form section */
  .form {
    background: white;
    padding: 20px 30px;
    border-radius: 8px;
    flex: 1 1 350px;
    max-width: 450px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .form h1 {
    margin-bottom: 20px;
    font-size: 1.5rem;
    color: rgb(57, 73, 87);
  }
  .form label {
    display: block;
    font-weight: 600;
    margin-bottom: 6px;
    font-size: 1rem;
    color: #333;
  }
  .form input[type="text"] {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: 2px solid gray;
    border-radius: 8px;
    font-size: 1rem;
  }
  .form button {
    width: 48%;
    padding: 10px 0;
    border: 2px solid gray;
    border-radius: 6px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    background-color: transparent;
  }
  .form button[type="submit"] {
    background-color: rgb(57, 73, 87);
    color: white;
    border-color: rgb(57, 73, 87);
  }
  .form button[type="submit"]:hover {
    background-color: #435460;
  }
  .form button[type="button"] {
    background-color: transparent;
    color: gray;
  }
  .form button[type="button"]:hover {
    background-color: #ddd;
  }
  .form .button-group {
    display: flex;
    justify-content: space-between;
  }

  /* Info section */
  .go {
    flex: 1 1 350px;
    max-width: 500px;
    background: white;
    border-radius: 8px;
    padding: 20px 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    color: #222;
  }
  .go img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 20px;
  }
  .go h2 {
    margin-bottom: 10px;
    color: rgb(57, 73, 87);
  }
  .go p {
    font-size: 1rem;
    line-height: 1.5;
  }

  /* Footer */
  .footer {
    margin-top: 40px;
    background-color: darkgray;
    padding: 30px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
  }
  .classic {
    flex: 1 1 250px;
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

  /* Responsive tweaks */
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
      margin-top: 160px;
      gap: 30px;
      padding: 0 10px;
    }
    .type h1 {
      font-size: 1.4rem;
      margin-bottom: 10px;
    }
    .li {
      justify-content: center;
      gap: 15px;
      margin-top: 10px;
      width: 100%;
    }
  }
</style>
</head>
<body>

  <header class="type">
    <h1>Heart fund platform</h1>
    <div class="li">
      <a href="/task">Home</a>
      <a href="/service">Service</a>
      <form action="/logout" method="POST" style="margin:0;">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </div>
    <img src="{{ asset('images/log1.png') }}" alt="Logo" />
  </header>

  <main class="container">
    <section class="form">
      <form action="/payment" method="post">
        @csrf
        <h1>Pay your donation with the heart fund</h1>
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname" required />

        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" name="lastname" required />

        <label for="coming_from">Coming From</label>
        <input type="text" id="coming_from" name="coming_from" required />

        <label for="amount_to_pay">Amount to Pay</label>
        <input type="text" id="amount_to_pay" name="amount_to_pay" required />

        <div class="button-group">
          <button type="submit" name="submit">Donate now</button>
          <button type="button" onclick="window.history.back()">Cancel</button>
        </div>
      </form>
    </section>

    <section class="go">
      <img src="{{ asset('images/soma.png') }}" alt="Help everyone" />
      <h2>We are here to help everyone</h2>
      <p>
        Donation is the act of humanity. That is why it is the responsibility
        of everyone in the world. The children of Somalia and South Sudan are
        the most in need of immediate support.
      </p>
    </section>
  </main>

  <footer class="footer">
    <div class="classic">
      <h1>Contact us</h1>
      <img src="{{ asset('images/telegram.png') }}" alt="Telegram" />
      <img src="{{ asset('images/watsapp.png') }}" alt="WhatsApp" />
    </div>

    <div class="classic">
      <h1>Useful Links</h1>
      <img src="{{ asset('images/facebook.png') }}" alt="Facebook" />
      <img src="{{ asset('images/ig.png') }}" alt="Instagram" />
    </div>

    <div class="classic">
      <h1>Connect with us</h1>
      <img src="{{ asset('images/git.png') }}" alt="GitHub" />
      <img src="{{ asset('images/google.png') }}" alt="Google" />
    </div>
  </footer>

</body>
</html>
