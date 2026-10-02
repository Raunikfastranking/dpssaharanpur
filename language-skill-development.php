<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $lsd_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $lsd_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $lsd_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($lsd_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($lsd_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Currciulum and Assessment
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Syllabus
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
                        <a href="language-skill-development"
                            class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($lsd_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <?= $lsd_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <p class="mt-2 text-gray-600 text-16px">At Delhi Public School, Saharanpur, we recognize that language
                    is a key to culture, communication, and
                    cognitive development. Our language programs are thoughtfully designed to help students develop
                    strong
                    proficiency, cultural appreciation, and effective communication skills in Hindi, Urdu, and Sanskrit.
                </p>
                <p class="mt-4 text-gray-600 text-18px font-[700]"> Hindi</p>
                <p class="mt-2 text-gray-600 text-16px">As the national language, Hindi holds a special place in our
                    curriculum. We emphasize comprehensive
                    language skills including reading, writing, speaking, and listening. Our approach integrates
                    grammar,
                    vocabulary, and literature, enabling students to connect with rich cultural heritage and
                    contemporary
                    usage alike.</p>
                <p class="mt-4 text-gray-600 text-18px font-[700]">Urdu</p>
                <p class="mt-2 text-gray-600 text-16px">Urdu is nurtured as a language of poetry, history, and artistic
                    expression. We provide students with
                    opportunities to learn the script, develop conversational fluency, and explore classic and modern
                    literary works. This helps broaden their cultural understanding and enhances their appreciation of
                    linguistic beauty.</p>
                <p class="mt-4 text-gray-600 text-18px font-[700]">Sanskrit</p>
                <p class="mt-2 text-gray-600 text-16px">As an ancient language and the foundation of many Indian
                    languages, Sanskrit is taught to deepen
                    students’ understanding of classical texts, philosophy, and linguistic roots. Our Sanskrit
                    curriculum
                    promotes analytical thinking and fosters respect for India’s intellectual traditions.
                    Through dedicated instruction and engaging activities, DPS Saharanpur ensures that students not only
                    master these languages but also appreciate their cultural significance, enriching their overall
                    educational experience.</p> -->

            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>