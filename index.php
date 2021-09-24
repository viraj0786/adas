<?php
    $insert = false;
    if (isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);
    if (!$con){
        die("connection error " . mysqli_connect_error());
    }
    //echo "success";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    //$phone = $_POST['phone'];   
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `us_trip`.`trip` (`name`, `age`, `gender`, `eamil`, `other`, `dt`) 
        VALUES ('$name', '$age', '$gender', '$email', '$desc', current_timestamp());";
        //  echo $sql;

        if($con->query($sql) == true){
            //echo "sucsess ";
            $insert = true;
        }
        else{
            echo "error $con->error";
        }
        
    $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <section class="navbar">
        <div class="container">
            <nav>
                <div class="logo">IIT kharagpur</div>
                <div>
                    <ul>
                        <li>home</li>
                        <li>sign</li>
                        <li>login</li>
                    </ul>
                </div>
            </nav>
            <div class="form-heading" >
                <h1>welcometo IIT khadagpur US trip</h1>
                <h3>enter your details and submit the form</h3>
                <?php
                    if($insert == true){
                        echo "<h4>data fill susssesfully</h4>";
                    }
                    
                ?>
                </div>
            <div class="form-data">
                <form action="http://localhost/codewithharry/   " method="POST" >
                    <input type="text" name="name" id="name" placeholder="enter your name">
                    <input type="number" name="age" id="age" placeholder="enter your age">
                    <input type="text" name="gender" id="gender" placeholder="enter your gender">
                    <input type="email" name="email" id="email" placeholder="enter your eamil">
                    <input type="phone" name="phone" id="phone" placeholder="enter your phone number">
                    <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
                        <div class="btn-div">
                         <button class="btn">submit</button>
                        <button class="btn">reset</button>
                        </div>
                </form>
            </div>
        </div>
    </section>

    <script src="./index.js">
   </script>
</body>
</html>