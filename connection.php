    <!-- //Connection to the database -->
    <?php
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourmanagementsystem";
    
    $conn = mysqli_Connect($servername, $username, $password, $dbname);
    if ($conn)
    {
       echo "connected";
    }

    
