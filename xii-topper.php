<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Saharanpur| XII Topper</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <style>
        .job-opening-bg {
            position: relative;
        }

        .job-opening-bg::before {
            content: "";
            height: 100%;
            position: absolute;
            opacity: .6;
            width: 100%;
            background: #112759;
        }
    </style>
    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px] ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   XII Toppers
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   XII Toppers
                </h2>
            </div>
        </div>

      <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="index.php"
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
                            <p class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Achievements</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="xii-topper.php" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">XII Topper</a>
                        </div>
                    </li>
                </ol>
            </div>

               <p class="text-center font-[700]">NOT PROVIDED</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabPanels = document.querySelectorAll('.tab-panel');
            const indicator = document.getElementById('indicator');

            let activeTab = tabLinks[0];
            let activePanel = tabPanels[0];

            function changeTab(newTab) {
                // Hide all panels
                tabPanels.forEach(panel => panel.classList.add('hidden'));

                // Remove aria-selected and tabindex from all tabs
                tabLinks.forEach(tab => {
                    tab.setAttribute('aria-selected', 'false');
                    tab.setAttribute('tabindex', '-1');
                });

                // Show new tab's panel
                const targetPanel = document.getElementById(newTab.getAttribute('aria-controls'));
                targetPanel.classList.remove('hidden');
                targetPanel.setAttribute('aria-hidden', 'false');

                // Set aria-selected and tabindex on the new tab
                newTab.setAttribute('aria-selected', 'true');
                newTab.setAttribute('tabindex', '0');

                // Move indicator
                const offset = newTab.offsetLeft;
                const width = newTab.offsetWidth;
                indicator.style.left = `${offset}px`;
                indicator.style.width = `${width}px`;
            }

            function handleKeydown(event) {
                const keyCode = event.keyCode;
                let newTab;

                if (keyCode === 37) { // Left arrow
                    newTab = activeTab.previousElementSibling?.querySelector('.tab-link');
                } else if (keyCode === 39) { // Right arrow
                    newTab = activeTab.nextElementSibling?.querySelector('.tab-link');
                }

                if (newTab) {
                    changeTab(newTab);
                    activeTab = newTab;
                }
            }

            tabLinks.forEach(tabLink => {
                tabLink.addEventListener('click', (event) => {
                    event.preventDefault();
                    activeTab = event.target;
                    changeTab(activeTab);
                });
                tabLink.addEventListener('keydown', handleKeydown);
            });

            // Initialize the first tab as active
            changeTab(activeTab);
        });
    </script>

</body>

</html>