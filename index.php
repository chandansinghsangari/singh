<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <img src="logo4.png" alt="" class="p-4 w-36 md:w-56 lg:w-72 xl:w-80 2xl:w-96">
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 ">
                    <li>
                        <a class="hover:text-gray-500 " href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 " href="apply.php">Apply for Pass</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 " href="renew.php">Renew Pass</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 " href="contect.php">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white  rounded-full hover:bg-[#87acec] w-[60px] h-[30px] text-[14px] p-1 md:text-[18px] md:w-[100px] md:px-5 md:py-1 md:h-[50px]"><a href="login.php">Sign in</a></button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>
    <main >
        <section id="about">
            <h2 class="text-center font-bold  mt-4 text-[14px] sm:text-[18px] md:text-[20px] lg:text-[22px] xl:text-[24px] 2xl:text-[30px]">About Us</h2>
            <p class="text-center px-2 py-4 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] 2xl:text-[22px] ">Manage your bus passes online easily with our system. Apply for a new pass, renew existing ones, and
                more.</p>
        </section>

        <section id="features">
            <h2 class="text-center font-bold  mt-4 text-[14px] sm:text-[18px] md:text-[20px] lg:text-[22px] xl:text-[24px] 2xl:text-[30px]" >Features</h2>
            <ul class="m-4">
                <li class="text-center px-1 py-1 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] 2xl:text-[22px]">Easy Application Process</li>
                <li class="text-center px-1 py-1 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] 2xl:text-[22px]">Online Payment</li>
                <li class="text-center px-1 py-1 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] 2xl:text-[22px]">Quick Renewal</li>
                <li class="text-center px-1 py-1 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] 2xl:text-[22px]">Customer Support</li>
            </ul>
        </section>

        <section id="cta ">
            <h2 class="text-center font-bold  mt-4 text-[14px] sm:text-[18px] md:text-[20px] lg:text-[22px] xl:text-[24px] 2xl:text-[30px]">Get Started</h2>
           <div class="button flex flex-col items-center justify-center p-4 ">
            <button class="bg-black cursor-pointer text-white text-[12px] h-8 rounded-2xl px-4 my-2 w-[130px] md:text-[14px] md:h-10 md:w-[150px]" onclick="location.href='apply.php'">Apply New Pass</button>
            <button class="bg-black cursor-pointer text-white text-[12px] h-8 rounded-2xl px-4 my-2 w-[135px] md:text-[14px] md:h-10 md:w-[150px]" onclick="location.href='renew.php'">Renew Your Pass</button>
           </div>
        </section>
    </main>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>