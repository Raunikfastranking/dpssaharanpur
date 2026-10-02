<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $doc_and_info_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $doc_and_info_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $doc_and_info_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($doc_and_info_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($doc_and_info_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
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
                        <a href="documents-and-information"
                            class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($doc_and_info_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <div>

                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <?= $doc_and_info_data['data']['sections'][1]['content'] ?? '' ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Sr No</th>
                                        <th scope="col" class="px-6 py-4">Documents/Information</th>
                                        <th scope="col" class="px-6 py-4">Document Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</th>
                                        <td class="px-6 py-2">COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/ccd82025529143224495.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2</th>
                                        <td class="px-6 py-2">COPIES OF AFFILIATION /UPGRADATION LETTER AND RECENT
                                            EXTENSION OF ALLIATION, IF ANY</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/c17a2023818165843899.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</th>
                                        <td class="px-6 py-2">COPY OF VALID BUILDING- SAFETY CERTIFICATE AS PER THE
                                            NATIONAL BUILDING CODE</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/563f2024812151224811.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</th>
                                        <td class="px-6 py-2">Copies of Recognition Certificate Under RTE Act 2009, and
                                            it's</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/596c20238181747412.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</th>
                                        <td class="px-6 py-2">COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED,IF
                                            APPLICABLE,BY THE STATE GOVT./UT
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/8bb120238181744097.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6</th>
                                        <td class="px-6 py-2">DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                            ALLIATION/UPGRADATION/EXTENSION OF AFFLIATION OR SELF CERTIFICATION</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/40d0202381817558866.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7</th>
                                        <td class="px-6 py-2">COPY OF VALID FIRE-SAFETY CERTIFICATE ISSUED BY THE
                                            COMPETENT AUTHORITY</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/827e202398172038393.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">8</th>
                                        <td class="px-6 py-2">Copies of Societies, Trust, Company, Registration, Renewal
                                            Certificate</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpssre.superhouseerp.com/Uploads/Site/DPSSRE/DocsAndInfo/Pdf/53502023819145911146.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
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

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>