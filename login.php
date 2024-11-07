<?php
$insert=FALSE;
if(isset($_POST['name'])){
    // set connection variable
    $server="localhost";
    $username="root";
    $password="";

    // create for database success 
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }

    // collect post variable 
    $userid=$_POST['userid'];
    $password=$_POST['password'];

    // echo"Succes connected to the bd";
    $sql = "INSERT INTO `apply`. `apply` ( `userid`, `password`, `dt`) VALUES ('$userid',  '  $password',  current_timestamp());";
    // echo $sql;



    // execute the query
    if($con->query($sql)==TRUE){
        // echo"successfully inserted";


        // Flag for successfull insertion
        $insert=TRUE;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login Page</title>
</head>

<body class="bg-[url('gehu.jpg')]  lg:bg-cover font-mono px-8 pt-1 ">
    <div class="container h-[80px] w-[300px]  md:h-[130px] md:w-[360px] bg-[#E6f4f7] text-[#ffffff] md:px-[30px] md:py-[50px] md:relative md:top-5 md:left-[400px] rounded-t-[5px] flex justify-center items-center border-x-[1px] border-[#e1e1e1] ">
        <div class="logo  h-[60px] w-[170px] md:h-[75px] md:w-[300px] bg-[url('logo4.png')] bg-contain bg-center bg-no-repeat md:px-4">
        </div>
    </div>

    <!-- 2 div -->
    <div class="contact w-[300px] px-5 py-8 md:w-[360px] md:px-[25px] md:py-[40px] bg-[#e6e0e03a] rounded-b-[3px] bg-clip-padding border-x-[1px] border-[#e1e1e1] border-b-[5px] md:relative md:top-5 md:left-[400px]">
        <form id="login" action="/login" method="POST">
            <div class="one">
                <input class="w-full px-[8px] md:px-[12px] h-[30px] md:h-[40px] text-[12px] md:text-[16px] mb-[15px] border-[1px] border-[#E6f4f7] rounded-[3px] " type="text" id="user-id" name="userid" placeholder="User ID" required>
            </div>
            <div class="two">
                <input class="w-full px-[8px] md:px-[12px] h-[30px] md:h-[40px] text-[12px] md:text-[16px] mb-[15px] border-[1px] border-[#E6f4f7] rounded-[3px]  " type="password" id="password" name="password" placeholder="password" required>
            </div>
            <button class="w-full h-[30px] text-[12px] md:text-[16px] md:h-[40px] p-1 md:p-[8px] mt-3 bg-[#007bff] text-[#fff] border-none cursor-pointer rounded-[3px] hover:bg-[#0056b3]" type="submit">LOGIN</button>
        </form>

        <footer>
            <div class="foot h-[61px] w-[90%] text-end p-[10px] mt-[5px] text-[#090905] text-[12px] md:text-[16px] ">
                <div class="foot-one mb-[10px]  ">
                    <a class="hover:underline hover:text-blue-900 " href="forget_pass.php">Forget password ?</a>
                </div>
                <div class="foot-two">
                    <a class="hover:underline hover:text-blue-900" href="forget_id.php">Forget ID ?</a>
                </div>
            </div>
            <hr class="my-[25px] ">
            <div class="">
                <p class=" text-[10px] md:text-[12px] text-center text-white font-bold hover:underline hover:text-blue-900 cursor-pointer">Powered by Cyborg IT Services (P) Ltd.</p>
            </div>
        </footer>
    </div>
</body>

</html>