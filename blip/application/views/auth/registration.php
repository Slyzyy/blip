<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>
    <?= $title; ?>
    </title>
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/registration.css" />

    <script
      src="<?= base_url('assets/');?>js/jquery.min.js"
      charset="utf-8"
    ></script>
  </head>
  <body>
    <form class="login-form user" method="post" action="<?= base_url('auth/registration');?>">
      <h1>Register</h1>

      <div class="txtb">
        <input placeholder="Full Name" type="text" id="name" name="name" value="<?= set_value('name');?>"/>
        <span ></span>
      </div>
      <?= form_error('name', '<small style="color: red;" class="text-danger pl-3">','</small>'); ?>

      <div class="txtb">
        <input placeholder="Email Address" type="text" id="email" name="email" value="<?= set_value('email');?>"/>
        <span></span>
      </div>
      <?= form_error('email', '<small style="color: red;" class="text-danger pl-3">','</small>'); ?>

      <div class="txtb">
        <input placeholder="Enter Password" type="password" id="password1" name="password1"/>
        <span></span>
      </div>
      <?= form_error('password1', '<small style="color: red;" class="text-danger pl-3">','</small>'); ?>

      <div class="txtb">
        <input placeholder="Repeat Password" type="password" id="password2" name="password2" />
        <span></span>
      </div>

      <input type="submit" class="logbtn" value="Register Account" />

      <div class="bottom-text">
        Already have an account ? <a href="<?= base_url('auth');?>">Log in</a>
      </div>
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
