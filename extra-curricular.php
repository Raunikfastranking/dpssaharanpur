<?php include "includes/apis.php"; ?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($EC_achievements_data['data']['title'] ?? "Extra Curricular Achievements") ?></title>
<meta name="description" content="<?= htmlspecialchars($EC_achievements_data['data']['meta_description'] ?? "") ?>">
<meta name="keywords" content="<?= htmlspecialchars($EC_achievements_data['data']['meta_keywords'] ?? "") ?>">
<?php include "includes/head.php" ?></head><body>
<?php include "includes/header.php" ?>
<div class="main relative mb-[120px]"><div class="bg-center flex items-center text-center h-[300px] brud-image"><div class="w-full">
<h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 hr-line relative leading-9"><?= htmlspecialchars(strip_tags($EC_achievements_data['data']['sections'][0]['content_heading'] ?? 'Extra Curricular Achievements')) ?></h1>
<h1 class="sm:text-[32px] hidden sm:block font-[700] text-white text-left ml-[7rem] hr-line relative leading-9"><?= htmlspecialchars(strip_tags($EC_achievements_data['data']['sections'][0]['content_heading'] ?? 'Extra Curricular Achievements')) ?></h1>
</div></div>
<div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
<?php $galleryAchievementPaginationPrefix='extraCurricularAchievement'; $galleryAchievementSubType='extra_curricular'; $galleryAchievementEmptyMessage='No extra-curricular achievements found for this year.'; $galleryAchievementNoResultsText='No matching extra-curricular achievements found.'; include __DIR__.'/includes/gallery-achievement-year-block.php'; ?>
</div></div>
<?php include "includes/footer.php" ?>
<?php include "includes/foot.php" ?></body></html>
