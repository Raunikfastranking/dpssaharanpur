<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Saharanpur | Outbounds</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Outbounds
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Outbounds
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="outbounds.php" class="ms-1 text-sm font-medium text-blue-main">Outbounds</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="https://res.cloudinary.com/dj7wogsju/image/upload/v1736182459/Coding_Lab_cjyqjp.jpg" alt="Outbound Activities" class="w-[100%]">
                </div>
                <div class="md:w-[60%] text-gray-600">
                    <span class="text-[18px] font-[700]">Outbound Activities</span>
                    <br><br>
                    <span class="text-[16px] font-[600]">Enriching Education Beyond Classroom Walls</span>
                    <br><br>
                    At Delhi Public School, Saharanpur, we believe that learning extends far beyond the four walls of a classroom. Our carefully planned outbound activities—field trips, excursions, and picnics—provide students with immersive, real-world experiences that complement their academic curriculum and foster holistic development.
                </div>
            </div>

            <div class="text-gray-600">
                <span class="text-[16px] font-[600]">Field Trips:</span>
                <p class="mt-2">
                    Our educational field trips connect classroom concepts with real-world applications, making learning more meaningful and memorable for students of all ages.
                </p>
                <ul class="list-disc ml-6 mt-2 space-y-1">
                    <li>Local farm visit to learn modern farming methods</li>
                    <li>Axis Bank to understand monetary exchange in a better way</li>
                    <li>Local areas of the city for tree plantation</li>
                </ul>

                <br>
                <span class="text-[16px] font-[600]">Science Museum Adventure:</span>
                <p class="mt-2">
                    Students explored interactive exhibits at the Science Museum and Nehru Museum, witnessing scientific principles in action.
                </p>

                <br>
                <span class="text-[16px] font-[600]">Historical Heritage Visit:</span>
                <p class="mt-2">
                    Our visit to the local historical monuments brought history textbooks to life. Students gained a deeper appreciation for our cultural heritage as they walked through historical sites, guided by expert historians who shared fascinating stories and insights.
                </p>
                <ul class="list-disc ml-6 mt-2 space-y-1">
                    <li>India Gate</li>
                    <li>Supreme Court</li>
                </ul>

                <br>
                <span class="text-[16px] font-[600]">Industry Exploration:</span>
                <p class="mt-2">
                    Our students paid an industrial visit to Ambuja Cement Factory, gaining valuable insights. This experience helped them understand workplace environments and the practical applications of their academic subjects.
                </p>

                <br>
                <span class="text-[16px] font-[600]">Excursions:</span>
                <p class="mt-2">
                    Our multi-day excursions to Goa and Manali offered students the opportunity to explore new environments, develop independence, and build stronger bonds with peers and teachers.
                </p>

                <br>
                <span class="text-[16px] font-[600]">Picnics:</span>
                <p class="mt-2">
                    Our school picnic to Mussoorie provided a refreshing break from routine while strengthening the school community in a relaxed, natural setting.
                </p>
            </div>
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
        $('.moreless-button').click(function() {
            const moreText = $(this).siblings('.moretext');

            $('.moretext').not(moreText).slideUp();
            $('.moreless-button').not(this).text('Read more');

            // Toggle the current one
            moreText.slideToggle();

            if ($(this).text() == "Read more") {
                $(this).text("Read less");
            } else {
                $(this).text("Read more");
            }
        });

        var aboutCarousel = new Glide('.about-carousel', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 4
                },
                640: {
                    perView: 1
                }
            },
        });
        aboutCarousel.mount();

        var aboutCarousel2 = new Glide('.about-carousel2', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        aboutCarousel2.mount();




        var glide03 = new Glide('.glide-03', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });

        glide03.mount();

        var latestNews2 = new Glide('.latestNews2', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        latestNews2.mount();
    </script>
</body>

</html>