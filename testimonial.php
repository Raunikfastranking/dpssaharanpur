<?php
include "includes/apis.php";

// Collect playable video items from any CMS section (index can change when
// sections are reordered in the CMS, so don't hardcode sections[N]).
$videos = [];
foreach (($testimonial_data['data']['sections'] ?? []) as $section) {
    $media = $section['resolved_content']['media'] ?? [];
    if (!is_array($media)) {
        continue;
    }
    foreach ($media as $item) {
        if (!is_array($item)) {
            continue;
        }
        $videoUrl = $item['media_url'] ?? $item['page_link'] ?? $item['video_url'] ?? '';
        $embedUrl = '';
        if ($videoUrl !== '' && preg_match(
            '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/|youtube\.com\/live\/)([^&\?\/]+)/i',
            $videoUrl,
            $matches
        )) {
            $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
        } elseif (
            strpos($videoUrl, 'youtube.com') !== false
            && preg_match('/[?&]list=([^&]+)/', $videoUrl, $listMatch)
        ) {
            $embedUrl = 'https://www.youtube.com/embed/videoseries?list=' . $listMatch[1];
        }
        $videoSrc = '';
        if (!empty($item['media_file'])) {
            $videoSrc = rtrim($api_url, '/') . '/' . ltrim($item['media_file'], '/');
        } elseif ($embedUrl === '' && preg_match('/\.(mp4|webm|ogg|mov)(\?.*)?$/i', $videoUrl)) {
            $videoSrc = $videoUrl;
        }
        if ($embedUrl === '' && $videoSrc === '') {
            continue;
        }
        $videos[] = ['embed' => $embedUrl, 'src' => $videoSrc, 'caption' => $item['caption'] ?? ''];
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $testimonial_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $testimonial_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $testimonial_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>
    <style>
        ul.glide__slides {
            display: flex;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        ul.tabs {
            padding: 0px;
            list-style: none;
        }

        ul.tabs li {
            background: none;
            color: #003618;
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;

            background: #ededed;
        }

        @media (max-width: 640px) {
            ul.tabs li {
                font-size: 14px;
                padding: 8px;
                background: #ededed;
            }

        }

        ul.tabs li.current {
            background: #003618;
            color: #fff;
        }

        .tab-content {
            display: none;
            padding-top: 15px;
        }

        .tab-content.current {
            display: block !important;
        }

        .img-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: transparent;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            animation: animatepopup 0.3s ease-in-out forwards;

         
            width: 50vw;
            height: 90vh;
        }

        .popup-content img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            opacity: 0;
            transform: translateY(-100px);
            animation: animatepopup 0.3s ease-in-out forwards;
            border-radius: 10px;
        }

     
        @media (max-width: 640px) {
            .popup-content {
                width: 100vw;
                height: 50vh;
            }
        }

        .close-btn {
            width: 35px;
            height: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .close-btn .bar {
            height: 4px;
            background: #fff;
            border-radius: 2px;
        }

        .close-btn .bar:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn .bar:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
        }

        .img-popup.opened {
            display: flex;
        }

        @keyframes animatepopup {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mySwiper .swiper-pagination-bullet {
            background-color: #003618 !important;
        }

        .mySwiper .swiper-pagination-bullet-active {
            background-color: #002A5B !important;
        }

        @media (max-width: 640px) {
            .swiper {
                box-shadow: none !important;
            }

            .swiper-slide {
                box-shadow: none !important;
            }

            .swiper-wrapper {
                margin: 0 !important;
            }
        }

        .clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .expanded {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
            display: block;
            -webkit-line-clamp: unset;
            white-space: normal;
        }
    </style>

    <?php include "includes/header.php" ?>

    <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div class="brud-image bg-top flex items-center text-center h-[300px]">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Testimonials
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Testimonials
                </h1>
            </div>
        </div>


        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="testimonial"
                            class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Testimonials</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="my-10">

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="relative sm:mt-20 mt-10" id="testimonials">
                    <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 px-3">

                        <div class="relative  sm:pt-5 pt-2 ">

                            <ul class="tabs 2xl:ml-[432px] md:ml-[298px]  ml-[6px]">
                                <li class="tab-link current" data-tab="tab-1">Image Testimonials</li>
                                <li class="tab-link" data-tab="tab-2">Video Testimonials</li>
                            </ul>

                            <div id="tab-1" class="tab-content current Testimonials">
                                <div class=" overflow-hidden mt-1" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php
                                        $image_testimonials =  $home_data['data']['sections'][10]['resolved_content']['items'] ?? [];
                                        if (empty($image_testimonials)) {
                                            echo "<p class='text-center w-full py-6 text-gray-500'>No data available</p>";
                                        } else {
                                        foreach ($image_testimonials as $data) {
                                            ?>
                                            <li
                                                class=" sm:flex items-start gap-2 mb-4 border-[1px] border-gray-300 p-3 rounded-[8px] bg-blue-main">
                                                <div class="text-center sm:w-[30%] w-[90%]">
                                                    <img src="<?= $api_url ?>/<?= $data['image_url'] ?? "" ?>" alt="<?= cms_image_alt($data, $data['title'] ?? 'parent1') ?>"
                                                        class="mb-2 mx-auto rounded-[10px] w-[130px] h-[130px]">
                                                    <h2 class="font-[700] text-[16px] text-gray-100">
                                                        <?= $data['title'] ?? "" ?></h2>
                                                </div>
                                                <div class="sm:w-[50%] w-[90%] sm:mt-0 mt-3 sm:text-left text-center ">
                                                    <p
                                                        class="testimonial-text text-[16px] text-gray-200 text-center sm:text-left clamp-2">
                                                        <?= strip_tags($data['description']) ?? "" ?>
                                                    </p>
                                                    <button class="moreless-button font-[600] text-white text-sm mt-1">Read
                                                        more...</button>
                                                </div>
                                            </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div id="tab-2" class="tab-content Testimonials2">
                                <div class="overflow-hidden mt-1" data-glide-el="track">
                                    <ul class="glide__slides mt-1 relative w-full overflow-hidden p-0 pb-5 whitespace-no-wrap flex gap-3 flex-no-wrap">
                                        <?php
                                        if (empty($videos)) {
                                            echo "<li class='text-center w-full py-8 text-gray-500'>No data available</li>";
                                        } else {
                                            foreach ($videos as $video) {
                                                ?>
                                                <li class="glide__slide">
                                                    <div class="w-full rounded-2xl shadow-lg sm:p-5 p-2 bg-white border border-gray-200">
                                                        <?php if (!empty($video['embed'])) { ?>
                                                            <iframe class="w-[100%] h-[300px] rounded-xl"
                                                                src="<?php echo htmlspecialchars($video['embed']); ?>"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen></iframe>
                                                        <?php } else { ?>
                                                            <video class="w-[100%] h-[300px] rounded-xl object-cover" controls
                                                                preload="metadata"
                                                                src="<?php echo htmlspecialchars($video['src']); ?>"></video>
                                                        <?php } ?>
                                                        <?php if (!empty($video['caption'])): ?>
                                                            <div class="mt-2 text-center text-sm font-semibold text-gray-700">
                                                                <?= htmlspecialchars($video['caption']) ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
        let glide1 = null;
        let glide2 = null;
        let glide2Initialized = false;

        function initGlide(selector, perViewCount, glideType = 'carousel') {
            const el = document.querySelector(selector);
            if (!el) return null;
            return new Glide(selector, {
                type: glideType,
                focusAt: 0,
                perView: perViewCount,
                autoplay: glideType === 'carousel' ? 3500 : false,
                animationDuration: 700,
                gap: 16,
                breakpoints: {
                    1680: {
                        perView: perViewCount >= 4 ? 3 : 2,
                        gap: 16
                    },
                    1024: {
                        perView: perViewCount >= 4 ? 2 : 2,
                        gap: 16
                    },
                    820: {
                        perView: 1,
                        gap: 12
                    },
                    640: {
                        perView: 1,
                        gap: 12
                    }
                }
            });
        }

        glide1 = initGlide('.Testimonials', 2, 'carousel');
        if (glide1) {
            glide1.mount();
        }

        document.querySelectorAll('.tab-link').forEach(tab => {
            tab.addEventListener('click', function () {
                const tabId = this.getAttribute('data-tab');

                document.querySelectorAll('.tab-link').forEach(link => link.classList.remove('current'));
                this.classList.add('current');

                document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('current'));
                const activeTab = document.getElementById(tabId);
                if (activeTab) {
                    activeTab.classList.add('current');
                }

                if (tabId === 'tab-2') {
                    if (!glide2Initialized) {
                        glide2 = initGlide('.Testimonials2', 2, 'slider');
                        if (glide2) {
                            glide2.mount();
                            glide2Initialized = true;
                        }
                    } else if (glide2) {
                        setTimeout(() => glide2.update(), 50);
                    }
                } else {
                    const iframes = document.querySelectorAll("#tab-2 iframe");
                    iframes.forEach(iframe => {
                        const src = iframe.getAttribute("src");
                        if (src) iframe.setAttribute("src", src);
                    });
                    const videos = document.querySelectorAll("#tab-2 video");
                    videos.forEach(video => {
                        video.pause();
                        video.currentTime = 0;
                    });
                    if (glide1) {
                        setTimeout(() => glide1.update(), 50);
                    }
                }
            });
        });
    </script>

    <script>
        $('.moreless-button').click(function () {
            const moreText = $(this).siblings('.moretext');
            moreText.slideToggle();

            if ($(this).text() == "Read less") {
                $(this).text("Read more...");
            } else {
                $(this).text("Read less");
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".moreless-button");

            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    const para = this.previousElementSibling;
                    para.classList.toggle("expanded");
                    para.classList.toggle("clamp-2");

                    this.textContent = para.classList.contains("expanded") ? "Read less" :
                        "Read more...";
                });
            });
        });
    </script>

</body>

</html>