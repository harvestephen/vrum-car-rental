<div class="navBar navContent">
    <div class="pageTitle">
        <p class="pageTitle" onclick="window.location.href='./index.php'">Vrum</p>
    </div>
    <div class="pageNav navContent">
        <div class="navOption navContent">
            <ul class="navOption">
                <li class="navOption">
                    <button class="navSelection"
                        onclick="window.location.href='/practice/CarRentalPage.php'">Car</button>
                </li>
                <li class="navOption">
                    <button class="navSelection"
                        onclick="window.location.href='/practice/FooterPages/AboutUs/AboutUs.php'">About</button>
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
            <form class="modalForm">
                <div>
                    <input class="formInput" type="text" placeholder="Username" noautocomplete>
                </div>
                <div>
                    <input class="formInput" type="email" placeholder="Email" noautocomplete>
                </div>
                <div>
                    <input class="formInput" type="text" placeholder="Phone Number" noautocomplete>
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete>
                </div>
                <div>
                    <input class="formInput" type="passsword" placeholder="Confirm Password" noautocomplete>
                </div>
                <div class="formSubmit">
                    <div style="display: flex; justify-content: center;">
                        <button class="formSubmit">Sign Up</button>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                        <p class="formSubmit"  style="margin-right: 5px;">Already Have an Account?</p>
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
                    <input class="formInput" type="text" placeholder="Username" noautocomplete>
                </div>
                <div>
                    <input class="formInput" type="password" placeholder="Password" noautocomplete>
                </div>
                <div class="formSubmit" id="login-bottom">
                    <button class="formSubmit" style="flex-shrink: 0">Log in</button>
                    <a class="formSubmit" id="sign-up-alt" style="flex-shrink: 0">Register</a>
                </div>
            </form>
        </div>
    </div>

</div>