<?php
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
include "./pages/Modal/Register.php";
if (isset($_POST["isLogged"])) {
	$userId = $_POST["userId"];
	if ($userId == "") {
		echo "<script>
		$('#register_Modal').css('display', 'flex');
		$('#register_Modal').fadeIn(100);
		setInterval(()=>{
			$('#register_Modal').fadeOut(100);
		},1000);
		
		</script>";
	} else {
		echo "<script>window.location.href='./cars';</script>";
	}
}
?>
<div class="<?php if (isset($_SESSION['role']) && $_SESSION['role'] === "admin") {
    echo "AdminnavBar navContent";
} else {
    echo "navBar navContent";
}
?>">

<div class="pageNav navContent <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') ? 'admin-navbar' : ''; ?>">
        <div class="navOption navContent">
        <a class="pageTitle" href="<?php echo $rootDirectory ?>">Vrum</a>
        <div class="nav-links">
            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
                echo '<ul class="navOption">';
                echo '<li class="navOption">';
                echo '<a class="navSelection" href=' . $rootDirectory . '/cars >Car</a>';
                echo '</li>';
                echo '<li class="navOption">';
                echo '<a class="navSelection" href=' . $rootDirectory . '/about>About</a>';
                echo '</li>';
                echo '</ul>';
            } else if (!isset($_SESSION['role'])) {
                echo '<ul class="navOption">';
                echo '<li class="navOption">';
                echo <<<HTML
                        <form action="" method="POST">
                            <input name="userId" type="text" hidden value="{$userId}"/>
                            <button name="isLogged" class="navSelection">Cars</button>
                        </form>
                        HTML;
                echo '</li>';
                echo '<li class="navOption">';
                echo '<a class="navSelection" href=' . $rootDirectory . '/about>About</a>';
                echo '</li>';
                echo '</ul>';
            }
            ?>
        </div>
        </div>
        <div class="accountSection navContent">
            <ul class="navOption">
                <?php
                if (session_id() && !empty($_SESSION['username'])) {
                    echo '<li class="navOption">';
                    echo '<button class="navSelection" id="usernameTrigger">' . htmlspecialchars($_SESSION['username']) . '</button>';
                    echo '</li>';
                } else {
                    echo '<li class="navOption">';
                    echo '<button class="navSelection" id="registerModalBtn">Register</button>';
                    echo '</li>';
                    echo '<li class="navOption">';
                    echo '<button class="navSelection" id="loginModalBtn">Login</button>';
                    echo '</li>';
                }
                ?>

            </ul>
        </div>
    </div>
</div>

<?php include "./pages/Modal/usermenu_modal.php"; ?>

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
                    <p class="errormessage" id="confirmPass">Incorrect Password!</p>
                </div>
                <div class="formSubmit">
                    <div style="display: flex; justify-content: center;">
                        <button class="formSubmit" id="register-submit" name="register">Submit</button>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                        <p class="formSubmit" style="margin-right: 5px;">Already Have an Account?</p>
                        <a class="formSubmit sign-up-alt" id="sign-up-alt">Sign up</a>
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
                    <a class="formSubmit register-up-alt" id="sign-up-alt" style="flex-shrink: 0">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>