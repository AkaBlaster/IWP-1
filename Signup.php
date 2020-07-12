<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="css/Sign-up.css"/>

    </head>

    <body>
    <div class="container">
        <div class="column1">
            <form id="form" class="form" action="Add_Cust.php" method="get">
                <h2>Register with us</h2>
                <div class="form-control">
                    <label for='username'>Fullname</label>
                    <input type="text" name="cust_name" id="username" placeholder="Enter name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="text" name="cust_email" id="email" placeholder="Enter email">
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for='Mobile'>Mobile</label>
                    <input type="text" name="cust_mobile" id="Mobile" placeholder="Enter Mobile">
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for='Country'>Country</label>
                    <input type="text" name="cust_country" id="Country" placeholder="Enter Country">
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for='PinCode'>PinCode</label>
                    <input type="text" id="PinCode" placeholder="Enter PinCode">
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" name="cust_pwd" id="password" placeholder="Enter password">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password2'>Confirm Password</label>
                    <input type="password" name="cust_confirm_pwd" id="password2" placeholder="Enter password again ">
                    <small>Error message</small>
                </div>
                <button id="ImgChange" name="submit">Register</button>
                <p  class="HomeAnchor">Back to HomePage <a href="Home.php">HomePage</a></p>

            </form>
        </div>
        <div  class="column2">

            <img id="IMG1" src="https://i.ibb.co/k5NNz4F/pablo-sign-up.png" alt="pablo-sign-up" border="0" class='signup-image'>
        </div>

    </div>
    <script src="SignUp.js"></script>
    </body>

    </html>