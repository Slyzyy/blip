<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>
    <?= $title; ?>
  	</title>
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/login.css" />
    <script
      src="<?= base_url('assets/');?>js/jquery.min.js"
      charset="utf-8"
    ></script>
  </head>

  <body>
    <form class="login-form user" method="post" action="<?= base_url('auth');?>">
      <h1>Login</h1>
	  
	  <?= $this->session->flashdata('message');?>
      <div class="txtb">
        <input placeholder="Emaill Address" type="text" id="email" name="email" value="<?= set_value('email');?>"/>
        <?= form_error('email', '<small style="color: red;" class="text-danger pl-3">','</small>'); ?>
        <span></span>
      </div>

      <div class="txtb">
        <input placeholder="Password" type="password" id="password" name="password"/>
        <?= form_error('password', '<small style="color: red;" class="text-danger pl-3">','</small>'); ?>
        <span></span>
      </div>

      <input type="submit" class="logbtn" value="Login" />

      <div class="bottom-text">Don't have account? <a href="<?= base_url('auth/registration');?>">Sign up</a></div>
    </form>

    <script type="text/javascript">
      $(".txtb input").on("focus", function() {
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur", function() {
        if ($(this).val() == "") $(this).removeClass("focus");
      });
    </script>
  </body>
</html>
