<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>iNotes - Notes for us</title>

</head>

<body>
    <?php include 'partials/_header.php'; ?>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
          include 'partials/_ggconnect.php';
          $username = $_POST['user_name'];
          $useremail = $_POST['user_email'];
          $usercomment = $_POST['user_comment'];
          
          $sql = "INSERT INTO `userscontact` (`name`, `email`, `comment`, `timestamp`)
           VALUES ('$username', '$useremail', '$usercomment', current_timestamp())";

          $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your details has been submitted successfuly.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>';
        }
        else {
            echo "The record was not inserted succesfully because of this arror...>".
            mysqli_error($conn);
        }


    }
   ?>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '<div class="container col-sm-8">
        <h1 class="text-center my-3"><b><u>Contact Us</b></u></h1>
       <form method="post" action="contact.php">
            <div class="form-group">
                <label for="exampleFormControlInput1">Username</label>
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="text" Required>
                <label for="exampleFormControlInput1" Required>Email address</label>
                <input type="email" class="form-control" id="user_email" name="user_email"
                    placeholder="name@example.com" Required>

            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comments</label>
                <textarea class="form-control" id="user_comment" name="user_comment" rows="3" Required></textarea>
            </div>
            <button class="btn btn-success my-2">Submit</button>
        </form>';
    }
    else{
        echo '<div class="container col-sm-8">
        <div class="p-3 my-2 bg-warning text-dark">You are not logged in! Please login to be able to add a note.</div>
        </div>';
    }
    ?>


    <p class="text-center my-5"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
        </svg> <b><a class="text-decoraton:none text-dark"
                href="mailto:gunjan@gmail.com?subject=Test Emailbody=hello">Email Us</a></b>
    </p>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->
</body>

</html>