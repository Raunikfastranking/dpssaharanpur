<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $our_curriculum_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $our_curriculum_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $our_curriculum_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image"
               >
                <div>
                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                        <?= strip_tags($our_curriculum_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                        <?= strip_tags($our_curriculum_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>


            </div>

            <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-curriculum" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"><?= strip_tags($our_curriculum_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">

                <div class="text-center">
                    <?= $our_curriculum_data['data']['sections'][1]['content'] ?? '' ?>
                </div>

                <!-- <div class="mt-10 relative">
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Delhi Public School Bareilly is affiliated with the Central Board of Secondary Education (CBSE)
                        New Delhi, which is the largest educational board in the country.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        We Follow the CBSE curriculum. The entire learning tenure of a child’s life is divided into
                        early education, elementary education, secondary education and senior secondary education. In
                        our 10+2 format, we have kindergarten segment consisting of Playgroup, Nursery and Preparatory.
                        The Primary Section includes classes I to V and the secondary section covers the classes VI-X.
                        The senior secondary comprises of classes XI & XII. Hence your child entire school life is set
                        within the best available infrastructure, faculty and compatible environment. Choosing the right
                        school, will be one of the most important decisions you will have to make to define your child's
                        future. Like hundreds of parents in the past, you too can be sure of ensuring the very best for
                        your child.
                    </p>
                </div>

                <div class="mt-5">
                    <p class="text-[22px] sm:text-left  text-gray-600 font-[650] ">STREAMS OFFERED</p>
                    <div class="overflow-x-auto mt-5">
                        <table class="min-w-full border border-gray-300 text-sm text-left">
                            <thead class="bg-gray-300 text-gray-800">
                                <tr>
                                    <th class="px-4 py-2">5th Subject</th>
                                    <th class="px-4 py-2">6th Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Applied Mathematics</td>
                                    <td class="px-4 py-2">HIND. PER INS.</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Computer Science</td>
                                    <td class="px-4 py-2">HIND MUSIC VOCAL</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Psychology</td>
                                    <td class="px-4 py-2">APP/COMMERCIAL ART</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Legal Studies</td>
                                    <td class="px-4 py-2">MULTIMEDIA</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Economics</td>
                                    <td class="px-4 py-2">MARKETING</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Physical Education</td>
                                    <td class="px-4 py-2">Yoga</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2">Hindi</td>
                                    <td class="px-4 py-2">NCC</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-200  text-gray-700 border-b dark:border-gray-700 text-[16px]">
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2">LIBRARY AND INFORMATION SCIENCE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="mt-5">
                    <p class="text-[22px] sm:text-left  text-gray-600 font-[650] ">ROBERT BURNS</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Learning is an eternal process, may it be self study, experience or being taught, it leads to
                        strengthening of character and mental powers. Education provides a systematic development of
                        such powers and it brings out the potential existence of children. It adorns them with self
                        confidence and self realization of their inborn qualities.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Education is one of the birth rights of every child and to provide it, is every parent’s supreme
                        duty. Good and quality education must be provided to all children and it is a good indication
                        for the nation that parents have recognized the value of education and are committed to put
                        their beloved ones in best of the schools around them. This is their cherished dream today.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        School is a place not only to acquire academic excellence but also to develop all faculties of
                        mind, intellectually and spiritually, which results in holistic development of a child.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Schooling starts at an early age of 3 years. Admission in PNC class is the initial step towards
                        a long journey. Well begun is half done. DPS Bareilly provides an excellent launching pad to
                        every child in the form of an outstanding system of education in Pre-Primary classes.
                    </p>


                </div> -->

            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>