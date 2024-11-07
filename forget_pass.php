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
    $number=$_POST['number'];
    $email=$_POST['email'];
    $date=$_POST['date'];

    // echo"Succes connected to the bd";
    $sql = "INSERT INTO `apply`. `apply` ( `number`, `email`, `date`, `dt`) VALUES ('$number',  ' $email', ' $date', current_timestamp());";
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
    <title>forget Password</title>
</head>
<body class="bg-[url('gehu.jpg')]  lg:bg-cover font-mono px-8 pt-1">
    <div class="container h-[70px] md:h-[100px] w-[300px] md:w-[350px] bg-[#E6f4f7] text-black flex justify-center items-center text-[20px] md:text-[25px]  md:relative md:top-[20px] md:left-[400px] rounded-t-[5px]">
        <p>FORGOT PASSWORD</p>
    </div>
    <div class="contact  w-[300px] px-5 py-8 md:w-[350px] md:px-[25px] md:py-[40px] bg-[#e6e0e03a] rounded-b-[3px] bg-clip-padding border-x-[1px] border-[#e1e1e1] border-b-[5px] md:relative md:top-5 md:left-[400px] ">
        <form action="/login" method="POST">
            <div class="one">
                <input class="w-full px-[8px] md:px-[12px] h-[30px] md:h-[40px] text-[12px] md:text-[16px] mb-[15px] border-[1px] border-[#E6f4f7] rounded-[3px] " type="number" id="number" name="number" placeholder="Mobile No." required>
            </div>
            <div class="two">
                <input class="w-full px-[8px] md:px-[12px] h-[30px] md:h-[40px] text-[12px] md:text-[16px] mb-[15px] border-[1px] border-[#E6f4f7] rounded-[3px] " type="email" id="email" name="email" placeholder="Email-ID" required>
            </div>
            <div class="three">
                <input class="w-full px-[8px] md:px-[12px] h-[30px] md:h-[40px] text-[12px] md:text-[16px] mb-[15px] border-[1px] border-[#E6f4f7] rounded-[3px] " type="date" name="date" id="date" placeholder="Date Of Birth(DD/MM/YYYY)" required>
            </div>
            <div class="reset">
                <button class="w-full h-[30px] text-[12px] md:text-[16px] md:h-[40px] p-1 md:p-[8px] mt-3 bg-green-600 text-[#fff] border-none cursor-pointer rounded-[3px] hover:bg-green-800" id="reset"  type="submit">VERIFY</button>
            </div>
            <div class="sing">
                <button class="w-full h-[30px] text-[12px] md:text-[16px] md:h-[40px] p-1 md:p-[8px] mt-3 bg-yellow-500 text-[#fff] border-none cursor-pointer rounded-[3px] hover:bg-yellow-700" id="sing" type="submit">SING IN</button>
            </div>
        </form>
    </div>
</body>
</html>