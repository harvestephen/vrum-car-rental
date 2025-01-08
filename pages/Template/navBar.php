<?php
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory 
?>
<div class="navBar navContent">
    <div class="pageTitle">
        <a class="pageTitle" href="<?php echo $rootDirectory ?>">Vrum</a>
    </div>
    <div class="pageNav navContent">
        <div class="navOption navContent">
            <ul class="navOption">
                <li class="navOption">
                    <a class="navSelection" href=<?php echo $rootDirectory . "/cars" ?>>Car</a>
                </li>
                <li class="navOption">
                    <a class="navSelection" href="<?php echo $rootDirectory . "/about" ?>">About</a>
                </li>
            </ul>
        </div>
        <div class="accountSection navContent">
            <ul class="navOption">
            <?php if(isset($_GET['username'])) {
                echo '<li class="navOption">';
                echo '<button class="navSelection" id="registerModalBtn">' . $_GET['username'] . '</button>';
                echo '</li>';
            } else {
                echo '<li class="navOption">';
                echo '<button class="navSelection" id="registerModalBtn">Register</button>';
                echo '</li>';
                echo '<li class="navOption">';
                echo '<button class="navSelection" id="loginModalBtn">Login</button>';
                echo '</li>';
            } ?>
            </ul>
        </div>
                
            </ul>
        </div>
    </div>
</div>

<!-- Register Modal -->

<div id="registerModal" class="modal">
    <div class="modalContent">
        <div>
            <h2 class="modalHeader">Register</h2>
        </div>
        <div>
            <form class="modalForm" onsubmit="validateRegisterForm()" method="post" id="registerForm">
                <div>
                    <input class="formInput" type="text" placeholder="Username" noautocomplete required name="username">
                    <p class="errormessage" id="usernameRegister">Username already exist</p>
                </div>
                <div>
                    <input class="formInput" type="email" placeholder="Email" noautocomplete required name="email">
                    <p class="errormessage" id="emailRegister">Email already xist</p>
                </div>
                <div>
                    <input class="formInput" type="number" placeholder="Phone Number" noautocomplete required
                        name="phone">
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete required
                        name="password">
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Confirm Password" noautocomplete required
                        name="confirm-password">
                    <p class="errormessage" id="confirmPass">ulol di parehas password mo</p>
                </div>
                <div class="formSubmit">
                    <div style="display: flex; justify-content: center;">
                        <button class="formSubmit" id="register-submit" name="register">Submit</button>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                        <p class="formSubmit" style="margin-right: 5px;">Already Have an Account?</p>
                        <a class="formSubmit" id="sign-up-alt">Sign up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Login Modal -->

<div id="loginModal" class="modal">
    <div class="modalContent">
        <div>
            <h2 class="modalHeader">Log in</h2>
        </div>
        <div>
            <form class="modalForm" id="loginForm" onsubmit="validateLoginForm()">
                <div>
                    <input class="formInput" type="text" placeholder="Username" noautocomplete required name="username">
                    <p class="errormessage" id="loginusername">Username do not exist</p>
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete required
                        name="password">
                    <p class="errormessage" id="loginpassword">Wrong password</p>
                </div>
                <div class="formSubmit" id="login-bottom">
                    <button class="formSubmit" style="flex-shrink: 0">Log in</button>
                    <a class="formSubmit" id="sign-up-alt" style="flex-shrink: 0">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
