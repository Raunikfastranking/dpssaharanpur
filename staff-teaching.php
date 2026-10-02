<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $staff_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $staff_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $staff_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image"
          >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($staff_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($staff_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosures
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
                        <a href="staff-teaching" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($staff_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="text-[16px] text-gray-600 space-y-10 mb-16">
                <?= $staff_data['data']['sections'][1]['content_heading'] ?? '' ?>


                <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                    <div class="sm:mt-10 relative">
                        <div>
                            <div class="md:w-[100%]">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                                    <?= $staff_data['data']['sections'][1]['content'] ?? '' ?>
                                    <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                        <thead class="text-xs text-white uppercase bg-[#005224]">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">Sr No</th>
                                                <th scope="col" class="px-6 py-4">INFORMATION</th>
                                                <th scope="col" class="px-6 py-4">DETAILS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</th>
                                                <td class="px-6 py-2">Principal</td>
                                                <td class="px-6 py-2">Ms Adesh Sisodia</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap"
                                                    rowspan="4">2</th>
                                                <td class="px-6 py-2">Total No. of Teachers</td>
                                                <td class="px-6 py-2">69</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <td class="px-6 py-2 pl-10">* PGT</td>
                                                <td class="px-6 py-2">19</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <td class="px-6 py-2 pl-10">* TGT</td>
                                                <td class="px-6 py-2">30</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <td class="px-6 py-2 pl-10">* PRT</td>
                                                <td class="px-6 py-2">20</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</th>
                                                <td class="px-6 py-2">Teachers Section Ratio</td>
                                                <td class="px-6 py-2">01:01.5</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</th>
                                                <td class="px-6 py-2">Details of Special Educator</td>
                                                <td class="px-6 py-2">Ms Shivani Takkar</td>
                                            </tr>
                                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                                <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</th>
                                                <td class="px-6 py-2">Details of Counsellor and Wellness Teacher</td>
                                                <td class="px-6 py-2">Ms Sarabjeet Kaur</td>
                                            </tr>
                                        </tbody>

                                    </table> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- PRE-PRIMARY WING -->
                <!-- <div class="bg-white shadow-md rounded-xl p-5 border">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Pre-Primary Wing</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 text-left text-sm">
                            <thead class="bg-gray-100 text-gray-700 uppercase text-[13px]">
                                <tr>
                                    <th class="px-4 py-2 border">S.No.</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">Designation</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Ariba Khan</td>
                                    <td class="px-4 py-2">NTT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Muskan Verma</td>
                                    <td class="px-4 py-2">NTT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">3</td>
                                    <td class="px-4 py-2">Pallavi Ghai</td>
                                    <td class="px-4 py-2">NTT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">4</td>
                                    <td class="px-4 py-2">Shalini Sehgal</td>
                                    <td class="px-4 py-2">NTT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">5</td>
                                    <td class="px-4 py-2">Shweta Chawla</td>
                                    <td class="px-4 py-2">NTT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <!-- PRIMARY WING -->
                <!-- <div class="bg-white shadow-md rounded-xl p-5 border">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Primary Wing</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 text-left text-sm">
                            <thead class="bg-gray-100 text-gray-700 uppercase text-[13px]">
                                <tr>
                                    <th class="px-4 py-2 border">S.No.</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">Designation</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Aanchal Sachdeva</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Akshita Verma</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">3</td>
                                    <td class="px-4 py-2">Diksha Thakral</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">4</td>
                                    <td class="px-4 py-2">Gauri Sharma</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">5</td>
                                    <td class="px-4 py-2">Haya Noor</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">6</td>
                                    <td class="px-4 py-2">Leena Jain</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">7</td>
                                    <td class="px-4 py-2">Meenakshi Singh</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">8</td>
                                    <td class="px-4 py-2">Mehak Arora</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">9</td>
                                    <td class="px-4 py-2">Nancy Dua</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">10</td>
                                    <td class="px-4 py-2">Pooja Tehri</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">11</td>
                                    <td class="px-4 py-2">Pratima Vatsa</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">12</td>
                                    <td class="px-4 py-2">Sakshi Makkar Prakash</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">13</td>
                                    <td class="px-4 py-2">Sangeeta Raswant</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">14</td>
                                    <td class="px-4 py-2">Shivani Takkar</td>
                                    <td class="px-4 py-2">PRT / HEADMISTRESS</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">15</td>
                                    <td class="px-4 py-2">Shobha Virmani</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">16</td>
                                    <td class="px-4 py-2">Sonia Banga</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">17</td>
                                    <td class="px-4 py-2">Sonia Chawla</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">18</td>
                                    <td class="px-4 py-2">Sonia Mehta</td>
                                    <td class="px-4 py-2">PRT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <!-- MIDDLE WING -->
                <!-- <div class="bg-white shadow-md rounded-xl p-5 border">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Middle Wing</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 text-left text-sm">
                            <thead class="bg-gray-100 text-gray-700 uppercase text-[13px]">
                                <tr>
                                    <th class="px-4 py-2 border">S.No.</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">Designation</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Amit Garg</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Anu Jain</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">3</td>
                                    <td class="px-4 py-2">Hoor Zaman</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">4</td>
                                    <td class="px-4 py-2">Kavya Singh</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">5</td>
                                    <td class="px-4 py-2">Kiran Madaan</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">6</td>
                                    <td class="px-4 py-2">Meera Mahajan</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">7</td>
                                    <td class="px-4 py-2">Monika Sehgal</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">8</td>
                                    <td class="px-4 py-2">Neeraj Kumar</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">9</td>
                                    <td class="px-4 py-2">Nidhi Talwar</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">10</td>
                                    <td class="px-4 py-2">Pragya Bharti</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">11</td>
                                    <td class="px-4 py-2">Preeti Sharma</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">12</td>
                                    <td class="px-4 py-2">Prince Jain</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">13</td>
                                    <td class="px-4 py-2">Reema Narang</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">14</td>
                                    <td class="px-4 py-2">Ritu Kakkar</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">15</td>
                                    <td class="px-4 py-2">Ruchi Vachher</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">16</td>
                                    <td class="px-4 py-2">Sachin Madan</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">17</td>
                                    <td class="px-4 py-2">Sadaf Saeed</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">18</td>
                                    <td class="px-4 py-2">Sakshi Dixit</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">19</td>
                                    <td class="px-4 py-2">Santosh Kumari</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">20</td>
                                    <td class="px-4 py-2">Sapna Naik</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">21</td>
                                    <td class="px-4 py-2">Sarabjeet Kaur Anand</td>
                                    <td class="px-4 py-2">TGT / COORDINATOR</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">22</td>
                                    <td class="px-4 py-2">Sarang Gupta</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">23</td>
                                    <td class="px-4 py-2">Shalini Tyagi</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">24</td>
                                    <td class="px-4 py-2">Shivam Basson</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">25</td>
                                    <td class="px-4 py-2">Shivani Tehri</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">26</td>
                                    <td class="px-4 py-2">Saumya Jain</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">27</td>
                                    <td class="px-4 py-2">Rahul Verma</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">28</td>
                                    <td class="px-4 py-2">Shivam Agarwal</td>
                                    <td class="px-4 py-2">TGT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <!-- SENIOR WING -->
                <!-- <div class="bg-white shadow-md rounded-xl p-5 border">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Senior Wing</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 text-left text-sm">
                            <thead class="bg-gray-100 text-gray-700 uppercase text-[13px]">
                                <tr>
                                    <th class="px-4 py-2 border">S.No.</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">Designation</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Anuj Kumar</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Deepti Chhabra</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">3</td>
                                    <td class="px-4 py-2">Ekagra Mittal</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">4</td>
                                    <td class="px-4 py-2">Gaurav Mittal</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">5</td>
                                    <td class="px-4 py-2">Gursimran Singh Bagga</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">6</td>
                                    <td class="px-4 py-2">Heena Arshi</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">7</td>
                                    <td class="px-4 py-2">Manoj Kumar Dhiman</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">8</td>
                                    <td class="px-4 py-2">Nahid Afshan</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">9</td>
                                    <td class="px-4 py-2">Pallavi Gautam</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">10</td>
                                    <td class="px-4 py-2">Rachna Dawar</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">11</td>
                                    <td class="px-4 py-2">Ramandeep Kaur</td>
                                    <td class="px-4 py-2">PGT / School Coordinator</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">12</td>
                                    <td class="px-4 py-2">Sonam Arora</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">13</td>
                                    <td class="px-4 py-2">Vivek Tyagi</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">14</td>
                                    <td class="px-4 py-2">Wajiha Shams</td>
                                    <td class="px-4 py-2">PGT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <!-- ACTIVITY TEACHERS -->
                <!-- <div class="bg-white shadow-md rounded-xl p-5 border">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Activity Teachers</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 text-left text-sm">
                            <thead class="bg-gray-100 text-gray-700 uppercase text-[13px]">
                                <tr>
                                    <th class="px-4 py-2 border">S.No.</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">Designation</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Bhima Bhatt</td>
                                    <td class="px-4 py-2">Music Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Tushar Chhetri</td>
                                    <td class="px-4 py-2">Music Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">3</td>
                                    <td class="px-4 py-2">Ashwani Sharma</td>
                                    <td class="px-4 py-2">Dance Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">4</td>
                                    <td class="px-4 py-2">Aparna Negi</td>
                                    <td class="px-4 py-2">Dance Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">5</td>
                                    <td class="px-4 py-2">Nidhi Verma</td>
                                    <td class="px-4 py-2">Art Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">6</td>
                                    <td class="px-4 py-2">Reshu Chaudhary</td>
                                    <td class="px-4 py-2">Art Teacher</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">7</td>
                                    <td class="px-4 py-2">Kumkum Arora</td>
                                    <td class="px-4 py-2">Librarian</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">8</td>
                                    <td class="px-4 py-2">Tanveer</td>
                                    <td class="px-4 py-2">Swimming Coach</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">9</td>
                                    <td class="px-4 py-2">Sapna</td>
                                    <td class="px-4 py-2">Swimming Coach</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">10</td>
                                    <td class="px-4 py-2">Arjun</td>
                                    <td class="px-4 py-2">PTI</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">11</td>
                                    <td class="px-4 py-2">Ashutosh Kumar</td>
                                    <td class="px-4 py-2">PTI</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">12</td>
                                    <td class="px-4 py-2">Shivani Rawat</td>
                                    <td class="px-4 py-2">PTI</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

            </div>

            <!-- <div class="sm:mt-10 relative">

                <div>

                    <div class="md:w-[100%]">


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <table class="min-w-full border-collapse border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="border border-gray-200 px-4 py-2 text-left">S. No.</th>
                                        <th class="border border-gray-200 px-4 py-2 text-left">INFORMATION</th>
                                        <th class="border border-gray-200 px-4 py-2 text-left">DETAILS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">1</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">PRINCIPAL</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">MS ADESH SISODIA</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left" rowspan="4">2</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">TOTAL NO. OF TEACHERS</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">75</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">* PGT</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">16</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">* TGT</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">31</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">* PRT</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">28</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">3</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">TEACHERS SECTION RATIO</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">01:22</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">4</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">DETAILS OF SPECIAL EDUCATOR</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">Ms Shivani Takkar</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-left">5</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                        <td class="border border-gray-200 px-4 py-2 text-left">Ms Sarabjeet Kaur</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>