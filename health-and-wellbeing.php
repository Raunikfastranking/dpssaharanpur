<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Saharanpur | Health and Well-being</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Health and Well-being
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Health and Well-being
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
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
                        <a href="health-and-wellbeing.php" class="ms-1 text-sm font-medium text-blue-main">Health and
                            Well-being</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <p class="text-gray-600 text-[16px] mt-2"> At Delhi Public School, Saharanpur, health and well-being
                    form an integral part of our school ethos. We
                    believe that true education goes beyond academics — it must nurture the body, mind, and emotions to
                    shape confident, balanced individuals. Our focus is on creating a safe, healthy, and encouraging
                    environment where every child can flourish.</p>

                <p class="text-gray-600 text-[16px] mt-2">To promote an active lifestyle and physical fitness, we offer:
                </p>
                <ul class="text-gray-600 text-[16px] mt-2" style="list-style:disc">
                    <li> Daily physical education classes and structured sports training</li>
                    <li> A wide range of activities including yoga, aerobics, athletics, martial arts, and team games
                    </li>
                    <li> Regular health check-ups and awareness camps for students</li>
                    <li> Emphasis on balanced nutrition and healthy eating habits within the campus</li>
                    <li> Clean, well-maintained infrastructure with access to safe drinking water</li>
                </ul>
                <p class="text-gray-600 text-[16px] mt-2"> We also place strong emphasis on emotional well-being and
                    mental resilience. Our initiatives include:</p>
                <ul class="text-gray-600 text-[16px] mt-2" style="list-style:disc">
                    <li> Counselling services to support social, emotional, and academic growth</li>
                    <li> Mindfulness practices and relaxation sessions integrated into school life</li>
                    <li> Workshops on life skills, self-esteem, and building positive peer relationships</li>
                    <li> A warm and approachable mentor system that ensures students always feel supported</li>
                </ul>
                <p class="text-gray-600 text-[16px] mt-2"> At DPS Saharanpur, hygiene and safety are non-negotiable. We
                    ensure:</p>
                <ul class="text-gray-600 text-[16px] mt-2" style="list-style:disc">
                    <li> Regular sanitisation of classrooms, labs, and common areas</li>
                    <li> Health and hygiene awareness drives for students</li>
                    <li>Presence of trained staff for first aid and emergency medical assistance</li>
                    <li> A secure, closely monitored campus that prioritises student safety and well-being</li>
                </ul>

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