<?php require ('header.php') ; ?>


<body class="login">
    <form class="form-login">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/logo-6.png" class="theme-logo">
            </div>
            <div class="col-md-12">
                <label for="inputUsername" class="">USER NAME</label>
                <input type="text" id="inputUsername" class="form-control mb-4" placeholder="Login" required >
                <label for="inputEmail" class="">EMAIL</label>
                <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Login" required >
                <label for="inputPassword" class="">PASSWORD</label>                    
                <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required>
                <label for="inputRepeatPassword" class="">REPEAT PASSWORD</label>                    
                <input type="password" id="inputRepeatPassword" class="form-control mb-5" placeholder="Password" required>
                <div class="terms-conditions-chkbox d-flex justify-content-center mb-4">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1"><span class="d-block mt-1">I agree to all <a href="">Terms</a></span></label>
                    </div>
                </div>                    
                <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Register</button>
                <div class="forgot-pass text-center mt-4">
                    <a href="user_login.php">Back</a>
                </div>
            </div>
        </div>
    </form>

    <?php require ('footer.php') ; ?>
