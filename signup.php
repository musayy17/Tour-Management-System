
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
    

      }
    </style>



<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   $name = $_POST['n'];
   $email   =  $_POST['e'];
   $pass    =  $_POST['p'];
   $contact = $_POST['c'];


   // -- checking if this email already exists in Accounts
   $sql = "INSERT INTO `user`(`username`, `email`, `password`, `contactNumber`) VALUES ('$name','$email','$pass','$contact' )";   //-- checking from customer
   $cust_check_res = mysqli_query($conn , $sql);

      if(($cust_check_res))
         {
             echo "data inserted user signup";
            
               //--- fetching data of user
            header("location:login.php");


         }
       }
?>







    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center justify-content-center ">
        <div class="col-lg-6 margin-auto" style="background: #f0e0b1;">
          <div class="card " style="
              background: hsla(0, 0%, 100%, 0.55);
              ">
            <div class="card-body p-5 shadow-5 text-center fw-bold " >
              <h2 class="fw-bold mb-5 text-success fw-bold">Sign in now</h2>
              <form action="" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input required = ""  type="text" name = "n"/>
                      <label class="form-label" for="form3Example1">Username</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input required = "" type="password"  name = "p" id="f class="form-control" />
                      <label class="form-label">Password</label>
                    </div>
                  </div>
                </div>
                              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input required = "" type = "email" name = "e" class="form-control" />
                  <label class="form-label">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="phone" name = "c" class="form-control" />
                  <label class="form-label" for="form3Example4">Phone</label>
                </div>
                 
                <!-- Submit button -->
                <!-- <button type="submit"  name = "submit" A class="btn btn-success w-50 fw-bold fs-2 btn-block mb-4">                    
                Sign in 
                </button> -->
                <input type="submit" A class= "btn btn-success w-50 fw-bold fs-2 btn-block >
  
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>