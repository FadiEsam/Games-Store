<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>

  <link rel="stylesheet" href="Style.css">
  <script src="JS script.js"></script>
</head>

<body>

  <header>

    <div class="avatar">
      <img src="avatar 1.jpg" alt="Avatar">
    </div>

    <nav>
      <ul>
        <li><a href="Index.html">Home</a></li>
        <li><a href="games info.html">Information</a></li>
        <li><a href="Log in.php">Log in</a></li>
        <li><a href="Sign up.php">Sign up</a></li>
      </ul>
    </nav>

  </header>


  <main class="signup-main">

    <div class="sign_up">

      <form action="Sign up.php" method="post">

        <fieldset>

          <legend>Sign Up</legend>


          <div class="content">

            <!-- =====================
                 LEFT SIDE
            ====================== -->

            <div class="left_bar">

              <p>Login Information :</p>

              <label for="email">Email :</label>

              <label for="password">Password :</label>


              <p>Personal Information :</p>

              <label for="f_name">First Name :</label>

              <label for="l_name">Last Name :</label>

              <label for="phone">Phone Number :</label>


              <p>The Address :</p>

              <label for="country">Country :</label>

              <label for="city">City :</label>

              <label for="street">Street :</label>


              <p>Payment Method :</p>

              <label for="c_number">Credit Card Number :</label>

              <label for="c_name">Cardholder's Name :</label>

              <label for="month">Expiration Date :</label>

              <label for="cvv">CVV :</label>

            </div>


            <!-- =====================
                 RIGHT SIDE
            ====================== -->

            <div class="right_bar">

              <div class="form_space"></div>

              <input
                type="email"
                id="email"
                name="email"
                required
              >

              <input
                type="password"
                id="password"
                name="password"
                required
              >


              <div class="form_space"></div>

              <input
                type="text"
                id="f_name"
                name="f_name"
                required
              >

              <input
                type="text"
                id="l_name"
                name="l_name"
                required
              >

              <input
                type="text"
                id="phone"
                name="phone"
                required
                minlength="10"
                maxlength="10"
              >


              <div class="form_space"></div>

              <input
                type="text"
                id="country"
                name="country"
                required
              >

              <input
                type="text"
                id="city"
                name="city"
                required
              >

              <input
                type="text"
                id="street"
                name="street"
              >


              <div class="form_space"></div>

              <input
                type="text"
                id="c_number"
                name="c_number"
              >

              <input
                type="text"
                id="c_name"
                name="c_name"
              >


              <div class="expiration">

                <select name="month" id="month">

                  <option value="" selected></option>

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>

                </select>


                <select name="year" id="year">

                  <option value="" selected></option>

                  <option value="24">2024</option>
                  <option value="25">2025</option>
                  <option value="26">2026</option>
                  <option value="27">2027</option>
                  <option value="28">2028</option>
                  <option value="29">2029</option>
                  <option value="30">2030</option>

                </select>

              </div>


              <input
                type="password"
                id="cvv"
                name="cvv"
                minlength="3"
                maxlength="3"
              >

            </div>

          </div>


          <!-- =====================
               FORM FOOTER
          ====================== -->

          <div class="footer">

            <div></div>

            <input
              type="submit"
              value="Sign Up"
            >

          </div>

        </fieldset>

      </form>

    </div>

  </main>

</body>

</html>