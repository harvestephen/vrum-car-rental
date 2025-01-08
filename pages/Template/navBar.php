<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<div class="navBar navContent">
    <div class="pageTitle">
        <a class="pageTitle" href="<?php echo $rootDirectory?>">Vrum</a>
    </div>
    <div class="pageNav navContent">
        <div class="navOption navContent">
            <ul class="navOption">
                <li class="navOption">
                    <a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>Car</a>
                </li>
                <li class="navOption">
                    <a class="navSelection" href="<?php echo $rootDirectory . "/about"?>">About</a>
                </li>
            </ul>
        </div>
        <div class="accountSection navContent">
            <ul class="navOption">
                <li class="navOption">
                    <button class="navSelection" id="registerModalBtn">Register</button>
                </li>
                <li class="navOption">
                    <button class="navSelection" id="loginModalBtn">Login</button>
                </li>
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
                </div>
                <div>
                    <input class="formInput" type="email" placeholder="Email" noautocomplete required name="email">
                </div>
                <div>
                    <input class="formInput" type="number" placeholder="Phone Number" noautocomplete required name="phone">
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete required name="password">
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Confirm Password" noautocomplete required name="confirm-password">
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
            <form class="modalForm">
                <div>
                    <input class="formInput" type="text" placeholder="Username" noautocomplete required>
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete required>
                </div>
                <div class="formSubmit" id="login-bottom">
                    <button class="formSubmit" style="flex-shrink: 0">Log in</button>
                    <a class="formSubmit" id="sign-up-alt" style="flex-shrink: 0">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>