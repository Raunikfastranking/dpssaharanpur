<?php 
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Saharanpur | Online Enquiry Form</title>
    <style>
        /* Custom scrollbar for city list */
        #cityList::-webkit-scrollbar { width: 5px; }
        #cityList::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>

<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] text-[28px] font-[700] text-white text-left ml-4 sm:ml-[7rem] hr-line relative leading-9">
                    Online Enquiry Form
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/" class="text-sm font-medium text-blue-main">Home</a>
                </li>
                <li class="flex items-center text-blue-main">
                    <svg class="w-3 h-3 mx-1" fill="none" viewBox="0 0 6 10" stroke="currentColor"><path stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                    <span class="text-sm font-medium">Admission</span>
                </li>
                <li class="flex items-center text-blue-main">
                    <svg class="w-3 h-3 mx-1" fill="none" viewBox="0 0 6 10" stroke="currentColor"><path stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                    <a href="online-enquiry-form" class="text-sm font-medium">Online Enquiry Form</a>
                </li>
            </ol>
        </div>

        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>

                <div class="ee-form-shell my-10 mx-auto w-full">
                    <div id="ee-form-22"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/superhouseeducation/ee-form-widget/form-22/widget.js"></script>

    <?php include "includes/foot.php" ?>
</body>
</html>