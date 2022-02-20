<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/crud/index.php">iNotes</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/crud/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>';
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
      echo '<form class="d-flex" method="get" action="crud/index.php">
      <p class="text-light my-0 mx-2">Welcome ' . $_SESSION['useremail']. '</p>
      <a href="partials/_logout.php" class="btn btn-outline-success ml-3">Logout</a>
      </form>';

    }
    else{
      echo '<form class="d-flex">
        <a class="btn btn-primary mx-1"  role="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        <a class="btn btn-primary mx-1"  role="button"  data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a>
      </form>';
    }
    
    
    echo '</div>
         </div>
         </nav> ';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

}
?>