<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $tc_guideline_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $tc_guideline_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $tc_guideline_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($tc_guideline_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($tc_guideline_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Transfer Certificate
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="transfer-certificate-guidelines"
                            class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($tc_guideline_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <?= $tc_guideline_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <p class="mt-2 text-gray-600 text-16px">Parents/Guardians seeking a Transfer Certificate (TC) from Delhi
                    Public School, Saharanpur are requested
                    to kindly follow the guidelines given below:</p>
                <p class="mt-4 text-gray-600 text-16px font-[700]">Procedure for Applying</p>
                <ul class="mt-2 text-gray-600 text-16px sm:ml-5" style="list-style:number">
                    <li>A written application for Transfer Certificate must be submitted to the school office, duly
                        signed by
                        the parent/guardian.</li>
                    <li>All school dues must be cleared before the Transfer Certificate is issued.</li>
                    <li>The student must return all library books, sports items, or any other school property before
                        applying.</li>
                    <li>The application should clearly mention:</li>
                    <ul class="mt-2 text-gray-600 text-16px sm:ml-7" style="list-style:disc">
                        <li>Student’s full name</li>

                        <li>Admission number</li>

                        <li>Class & section</li>

                        <li>Reason for transfer</li>

                        <li>Name of the school where admission is being sought (if applicable)</li>
                    </ul>
                </ul>
                <p class="mt-4 text-gray-600 text-16px font-[700]">
                    Issue of Transfer Certificate</p>
                <ul class="mt-2 text-gray-600 text-16px sm:ml-5" style="list-style:disc">
                    <li> The Transfer Certificate will be prepared and issued within 7 working days after the
                        application and
                        clearance of dues.</li>
                    <li> Parents/Guardians will be informed by the school office once the TC is ready for
                        collection.</li>
                    <li>The TC will be issued only after being signed by the Principal.</li>
                </ul> -->
            </div>
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>