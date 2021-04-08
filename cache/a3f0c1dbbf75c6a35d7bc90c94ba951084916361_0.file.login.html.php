<?php
/* Smarty version 3.1.30, created on 2020-05-23 08:58:45
  from "C:\xampp\htdocs\mesprojets\Framwork\coursenlignesm\src\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec8c9a54496e1_39692530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f0c1dbbf75c6a35d7bc90c94ba951084916361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\Framwork\\coursenlignesm\\src\\view\\login.html',
      1 => 1590216247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8c9a54496e1_39692530 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Login</title>

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/logon">
					<div class="login100-form-avatar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/images/user.jpg" alt="AVATAR">

					</div>
					<span class="login100-form-title p-b-26">
						Connexion
					</span>
				

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/animsition/js/animsition.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/daterangepicker/moment.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/vendor/countdowntime/countdowntime.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/login/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
