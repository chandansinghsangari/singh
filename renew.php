
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
    $dob=$_POST['dob'];
    $passnumber=$_POST['passnumber'];
    $renewaldate=$_POST['renewaldate'];

    // echo"Succes connected to the bd";
    $sql = "INSERT INTO `apply`. `apply` ( `name`, `email`,  `dob`, `passnumber`,   `renewaldate`, `dt`) VALUES ('$name', ' $email', ' $dob', ' $passnumber ', ' $Stoppage', '$renewaldate', current_timestamp());";
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
    <title>Bus Pass Renewal System</title>
</head>

<body class="bg-[#f4f4f4] p-0 m-0 flex justify-center items-center">

    <div class="container bg-[#fff] p-5 rounded-lg shadow max-w-[400px] w-full">
        <h1 class="text-[#333] mb-5 text-[24px] text-center">Renew Bus Pass</h1>
        <hr class="mb-4">
        <form id="renew" action="/renew" method="POST">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="name">Full Name</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px] mb-4 "
                    type="text" id="name" name="name" required>

                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="email">Email</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px] mb-4 "
                    type="email" id="email" name="email" required>

                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="dob">Date of Birth</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px] mb-4 "
                    type="date" id="dob" name="dob" required>

                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="pass-number">Bus Pass
                    Number</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px] mb-4 "
                    type="text" id="pass-number" name="passnumber" required>

                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="renewal-date">Renewal
                    Date</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px] mb-4 "
                    type="date" id="renewal-date" name="renewaldate" required>

                <button
                    class="w-1/4 h-8 py-0.5 text-[10px] sm:text-[12px] md:text-[14px]  md:h-10  md:w-1/3 lg:text-[18px] xl:text-[20px]   bg-[#28a745] text-white border-none rounded-[6px]  md:rounded cursor-pointer  hover:bg-[#218838] mt-4"
                    type="submit">Renew Pass</button>
        </form>
    </div>
    <script>
        document.getElementById("renew").addEventListener("submit", (evt) => {
            var name = document.getElementById("name").value
            var email = document.getElementById("email").value
            var dob = document.getElementById("dob").value
            var passnumber = document.getElementById("pass-number").value
            var renewaldate = document.getElementById("renewal-date").value

            if (!name || !email || !dob || !passnumber || !renewaldate) {
                alert("Please fill in all required fields.")
                evt.preventDefault()
            }
            else {
                alert("Form submitted successfully!")
            }

        })
    </script>

</body>

</html>