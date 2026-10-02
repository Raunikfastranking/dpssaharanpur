<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $withdrawal_policy_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $withdrawal_policy_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $withdrawal_policy_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($withdrawal_policy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($withdrawal_policy_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="withdrawal-policy" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($withdrawal_policy_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="text-[16px] text-gray-600 space-y-4">
                <?= $withdrawal_policy_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <p>One clear calendar month's notice in writing, or a month's fees in lieu of such notice must be given before a pupil can be withdrawn.</p>

                <p>Those who leave the school in April must in all cases pay the fees for the month of June.</p>

                <p>Transfer Certificates are not issued until all dues of the school are settled.</p>

                <p>Students can be asked to leave the school on the following grounds:</p>
                <ul class="list-disc pl-6">
                    <li>Indiscipline</li>
                    <li>Any two detentions</li>
                </ul>

                <p>A student who fails twice will not be permitted to continue his/her studies in the school, especially if he/she is below average in that class.</p>

                <p>If the name has been struck off the rolls twice, the student will not be readmitted to school.</p> -->
            </div>

        </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>