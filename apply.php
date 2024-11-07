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
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $Stoppage=$_POST['Stoppage'];
    $photo=$_POST['photo'];
    $signature=$_POST['signature'];

    // echo"Succes connected to the bd";
    $sql = "INSERT INTO `apply`. `apply` ( `name`, `dob`, `address`, `email`, `phone`, `Stoppage`, `photo`, `signature`, `dt`) VALUES ('$name', '$dob', '$address', ' $email', '$phone', ' $Stoppage', '$photo',' $signature', current_timestamp());";
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
    <title>Bus Pass Management System</title>
</head>

<body class="bg-[#f4f4f4] m-0 p-0 flex justify-center items-center ">
    <div class="container bg-white p-[20px] rounded-lg shadow w-full max-w-96">
        <h1 class="text-center text-[#333] mb-[28px] text-[20px] md:text-[24px]">Apply for a New Bus Pass</h1>
        <hr class="mb-4">
        <form id="busPassForm" action="apply.php" method="post">
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="name">Full Name:</label>
                <input class="w-full  py-1.5 px-2  border-2 border-[#ccc] rounded box-border h-[35px] md:h-[40px]  " type="text" id="name"
                    name="name" required>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="dob">Date of Birth:</label>
                <input class="w-full py-1.5 px-2  border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px]  " type="date" id="dob" name="dob"
                    required>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="address">Address:</label>
                <textarea class="w-full py-1.5 px-2  border-2 border-[#ccc] rounded box-border resize-y " id="address"
                    name="address" required></textarea>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="email">Email:</label>
                <input class="w-full py-1.5 px-2  border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px]" type="email" id="email"
                    name="email" required>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="phone">Phone Number:</label>
                <input class="w-full py-1.5 px-2  border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px]" type="tel" id="phone"
                    name="phone" required>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="phone">Stoppage:</label>
                <input class="w-full py-1.5 px-2  border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px]" type="text" id="Stoppage"
                    name="Stoppage" required>
            </div>
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="photo">Upload Photo:</label>
                <input class="w-full  py-1.5 px-2 border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px] text-[10px] md:text-[12px]" type="file" id="photo"
                    name="photo" accept="image/*" required>
            </div>
            <!-- <div class="form-group">
                <label for="idProof">Upload ID Proof:</label>
                <input type="file" id="idProof" name="idProof" accept="application/pdf,image/*" required>
            </div> -->
            <div class="form-group mb-[15px]">
                <label class="block mb-[10px] text-[#666] text-[14px] md:text-[16px]" for="signature">Signature:</label>
                <input class="w-full py-1.5 px-2 border-2 border-[#ccc] rounded box-border  h-[35px] md:h-[40px] text-[10px] md:text-[12px]" type="file" id="signature"
                    name="signature" accept="application/pdf,image/*" required>
            </div>

            <div class="form-group mb-[15px] ">
                <button
                    class=" w-1/4 h-8 py-0.5 text-[12px] sm:text-[12px] md:text-[14px]  md:h-10  md:w-1/3  lg:text-[18px] xl:text-[20px] 2xl:text-[22px] bg-[#28a745] text-white border-none rounded-[6px]  md:rounded cursor-pointer  hover:bg-[#218838] mt-4"
                    type="submit" > Apply</button>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('busPassForm').addEventListener('submit', function (event) {
            // Simple client-side validation could be added here
            var name = document.getElementById('name').value;
            var dob = document.getElementById('dob').value;
            var address = document.getElementById('address').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var photo = document.getElementById('photo').value;
            var Stoppage = document.getElementById('Stoppage').value;
            var sing = document.getElementById('signature').value;

            if (!name || !dob || !address || !email || !phone || !photo || !Stoppage || !sing) {
                alert("Please fill in all required fields.");
                event.preventDefault(); // Prevent the form from submitting
            } else {
                alert("Form submitted successfully!");
            }

        });
    </script>
</body>

</html>