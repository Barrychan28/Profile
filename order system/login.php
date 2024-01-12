<?php include('header.php'); ?>
<?php

if (isset($_SESSION['login_error']) && $_SESSION['login_error'] === true) {
    echo '<script>alert("Error! Please try again!");</script>';
    unset($_SESSION['login_error']);
}
?>

<form action="validateForm.php?op=checkLogin" method="post">

<div class="col-4 text-center position-absolute top-50 start-50 translate-middle ">
  <h5>Please enter your Login name and password</h5><br>
  <div class="input-group input-group-lg mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </span>
      <input type="email" class="form-control" placeholder="Login name" name="email" id="email" required>
    </div>

    <div class="input-group input-group-lg mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </span>
      <input type="password" class="form-control" placeholder="password" name="password" required>
    </div>
<br>
  <input type="submit" class="btn btn-submit btn-primary col-4" value="Login">
</div>

  
</form> 

