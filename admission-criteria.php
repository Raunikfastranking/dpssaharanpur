
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Saharanpur | Admission Criteria</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   Admission Criteria
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   Admission Criteria
                </h2>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="admission-criteria.php" class="ms-1 text-sm font-medium text-blue-main">Admission Criteria</a>
                    </div>
                </li>
            </ol>
        </div>

  <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
  <div class="md:flex gap-9 mt-6 mb-10">
    <div class="md:w-[40%]">
      <img src="https://dummyimage.com/292x196/e6e6ed/000000&text=Not+Provided" alt="Admission Process" class="w-full">
    </div>
    <div class="md:w-[60%] text-gray-600">

      <span class="text-[16px] font-[600]">Age Eligibility (As on 1st April of the academic session)</span>
      <ul class="list-disc ml-6 mt-2 text-gray-600 space-y-1">
        <li>PG – 3 years</li>
        <li>Nursery – 4 years</li>
        <li>Prep – 5 years</li>
        <li>Class I – 6 years</li>
        <li>Class II onwards – based on the previous class attended</li>
      </ul>
      <p class="mt-2">Application forms open in the month of <strong>November</strong> every year for the upcoming session.</p>

      <br>
      <span class="text-[16px] font-[600]">Registration</span>
      <ul class="list-disc ml-6 mt-2 space-y-1">
        <li>Duly filled registration form to be submitted with non-refundable, non-transferable fee within 7 days of issue.</li>
        <li>Attach a copy of the birth certificate.</li>
        <li>Attach a photocopy of the previous year’s report card if applicable.</li>
      </ul>
      <p class="mt-2"><strong>Note:</strong> Registration does not guarantee admission.</p>
    </div>
  </div>
  
      <span class="text-[16px] font-[600]">Admission Test (Class III onwards)</span>
      <ul class="list-disc ml-6 mt-2 space-y-1">
        <li>Test may be written or oral, covering English, Hindi, Mathematics, or other subjects as necessary.</li>
        <li>Selection based on test/interview performance and seat availability.</li>
        <li>Special consideration for Dipsites.</li>
        <li>Date of result and fee submission deadline announced at test/interview.</li>
        <li>Final admission decision rests with the Principal/Management.</li>
      </ul>

      <br>
      <span class="text-[16px] font-[600]">Admission Formalities</span>
      <p class="mt-2">Selected students must complete these before joining:</p>
      <ul class="list-disc ml-6 mt-2 space-y-1">
        <li>Evidence of date of birth (if not already submitted).</li>
        <li>Proof of passing or promotion from the last class.</li>
        <li>Original Transfer Certificate (signed by DEO if from another state).</li>
        <li>Medical certificate with vaccination details and health conditions.</li>
        <li>4 Passport size photographs.</li>
        <li>Proof of residence (Aadhaar/Voter ID/Passport copy).</li>
      </ul>

      <br>
      <span class="text-[16px] font-[600]">Payment of Fee</span>
      <ul class="list-disc ml-6 mt-2 space-y-1">
        <li>Admission fee payable at time of admission via draft, cheque, or online.</li>
        <li>Draft to be made in favor of <strong class="text-gray-600">“Delhi Public School, Saharanpur”</strong>.</li>
        <li>Non-payment may prevent exam eligibility and Transfer Certificate issuance.</li>
        <li>Fee may be revised annually. Parents will be notified of changes.</li>
      </ul>
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