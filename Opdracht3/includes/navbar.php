<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.php">
            <img src="/blogding.png" alt="Logo"width="30" class="d-inline-block align-text-top">
            Blogding.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shares">Shares</a>
              </li>
              <?php
              if (checkLogin()) {
              echo '<li class="nav-item">
                <a class="nav-link" href="createshare.html">Maak share</a>
              </li>';
              }
              ?>
            </ul>
            <div class="d-flex">
              <?php
              if (!checkLogin()) {
              echo '<a class="btn btn-outline-dark me-2" href="login.html">Login</a>
              <a class="btn btn-outline-dark" href="register.html">Register</a>';
              } else {
                echo '<input type="hidden"value="whatever">';
                echo '<form method="post" action="/logout">';
                echo '<input type="submit" class="btn btn-outline-dark me-2" value="Logout">';
                echo '</form>';
              }
              ?>
            </div>
          </div>
        </div>
      </nav>
<?php
  function checkLogin() {
    if (isset($_COOKIE["Blogding"]) && !empty($_COOKIE["Blogding"])) {
      return true;
    } else {
      return false;
    }
    
  }