<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $our_story_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $our_story_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $our_story_data['data']['meta_keywords'] ?? "" ?>">
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
                        <?= strip_tags($our_story_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left ml-[7rem] sm:mb-1 hr-line relative leading-9">
                        <?= strip_tags($our_story_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                            <a href="our-story" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"><?= strip_tags($our_story_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="mt-10 relative">
                    <?= $our_story_data['data']['sections'][1]['content'] ?? '' ?>
                    <!-- <p class="text-[16px] sm:text-left  text-gray-600 mt-5">Delhi Public School, Saharanpur, under the aegis of Delhi Public School Society, is a CBSE affiliated school run under the umbrella of Superhouse Education Foundation. The School has flourished under the leadership of Pro-Vice Chairman Mr Mukhtarul Amin. In day to day affairs, the school is administered by School Principal Ms Adesh Sisodia.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">DPS is a co-educational institution where students are given the opportunity to pursue their dreams. Our students are exposed to numerous activities and competitions which give them ample room to showcase their talents. Their special qualities and talents are honed to make each one of them stand apart from the rest. DPS aims to create well-balanced, morally sound, intelligent and tech-smart DIPSITES who can boldly face all challenges of life and create a niche for themselves.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school provides a balanced, safe and realistic environment for young children to grow and learn. The school has a huge building with airy, sunny and spacious smart classes and a spacious library with more than 10,000 books. There are large, lush green playground for sports like Cricket, Volleyball and Football with separate Basketball and Badminton courts and also a Games room for indoor games like Chess, Carrom, TT, etc. Shooting range adds another attraction. The school proudly owns a 25 metre long swimming pool with an excellent filtration plant to keep the pool clean and keeps the students away from any infections diseases.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">There are three air-conditioned Computer Labs with more than 200 Computers, well-equipped Science Labs for Physics, Chemistry and Biology to help our budding scientists quench their thirst for more scientific innovations. The school also has a modern, well-designed Maths Lab, Coding Lab & Animation Lab for students of Classes I to XII.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">There is also an open air Theatre where various School functions and assemblies are conducted. The Activity Rooms for weekly Thursday and Friday activities host activities like Calligraphy, Pottery, Yoga, Dance, Science club, Rifle Shooting, Urdu Classes and a special Cookery Room for those who have an inclination for Cooking. Mirrored Dance room and Music room with latest Musical Instruments give students an opportunity to learn and showcase their creativity in Dance and Music, and that’s not all… the School also conducts Personality Development Classes, Superhouse Sports Academy and Animation Classes, Coding Classes etc- the best a School can offer!!</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">Delhi public school has adopted technology to enhance the best teaching and learning practices. The digital app like AllenCare promotes efficient communication and on-time homework submission by improving accessibility, organization, and convenience for both students and teachers.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The use of online attendance app is one illustration of technology integration in our school. Traditionally, attendance was recorded only manually, Now, Teachers can digitally mark attendance using online apps, streamlining the process and guaranteeing accurate records.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">We at DPS Saharanpur nurture young saplings with love and care, inculcating optimistic attitude and perseverance backed by strong dedication.</p> -->
                </div>
            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>