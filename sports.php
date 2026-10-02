<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $sports_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $sports_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $sports_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative  mb:[40px] sm:mb-[120px] ">

        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Facilities
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="sports" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $sports_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="Sports at DPS" class="w-[100%]">
                </div>
                <div class="md:w-[60%] text-gray-600">
                    <?= $sports_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <span class="text-[18px] font-[700]">Fueling Dreams Beyond the Classroom</span>
                    <br><br>
                    At DPS Saharanpur, we proudly participate in inter-school, district, state, and national-level sports competitions, fostering a culture of healthy competition and teamwork. We believe in developing champions who excel in both academics and athletics.
                    <br><br>
                    <span class="text-[16px] font-[600]">Strength in Motion, Discipline in Action</span>
                    <br>
                    Our campus includes top-notch facilities such as a football ground, basketball court, swimming pool, indoor games room, shooting range, and more — all designed to inspire passion, discipline, and sportsmanship among students. -->
                </div>
            </div>

            <div class="mt-4 text-gray-600">
                <?= $sports_data['data']['sections'][2]['content'] ?? '' ?>
                <!-- <span class="text-[16px] font-[600]">Sports Programs & Participation:</span>
                <ul class="list-disc ml-6 mt-2 space-y-1">
                    <li><b>Inter-School Sports</b> – We proudly participate in inter-school sports competitions, fostering a culture of healthy competition and teamwork among our students.
                        Competing with the Best
                        Our students compete against top schools in the area, encouraging healthy competition and promoting sportsmanship.
                        Developing Champions
                        We focus on developing well-rounded individuals who excel not only in academics but also in sports, promoting physical fitness, teamwork, and discipline.
                    </li>
                    <li><b>District-Level Sports</b> – Our school is committed to promoting sports excellence at the district level. We offer a range of sports programs and initiatives, including Football, Cricket, Swimming, Basketball, Shooting, Archery, Badminton, Athletics and many more.
                        Achievements
                        Our students have consistently demonstrated outstanding performance in district-level sports competitions, winning medals and awards in various events.
                        Opportunities
                        We provide opportunities for students to participate in intra-school and inter-school sports competitions, helping them develop their skills, teamwork, and sportsmanship.
                    </li>
                    <li><b>State-Level Sports</b> – Our school's talented athletes have made us proud by participating in state-level sports competitions. With dedication and hard work, they've showcased their skills in various sports, bringing honor to our school.
                        Representing with Pride
                        Our students represent our school with pride, demonstrating exceptional teamwork, sportsmanship, and a winning spirit.
                        Striving for Excellence
                        We continue to nurture and support our athletes, striving for excellence in state-level sports competitions.
                    </li>
                    <li><b>National-Level Sports</b> – Our school's exceptional athletes have taken their talents to the national stage, representing our state and school with pride. With unwavering dedication and perseverance, they've showcased their skills in various sports, bringing glory to our institution.
                        Shining on the National Platform
                        Our students have demonstrated remarkable sportsmanship, teamwork, and a winning spirit, making us proud and inspiring others to follow in their footsteps.
                    </li>
                </ul>

                <br>
                <span class="text-[16px] font-[600]">Facilities:</span>
                <ul class="list-disc ml-6 mt-2 space-y-1">
                    <li><b>Football Ground</b> – Our school's football ground provides a fantastic platform for students to develop their skills and passion for the sport. With a well-maintained field and necessary facilities, our ground hosts various matches, tournaments, and training sessions, fostering a spirit of teamwork and sportsmanship among our students.</li>
                    <li><b>Basketball Court</b> – Our school's basketball court is a hub for action, excitement, and teamwork. With a well-maintained court and necessary facilities, our students develop their skills, compete in tournaments, and showcase their passion for the game. A great place to build camaraderie, discipline, and a winning spirit!</li>
                    <li><b>Swimming Pool</b> – Our school's swimming pool provides a safe and supportive environment for students to learn and excel in swimming. With proper facilities and expert guidance, our pool hosts swimming classes, training sessions, and competitions, helping students develop their aquatic skills and build confidence.</li>
                    <li><b>Indoor Games Room</b> – Our school's indoor games room is a hub for fun and friendly competition. Equipped with facilities for games like table tennis, carrom, and chess, it provides students with opportunities to develop their strategic thinking, hand-eye coordination, and social skills in a relaxed and engaging environment.</li>
                    <li><b>Shooting & Archery Range</b> – Our school's state-of-the-art shooting range and archery facilities provide students with a unique opportunity to develop their marksmanship and archery skills. With expert guidance and safety protocols in place, students can hone their focus, discipline, and technique in a controlled environment, fostering a passion for precision sports, where they develop focus, discipline, and technique, cultivating a passion for shooting and archery while building confidence and skill.</li>
                    <li><b>Badminton</b> – Our school's badminton facilities offer students a fantastic opportunity to develop their skills, technique, and strategy in a fun and competitive environment. With expert coaching, well-maintained courts, and regular tournaments, students can enhance their hand-eye coordination, agility, and teamwork while promoting sportsmanship and friendly competition.</li>
                    <li><b>Table Tennis</b> – Our school's table tennis facilities empower students to ace their game! With expert coaching and top-notch equipment, students develop lightning-fast reflexes, strategic thinking, and teamwork skills in a fun, competitive environment. Table tennis helps students build confidence, discipline, and focus, preparing them for success both on and off the table.</li>
                </ul>

                <br>
                <p>
                    Our sports program empowers every student to rise with confidence, courage, and competence. With world-class infrastructure and committed mentors, we nurture individuals who grow stronger in body, mind, and values — true champions in every sense.
                </p> -->
            </div>
        </div>



    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>



</body>

</html>