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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    // echo"Succes connected to the bd";
    $sql = "INSERT INTO `apply`. `apply` ( `name`, `email`, `subject`, `message`, `dt`) VALUES ('$name',  ' $email', ' $subject', ' $message', current_timestamp());";
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
    <title>Contact Us - Bus Pass Management System</title>
</head>
<body class="bg-[#f4f4f4] m-0 p-0">

<div class="container w-full md:w-1/2 rounded-[5px] md:mx-auto  bg-[#fff] shadow my-5" id="cont">
    <h2 class="text-center  text-[#333] my-4 text-[20px] md:text-[24px]">Contact Us</h2>
    <hr class="mb-4 ">
    <p class="text-center p-3 text-[12px] md:text-[14px]">If you have any questions or concerns regarding your bus pass, feel free to contact us using the form below.</p>


    <form class="contact-form mt-5 p-5" action="" method="">
        <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="name">Your Name:</label>
        <input class="w-full  py-1.5 px-2  mb-5 border-2 border-[#ccc] rounded-[5px] h-[35px] md:h-[40px] text-[14px] md:text-[16px] " type="text" id="name" name="name" placeholder="Name" required>

        <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="email">Your Email:</label>
        <input class="w-full  py-1.5 px-2  mb-5 border-2 border-[#ccc] rounded-[5px] h-[35px] md:h-[40px] text-[14px] md:text-[16px] " type="email" id="email" name="email" placeholder="email" required>

        <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="subject">Subject:</label>
        <input class="w-full  py-1.5 px-2  mb-5 border-2 border-[#ccc] rounded-[5px] h-[35px] md:h-[40px] text-[14px] md:text-[16px] " type="text" id="subject" name="subject" placeholder="Subject" required>

        <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="message">Message:</label>
        <textarea class="w-full  py-1.5 px-2  mb-5 border-2 border-[#ccc] rounded-[5px] h-[50px]   resize-none md:h-[150px] text-[14px] md:text-[16px]" id="message" name="message" placeholder="Massage" required></textarea>

        <div class=" ">
            <button class="block h-8 py-1 px-2 text-[10px] sm:text-[12px] md:text-[14px]  md:h-10  md:w-1/3 lg:text-[18px] xl:text-[20px] 2xl:text-[22px] bg-[#333] text-[#fff] border-none cursor-pointer rounded-[6px] md:rounded hover:bg-[#555]  " type="submit">Send Message</button>
        </div>
    </form>
</div>
<script>
    document.getElementById('cont').addEventListener("submit",(evt)=>{
    
    var name =document.getElementById("name").value
    var email =document.getElementById("email").value
    var sub =document.getElementById("subject").value
    var mass =document.getElementById("message").value
   
    if( !name || !email || !sub || !mass){
       alert("Please fill in all required fields.")
           evt.preventDefault()
          }else{
              alert("Form submitted successfully!")
    }
   })
   
</script>
</body>
</html>