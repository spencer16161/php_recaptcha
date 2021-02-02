<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>登入頁面</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="login_frame">
			<form method="post" id="user_login" >
				<p><label class="label_input">使用者名稱</label><input type="text" id="username" name="username" class="text_field"/></p>
				<p><label class="label_input">密碼</label><input type="text" id="password" name="password" class="text_field"/></p>
				<div id="login_control">
					<input type="button" id="user_login_submit"  value="登入" />
					
				</div>
				<!--google recaptcha驗證-->
				<div class="form-group row">
					<div class="col-md-offset-2 col-md-7">
						<!--此處data-sitekey的值請換成自己申請的public公鑰-->
						<div class="g-recaptcha" data-sitekey="6LeTDkUaAAAAAGqY3Sqb7QKbVbDyvs4IxyCD6k4a"></div>
						<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl='zh-TW'"></script>
					</div>
				</div>
			</form>
		</div>
	</body>
	<script>
		$("#user_login_submit").click(function(){
			console.log("tset1");
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			console.log("tset"+username);
			$.ajax({
			  type: 'POST',
			  async:false,
			  url: 'check_login.php',
			  // data: {username: username, password: password},
			  data: $("#user_login").serialize(),
			  success: function(msg) {
				alert('Data Saved: ' + msg);
			  }
			});
		});
		

	</script>
	
</html>