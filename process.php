<?php 
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $process_data['data']['title'] ?? "Admission Process" ?></title>
    <meta name="description" content="<?= $process_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $process_data['data']['meta_keywords'] ?? "" ?>">
    <style>
        /* Table and Mobile Scroll Styles */
        html, body { max-width: 100%; overflow-x: hidden; }
        [data-tab-content="step-4"] { max-width: 100%; overflow-x: hidden; overflow-y: visible; }
        [data-tab-content="step-4"] table { display: block; max-width: 100%; width: max-content; min-width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; }
        @media (max-width: 767px) {
            .tab-btn { padding: 8px 16px !important; font-size: 14px !important; white-space: nowrap; flex: 0 0 auto !important; }
            #tab-buttons { justify-content: flex-start !important; gap: 12px !important; }
            .mt-10.flex.justify-center.p-8 { justify-content: flex-start !important; overflow-x: auto !important; }
        }
        .tab-btn.active { background-color: #fff; color: #003618; font-weight: bold; }
    </style>
</head>

<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <h1 class="text-[32px] font-[700] text-white ml-4 sm:ml-[7rem] hr-line relative">
                <?= strip_tags($process_data['data']['sections'][0]['content_heading'] ?? 'Process') ?>
            </h1>
        </div>

        <div class="flex m-5 overflow-x-auto text-blue-main text-sm">
            <a href="/">Home</a> <span class="mx-2">></span> <span>Admission</span> <span class="mx-2">></span> <b>Process</b>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 space-y-10 text-gray-600">
            
            <?php
            $steps = $process_data['data']['sections'][1]['resolved_content']['items'] ?? [];
            $intro = $process_data['data']['sections'][1]['resolved_content']['description'] ?? '';
            ?>

            <div class="prose max-w-none"><?= $intro ?></div>

            <div class="mt-10 flex sm:justify-center p-8 bg-[#003618] overflow-x-auto rounded-lg">
                <ul class="flex gap-4 items-center" id="tab-buttons">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <li class="tab-btn <?= $i === 1 ? 'active' : '' ?> text-white border border-white p-2 px-6 cursor-pointer rounded" data-tab="step-<?= $i ?>">
                            Step <?= $i ?>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>

            <?php if (!empty($steps)): ?>
                <?php foreach ($steps as $index => $step): ?>
                    <div class="tab-content <?= $index === 0 ? '' : 'hidden' ?>" data-tab-content="step-<?= $index + 1 ?>">
                        <div class="prose prose-blue max-w-none mb-10">
                            <?= $step['title'] ?? '' ?>
                            <?= $step['content'] ?? '' ?>
                        </div>

                        <?php if ($index === 1): ?>
                            <div class="ee-form-shell mb-10 mx-auto w-full">
                                <div id="ee-form-22-process"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // ==================== TABS LOGIC ====================
        document.querySelectorAll(".tab-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
                document.querySelectorAll(".tab-content").forEach(c => c.classList.add("hidden"));
                btn.classList.add("active");
                document.querySelector(`[data-tab-content="${btn.dataset.tab}"]`).classList.remove("hidden");
            });
        });

        // ==================== ENQUIRY WIDGET ====================
        document.addEventListener("DOMContentLoaded", function() {
            if (!document.getElementById("ee-form-22-process")) return;
            window.ee_form_widget_baseurl = "https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/ee-form-widget/";
            var cssId = "__formWidgetCss";
            if (!document.getElementById(cssId)) {
                var css = document.createElement("link");
                css.id = cssId;
                css.rel = "stylesheet";
                css.href = window.ee_form_widget_baseurl + "css/stylesheet.min.css";
                css.type = "text/css";
                document.head.appendChild(css);
            }
            var script = document.createElement("script");
            script.onload = async function() {
                var widget = new eeFormWidget();
                await widget.init("superhouseeducation", "form-22", "ee-form-22-process");
            };
            script.src = window.ee_form_widget_baseurl + "js/eeFormWidget.min.js";
            document.head.appendChild(script);
        });
    </script>
</body>
</html>