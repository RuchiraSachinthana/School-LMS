<?php include('header.php'); ?>
<style>
	body#login::before {

    content: "";
    background: darkblue;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}
	
</style>
<body id="login">
    <div  align="center" class="container" style="position: relative">
		

			<div class="span6"><div class="pull-right"><?php include('login_form.php'); ?></div></div>
		</div>
		
			<?php include('footer.php'); ?>
    </div>
<?php include('script.php'); ?>
</body>
</html>