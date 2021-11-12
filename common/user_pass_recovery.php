<?php require ('header.php') ; ?>


<body class="login">
    <form class="form-login">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/logo-6.png" class="theme-logo">
            </div>

            <div class="col-md-12">
                <label for="inputNewPassword" class="">New Password</label>                    
                <input type="password" id="inputNewPassword" class="form-control mb-5" placeholder="Password" required>
                <label for="inputRepeatPassword" class="">Repeat Password</label>                    
                <input type="password" id="inputRepeatPassword" class="form-control mb-5" placeholder="Password" required>
                <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Reset</button>
            </div>

            <div class="col-md-12">
                <div class="login-text text-center">
                    <p class="mt-3 text-black">Not you? <a href="user_login.php" class=""> Sign in </a> as different user!</p>
                </div>
            </div>
        </div>
    </form>
    
    <?php require ('footer.php') ; ?>
