<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $parents_expected_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $parents_expected_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $parents_expected_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($parents_expected_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($parents_expected_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Prospectus
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="parents-expected-to" class="ms-1 text-sm font-medium text-blue-main">  <?= strip_tags($parents_expected_data['data']['sections'][0]['content_heading']) ?? "" ?>
                        </a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class=" gap-10  ">
               
                <div class="mx-3 pb-0 sm:pt-0 pt-[100px] ">
                    <div>
                        <?= $parents_expected_data['data']['sections'][1]['content'] ?>
                        <!-- <p class="text-[16px] text-gray-500 leading-8">

                            Monitor their ward’s progress by checking the school almanac every day and paying attention to their punctuality, discipline and submission of school assignments.
                           <br><br> To encourage their ward to take a balanced interest in studies, co-curricular activities and sports.
                           <br><br> To inform the school immediately, if there is any change in address, telephone numbers and bus route.
                           <br><br> To restrict pocket money to minimal. Excessive spending in school should be discouraged.
                           <br><br> To ensure that during their ward’s absence from school, work done in the class is made up for.
                           <br><br> To provide a supportive value-based environment to their ward at home by discretion and parental judgement, keep track of their ward’s mental health and emotions.
                           <br><br> To monitor the internet access of their ward and limit television viewing to appropriate programmes and duration.
                           <br><br> Contact school to discuss and decide a plan of action to handle the difficulties (academic as well and behavioural) of their ward and to seek guidance. Your letters will be replied to after discussion with the concerned teachers.
                           <br><br> To ensure that their ward appears for all tests as per the schedule given in the Almanac. In case the child is unable to take the examination, prior intimation must be given to the Class Teacher in writing.
                           <br><br> To discourage their ward from taking additional leaves during examinations days.
                        </p> -->

                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>