<?php
  //Allow the config
  define('__CONFIG__', true);
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN SYSTEM</title>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/css/uikit.min.css" /> 
</head>
<body>

  <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-l-3@s uk-child-width-l-l" uk-grid="">
      <form class="uk-form-stacked js-login">

        <h2>Login</h2>

        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@example.com">
          </div>
        </div>

        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Password</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your Password">
          </div>
        </div>

        <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
  
  <?php require_once "inc/footer.php"; ?>

  
</body>
</html>