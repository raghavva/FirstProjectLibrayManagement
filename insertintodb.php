<html>
<?php
    $First=$_POST['First'];
    $Last=$_POST['Last'];
    $USN=$_POST['USN'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    /*if(!$con)
        echo "not con to db";*/
    mysqli_select_db($con,'regstatus');
    $q="insert into studentreg (First,Last,USN,username,password)
    values('$First','$Last','$USN','$username','$password');";
    $status=mysqli_query($con,$q);
    
    
   /* if(!$status)
        echo "Error:" .$q."<br>".
        mysqli_error($con);*/
?>
   
  <head>
      <h1>REGISTRATION SUCCESSFULL</h1>
    <style>
        h1{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    position: absolute; left: 40px; top: 450px;
        font-size: 30px;                

} 
        img{
    width: 100%;
    height: 400px;
}
        .logoutbtn{
                position: absolute;
                right: 20px;
                top: 16px;
                background-color:darkkhaki;
                font-size:20px;
                border-style: solid;
                border-color: red;
                
            }
        .homebtn{
            position: absolute;
            right: 100px;
            top :16px;
            font-size: 20px;
            background-color: darkkhaki;
            border-style: solid;
            border-color: green;
            
        }
        body{
    background-color: burlywood;
    
}
        .heading{
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
       </head>
    <p1 class="heading">To continue using our service please go to home page.</p1>
     <div>
        <img src="3.jpg">
    </div>
    <body>
    <button onclick="logout()" class="logoutbtn">Logout</button>
        <button onclick="home()" class="homebtn">Go To Homepage</button>
      
       <script>
        function logout()
        {
            window.location.href="login.php";
        }
           function home()
           {
             window.location.href="home.php";  
           }
        
    </script>
   </body>
</html>
