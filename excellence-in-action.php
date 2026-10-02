<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $excellence_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $excellence_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $excellence_data['meta_keywords'] ?? "" ?>">
</head>


<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($excellence_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($excellence_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="excellence-in-action.php" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($excellence_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0  mb-5">
            <div>
                <?= $excellence_data['data']['sections'][1]['content'] ?? "" ?>
            </div>
            <div class="md:grid grid-cols-2 gap-10 justify-between gap-6">
                <?php if (!empty($excellence_data['data']['sections'][1]['columns'])): ?>
                    <?php foreach ($excellence_data['data']['sections'][1]['columns'] as $column): ?>
                        <div class="w-full">
                            <?php if ($column['content_type'] === 'image' && !empty($column['image_path'])): ?>
                                <div data-aos="zoom-in-right" data-aos-duration="1000" class="aos-init aos-animate mb-6 mt-6">
                                    <img src="<?= htmlspecialchars($column['image_path']); ?>"
                                        alt="<?= cms_image_alt($column, $column['title'] ?? 'section-image'); ?>" class="w-[100%] rounded-xl">
                                </div>
                            <?php elseif ($column['content_type'] === 'text' && !empty($column['content'])): ?>
                                <div class="text-content mt-6">
                                    <?= $column['content']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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