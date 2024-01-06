<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets_login/css/phppot-style.css" type="text/css" rel="stylesheet" />
<link href="assets_login/css/user-registration.css" type="text/css" rel="stylesheet" />
<script src="vendor_login/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
	body{
        /* background-image:url("./assets_login/login.jpg"); */
		background: #000531;
        background-position: center; /* Center the image */
 		background-repeat: no-repeat; /* Do not repeat the image */
 		background-size: cover; /* Resize the background image to cover the entire container */
    }
.sign-up-container{
	background-color: #09aff4;
	/* background-image: linear-gradient(to right,#000531,#0d1857,#000531);	 */
  border-radius: 2rem;
  border:2px #000531 solid;
  height: 400px;
}
.form-label{
color:#0d1857 !important;
line-height: 2rem;
}
#login-btn{
	color:white;
	font-weight:bold;
	background: #000531;
	border-radius: 1rem;
	border:2px powderblue solid;
	line-height: 2rem;
	margin-top: 2rem;
}
#login-btn:hover{
	background-color:lightblue ;
}
</style>
</HEAD>
<BODY>
	<div class="phppot-container"  >
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php" style="color:#0d1857;">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading"  style="color:#0d1857;">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username" style="border-radius: 1.7rem; border: 1px solid transparent;">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password" style="border-radius: 1.7rem; border: 1px solid transparent;">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now" onclick="" formaction="account.php">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
