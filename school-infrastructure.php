<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $school_infra_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $school_infra_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $school_infra_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-infrastructure" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div>

              <div class="md:w-[100%]">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
        <?= $school_infra_data['data']['sections'][1]['content'] ?? '' ?>
        <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white uppercase bg-[#005224]">
                <tr>
                    <th scope="col" class="px-6 py-4">S. No.</th>
                    <th scope="col" class="px-6 py-4">Information</th>
                    <th scope="col" class="px-6 py-4">Details</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</td>
                    <td class="px-6 py-2">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</td>
                    <td class="px-6 py-2">18717</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2</td>
                    <td class="px-6 py-2">NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)</td>
                    <td class="px-6 py-2">64 & 57.22</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</td>
                    <td class="px-6 py-2">NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</td>
                    <td class="px-6 py-2">
                        3 Computer Lab = 260 sq mtr<br>
                        1 Biology Lab = 92 sq mtr<br>
                        1 Chemistry Lab = 115 sq mtr<br>
                        1 Physics Lab = 92 sq mtr<br>
                        1 Composite Science Lab = 49 sq mtr<br>
                        1 Maths Lab = 65 sq mtr
                    </td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</td>
                    <td class="px-6 py-2">INTERNET FACILITY (Y/N)</td>
                    <td class="px-6 py-2">Yes</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</td>
                    <td class="px-6 py-2">NO. OF GIRLS TOILETS</td>
                    <td class="px-6 py-2">33</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6</td>
                    <td class="px-6 py-2">NO. OF BOYS TOILETS</td>
                    <td class="px-6 py-2">45</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7</td>
                    <td class="px-6 py-2">LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE SCHOOL INFRASTRUCTURE OF THE SCHOOL</td>
                    <td class="px-6 py-2">
                        <a href="https://www.youtube.com/embed/adNz7vFLHjY" target="_blank" class="font-medium text-[#005224] hover:underline">View Video</a>
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

    <script>
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
    </script>
</body>

</html>