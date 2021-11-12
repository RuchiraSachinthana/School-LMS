<?php require ('header.php') ; ?>

    <form class="form-login">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/logo-5.png" class="theme-logo">
            </div>
            <div class="col-md-12">

                

                <div class="division mt-4 mb-5">
                    <div class="line line-left"></div>
                        <span>Login</span>
                    <div class="line line-right"></div>
                </div>

                <label for="inputEmail" class="">User Name</label>                
                <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Login" required >                    
                <label for="inputPassword" class="">Password</label>                    
                <input type="password" id="inputPassword" class="form-control mb-5" placeholder="Password" required>
                <div class="checkbox d-flex justify-content-center mb-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Sign in</button>
                <div class="forgot-pass text-center mt-3">
                    <a href="user_pass_recovery.php">Forgot Password ?</a>
                </div>

            </div>

            <div class="col-md-12">
                <div class="login-text text-center">
                    <p class="mt-3 text-black">New Here? <a href="user_register.php" class="">Register </a> as new user !</p>
                </div>
            </div>
        </div>
    </form>
    
    <?php require ('footer.php') ; ?>