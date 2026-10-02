<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $fee_structure_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $fee_structure_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $fee_structure_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($fee_structure_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($fee_structure_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Addmission
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
                        <a href="fee-structure" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($fee_structure_data['data']['sections'][0]['content_heading']) ?? "" ?>
                        </a>
                    </div>
                </li>
            </ol>
        </div>






        <div class=" mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="relative">

               
                <div>

                    <div class="md:w-[100%]">
                       

                        <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10"> -->
                            <?= $fee_structure_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                                <thead class="text-xs text-white uppercase bg-[#005224] ">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            S.No.
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Documents/Information
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Upload Document Link
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            1.
                                        </th>
                                        <td class="px-6 py-2">
                                            FEE STRUCTURE FOR SESSION 2024-2025
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://drive.google.com/file/d/16P2N3oZxI0aJ4SbJj19Ux3s-WoQBHdn2/view"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            2.
                                        </th>
                                        <td class="px-6 py-2">
                                            FEE STRUCTURE FOR SESSION 2025-2026
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://drive.google.com/file/d/1iBXCvgoW-PxrnXXGnmFWY0CMxkkTDDkE/view"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <!-- <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            // SVG for Minus icon
            const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

            // SVG for Plus icon
            const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script> -->
</body>