<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and taste|New account</title>
    <link rel="icon" type="image" href="../image/logo1.png">
    <style>
*{
    box-sizing: border-box;
    margin: 0%;
    font-family: 'Alkatra', cursive;
}
body{
    background: #dbdee4;
}
.main{
    display: flex;
    margin: auto;
    padding: 10%;
    justify-content: space-between;
}
.login{
    padding: 50px;
}
input[type=text] ,input[type=email],input[type=number]{
        width: 100%;
        padding: 10px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
}
input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
      
input[type=submit] {
        width: 100%;
        background-color: #1877f2;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
      }
      
input[type=submit]:hover {
        background-color: #45a049;
        
    }

button{
    width: 100%;
    background-color: #42b72a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor:pointer;
}
button:hover {
    background-color: #45a049;
}
#log{
    background-color: aliceblue;
    border-radius: 5px;
    min-width: 700px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
}
h2{
    color: rgb(27, 26, 26);
    font-family: 'DynaPuff', cursive;
}
img{
margin-left: 25%;
vertical-align: auto;
}
a{
    text-decoration: none;
    color: rgba(255, 81, 0, 0.932);
}
textarea{
    width: 100%;
    margin-top: 5px;
}
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 900px) {
   .main{
    flex-direction: column;
   }
   img{
    margin: auto;
    max-width: 150px;
    max-height: 150px;
   }
   
   input[type=text],input[type=email],input[type=number]{
    width: 100%;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   }
   input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    #log{
        background-color: aliceblue;
        border-radius: 5px;
        min-width: 100%;
        
        box-shadow: 0 4px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
    }
    textarea{
        margin-bottom: 5px;
    }
}</style>
</head>
<body>
    <div class="main">

        <div class="login">
            <label class="logo"><a href="./index.php"><img src="https://i.postimg.cc/xkJ3b50H/logo1.png" alt="food & taste" width="200px" height="200px"></a></label>
            <br>
            <h2 class="quotes">Sorry—I’m in a relationship. With food.</h2>
        </div>
        <div class="login" id="log">
            <form method="post">
                <label for="FirstName">Name :*
                    <input type="text" name="fname" required>
                </label>
                <br>
                <label for="username"> User Name :*
                    <input type="text" name="username" required>
                </label>
                <br>
                <label for="Email id">Email id :*
                    <input type="email" name="email" id="email" required>
                </label>
                <br>
                <label for="mobile">Mobile No. :*
                    <input type="number" name="mobilenumber" id="mobilenumber" required>
                </label>
                <br>
                <span id="mob_msg"></span>
                <label for= "newpassword" >
                    New Password :*    <br>   
                    <input type="password" name="newpassword" id="newpassword" required>
                </label>
                <br>
                <br>
                <input type="submit" onclick="matchPassword()" value="Submit" name="submit">
                
            </form>
            <hr>
            <a href="index.php">
                <br>
                <button value="Login Now">Log in
                </button>
                </a>
        </div>


    </div>
    <!----------------------------------- JAVASCRIPT VALIDATION FOR CONFIRM AND NEW PASSWORD ------------------------------------------>
    <script>  
        function matchPassword() {  
            var pw1 = document.getElementById("newpassword").value;  
            var pw2 = document.getElementById("confirmpassword").value;  
            if(pw1 != pw2)  
                {   
                    document.getElementById("message").innerHTML ="**Password are not same";
                    return false; 
                } else {  
                     return true;
            }  
}  
</script>  
</body>
</html>
<!--------------------------------------------CONNECTION CHECK---------------------------------------------->
<?php 

include('includes/dbconnection.php');
    // Check if the registration form is submitted
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $emailid = $_POST['email'];
    $mobile_Number = $_POST['mobilenumber'];
    $new_password = md5($_POST['newpassword']);
   


    
            // Prepare the SQL query to insert a new user into the database
            $insertUserQuery = "INSERT INTO tbladmin(AdminName,UserName,MobileNumber,Email,Password) VALUES ('$fname','$username','$mobile_Number','$emailid','$new_password')";
            
            // Execute the query
            $result = mysqli_query($con,$insertUserQuery);
            if ($result) {
                //echo "Account created successfully!";
                echo "<script>alert('You have successfully registered');</script>";
                echo "<script>window.location.href='index.php'</script>";
                
            } else {
                echo "Error: " . $conn->error;
            }
            
        }  

?>


