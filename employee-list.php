
<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $emp_list_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $emp_list_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $emp_list_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Employee List
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Employee List
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">General Information
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="employee-list.php" class="ms-1 text-sm font-medium text-blue-main">Employee List</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
           
  <div class="max-w-5xl mx-auto bg-white shadow-sm rounded-lg ">
  
    <div class="overflow-x-auto">
        <?= $emp_list_data['data']['sections'][1]['content'] ?? '' ?>
      <!-- <table class="min-w-full border border-gray-300 text-left text-gray-600">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
          <tr>
            <th class="px-4 py-2 border">S.No.</th>
            <th class="px-4 py-2 border">Name</th>
            <th class="px-4 py-2 border">Designation</th>
          </tr>
        </thead>
        <tbody class="text-gray-800">
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">1</td>
            <td class="px-4 py-2 border">MS ADESH SISODIA</td>
            <td class="px-4 py-2 border">PRINCIPAL</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">2</td>
            <td class="px-4 py-2 border">AHMAD JAVED</td>
            <td class="px-4 py-2 border">ADMIN MANAGER</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">3</td>
            <td class="px-4 py-2 border">AJAB SINGH</td>
            <td class="px-4 py-2 border">ADMISSION INCHARGE</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">4</td>
            <td class="px-4 py-2 border">ANKIT JAIN</td>
            <td class="px-4 py-2 border">ACCOUNTANT</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">5</td>
            <td class="px-4 py-2 border">SHOAIB MALIK</td>
            <td class="px-4 py-2 border">ERP EXECUTIVE / OFFICE CLERK</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">6</td>
            <td class="px-4 py-2 border">SHALU VERMA</td>
            <td class="px-4 py-2 border">RECEPTIONIST</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">7</td>
            <td class="px-4 py-2 border">ANUJ KUMAR</td>
            <td class="px-4 py-2 border">COMPUTER LAB ASSISTANT</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">8</td>
            <td class="px-4 py-2 border">NARES KUMAR</td>
            <td class="px-4 py-2 border">COMPUTER LAB ASSISTANT</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">9</td>
            <td class="px-4 py-2 border">PRAMOD KUMAR</td>
            <td class="px-4 py-2 border">SCIENCE LAB ASSISTANT</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">10</td>
            <td class="px-4 py-2 border">NEHA MASSEY</td>
            <td class="px-4 py-2 border">NURSE</td>
          </tr>
          <tr class="odd:bg-white even:bg-gray-50">
            <td class="px-4 py-2 border">11</td>
            <td class="px-4 py-2 border">YASH GUPTA</td>
            <td class="px-4 py-2 border">STORE INCHARGE</td>
          </tr>
        </tbody>
      </table> -->
    </div>
  </div>

        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>