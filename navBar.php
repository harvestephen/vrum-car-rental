<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div class="navBar navContent">
        <div class="pageTitle">
            <p class="pageTitle" onclick="window.location.href='/practice/home.php'" >Vrum</p>
        </div>
        <div class="pageNav navContent">
            <div class="navOption navContent">
                <ul class="navOption">
                    <li class="navOption">
                        <button class="navSelection" onclick="window.location.href='/practice/CarRentalPage.php'">Car</button>
                    </li>
                    <li class="navOption">
                        <button class="navSelection" onclick="window.location.href='/practice/FooterPages/AboutUs/AboutUs.php'">About</button>
                    </li>
                </ul>
            </div>
            <div class="accountSection navContent">
                <ul class="navOption">
                    <li class="navOption">
                        <button class="navSelection" id="loginModalBtn">Log In</button>
                    </li>
                    <li class="navOption">
                        <button class="navSelection" id="signupModalBtn">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div></div>

    <!-- Log in Modal -->

    <div id="loginModal" class="modal">
        <div class="modalContent">
            <div>
              <h2 class="modalHeader">Sign In</h2>
            </div>
            <div>
                <form class="modalForm">
                    <div>
                        <label class="formLabel">Username</label>
                        <input class="formInput" type="text">
                    </div>
                    <div>
                        <label class="formLabel">Password</label>
                        <input class="formInput" type="text">
                    </div>
                    <div class="formSubmit" style="display: inline-flex;">
                        <button class="formSubmit">Sign In</button>
                        <p class="formSubmit">Doesn't have an account?</p>
                        <a class="formSubmit">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign up Modal -->

    <div id="signupModal" class="modal">
        <div class="modalContent">
            <div>
              <h2 class="modalHeader">Register</h2>
            </div>
            <div>
                <form class="modalForm">
                    <div>
                        <label class="formLabel">Username</label>
                        <input class="formInput" type="text">
                    </div>
                    <div>
                        <label class="formLabel">Email</label>
                        <input class="formInput" type="text">
                    </div>
                    <div>
                        <label class="formLabel">Contact No.</label>
                        <input class="formInput" type="text">
                    </div>
                    <div>
                        <label class="formLabel">Password</label>
                        <input class="formInput" type="text">
                    </div>
                    <div>
                        <label class="formLabel">Confirm Pasword</label>
                        <input class="formInput" type="text">
                    </div>
                    <div class="formSubmit">
                        <div style="display: flex; justify-content: center;">
                            <button class="formSubmit">Sign Up</button>
                        </div>
                        <div style="display: flex; justify-content: center;   align-items: center;">
                            <p class="formSubmit">Already Have an Account?</p>
                            <a class="formSubmit">Sign up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>