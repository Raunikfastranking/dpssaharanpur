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
                            <div class="mb-10 p-6 rounded-xl border border-gray-200">
                                <h2 class="text-center text-2xl font-bold text-blue-main mb-6">Enquiry Form | 2027–2028</h2>
                                
                                <div id="AdmissionFormPopup" class="hidden bg-green-500 text-white p-3 rounded mb-4 text-center">Form submitted successfully!</div>

                                <form id="AdmissionForm" class="space-y-4">
                                    <select id="asession" required class="w-full border p-3 rounded-md">
                                        <option value="" disabled selected>Enquiry For Session</option>
                                        <?php
                                        $sessions = include "includes/session-api.php";
                                        $uniqueSessions = array_unique(array_column($sessions, 'session'));
                                        foreach ($uniqueSessions as $sess): ?>
                                            <option value="<?= htmlspecialchars($sess) ?>"><?= htmlspecialchars($sess) ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <select id="agrade" required class="w-full border p-3 rounded-md">
                                        <option value="" disabled selected>Select Grade</option>
                                        <?php
                                            if (!empty($grades)) {
                                               $gradeOrder = [
    'P.G', 'Nursery', 'Prep',
    'I', 'II', 'III', 'IV', 'V',
    'VI', 'VII', 'VIII', 'IX',
    'X', 'XI', 'XII'
];

                                                $uniqueGrades = [];
                                                foreach ($grades as $g) {
                                                    $grade = trim($g['grades']);
                                                    if ($grade && !in_array($grade, $uniqueGrades)) {
                                                        $uniqueGrades[] = $grade;
                                                    }
                                                }

                                                usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {
                                                    $posA = array_search($a, $gradeOrder);
                                                    $posB = array_search($b, $gradeOrder);
                                                    $posA = ($posA === false) ? 999 : $posA;
                                                    $posB = ($posB === false) ? 999 : $posB;
                                                    return $posA - $posB;
                                                });

                                                foreach ($uniqueGrades as $gr): ?>
                                                    <option value="<?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>">
                                                        <?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>
                                                    </option>
                                                <?php endforeach; 
                                            } else { ?>
                                                <option value="">No grades available</option>
                                            <?php } ?>
                                    </select>

                                    <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border p-3 rounded-md" required>
                                    <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border p-3 rounded-md">
                                    <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border p-3 rounded-md" required>
                                    <input type="email" id="aemail" placeholder="Email Address" class="w-full border p-3 rounded-md">

                                    <div class="relative" id="cityWrapper">
                                        <select id="acity" class="hidden" required>
                                            <option value="">Select City</option>
                                            <?php
                                            $cities = include 'includes/get-city.php';
                                            $uniqueCities = array_unique(array_column($cities, 'name'));
                                            sort($uniqueCities);
                                            foreach ($uniqueCities as $ct): ?>
                                                <option value="<?= htmlspecialchars($ct) ?>"><?= htmlspecialchars($ct) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="cityTrigger" class="border p-3 rounded-md bg-white cursor-pointer flex justify-between">
                                            <span class="selected-text text-gray-400">Select City</span>
                                            <span>▼</span>
                                        </div>
                                        <div id="cityDropdown" class="absolute w-full mt-1 border bg-white shadow-lg z-50 hidden rounded-md">
                                            <input type="text" id="citySearch" placeholder="Search city..." class="w-full p-2 border-b outline-none">
                                            <ul id="cityList" class="max-h-40 overflow-y-auto"></ul>
                                        </div>
                                    </div>

                                    <input type="text" id="apincode" placeholder="Pincode" maxlength="6" class="w-full border p-3 rounded-md" required>

                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" id="terms" required>
                                        <label for="terms" class="text-sm">I agree to Terms & Conditions</label>
                                    </div>

                                    <input type="hidden" id="source" name="source">

                                    <button type="submit" id="AsubmitBtn" class="w-full bg-blue-main text-white p-4 rounded-md font-bold hover:bg-red-600 transition-colors mb-4">
                                        Submit
                                    </button>
                                </form>
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

        // ==================== CITY DROPDOWN (ROBUST) ====================
        const cityWrapper = document.getElementById('cityWrapper');
        if (cityWrapper) {
            const trigger = document.getElementById('cityTrigger');
            const dropdown = document.getElementById('cityDropdown');
            const list = document.getElementById('cityList');
            const hiddenSelect = document.getElementById('acity');
            const search = document.getElementById('citySearch');
            const selectedText = trigger.querySelector('.selected-text');

            // Build list from hidden select options
            Array.from(hiddenSelect.options).forEach(opt => {
                if (!opt.value) return;
                const li = document.createElement('li');
                li.className = "p-2 hover:bg-gray-100 cursor-pointer border-b text-sm";
                li.textContent = opt.text;
                li.dataset.value = opt.value;
                li.onclick = (e) => {
                    e.stopPropagation();
                    hiddenSelect.value = opt.value;
                    selectedText.textContent = opt.text;
                    selectedText.classList.remove('text-gray-400');
                    dropdown.classList.add('hidden');
                };
                list.appendChild(li);
            });

            trigger.onclick = (e) => {
                e.stopPropagation();
                dropdown.classList.toggle('hidden');
                if (!dropdown.classList.contains('hidden')) search.focus();
            };

            search.oninput = (e) => {
                const val = e.target.value.toLowerCase();
                list.querySelectorAll('li').forEach(li => {
                    li.style.display = li.textContent.toLowerCase().includes(val) ? '' : 'none';
                });
            };

            document.addEventListener('click', () => dropdown.classList.add('hidden'));
        }

        // ==================== SOURCE TRACKING ====================
        (function() {
            const params = new URLSearchParams(window.location.search);
            let source = params.get("utm_source") || document.referrer || "Website";
            const srcLower = source.toLowerCase();
            if (srcLower.includes("google")) {
                source = "Google-Ads by Agency";
            } else if (srcLower.includes("facebook") || srcLower.includes("meta")) {
                source = "Facebook by Agency";
            } else if (srcLower.includes("instagram") || srcLower.includes("ig")) {
                source = "Instagram by Agency";
            } else if (source !== "Website") {
                source = "Others";
            }
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }
            const sourceInput = document.getElementById("source");
            if (sourceInput) {
                sourceInput.value = sessionStorage.getItem("leadSource");
            }
        })();

        // ==================== FORM SUBMISSION ====================
        const form = document.getElementById("AdmissionForm");
        if (form) {
            form.addEventListener("submit", async function(e) {
                e.preventDefault();
                const btn = document.getElementById("AsubmitBtn");

                // Validation helpers
                const nameRegex = /^[A-Za-z\s]+$/;
                const mobileRegex = /^[6-9]\d{9}$/;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const pincodeRegex = /^[1-9][0-9]{5}$/;

                // Gather values
                const session = document.getElementById("asession").value;
                const grade = document.getElementById("agrade").value;
                const studentName = document.getElementById("astudent_name").value.trim();
                const parentName = document.getElementById("aparent_name").value.trim();
                const mobile = document.getElementById("amobile").value.trim();
                const email = document.getElementById("aemail").value.trim();
                const city = document.getElementById("acity").value;
                const pincode = document.getElementById("apincode").value.trim();
                const source = document.getElementById("source").value;
                const terms = document.getElementById("terms").checked;

                // Validation
                if (!session || !grade || !studentName || !mobile || !city || !pincode) {
                    alert("Please fill all required fields.");
                    return;
                }
                if (!nameRegex.test(studentName)) {
                    alert("Student name contains invalid characters.");
                    return;
                }
                if (parentName && !nameRegex.test(parentName)) {
                    alert("Parent name contains invalid characters.");
                    return;
                }
                if (!mobileRegex.test(mobile)) {
                    alert("Please enter a valid 10-digit mobile number starting with 6-9.");
                    return;
                }
                if (email && !emailRegex.test(email)) {
                    alert("Please enter a valid email address.");
                    return;
                }
                if (!pincodeRegex.test(pincode)) {
                    alert("Please enter a valid 6-digit pincode.");
                    return;
                }
                if (!terms) {
                    alert("Please agree to Terms and Conditions.");
                    return;
                }

                btn.disabled = true;
                btn.textContent = "Submitting...";

                // ✅ COMPLETE PAYLOAD – includes all fields expected by backend
                const payload = {
                    session: session,
                    grade: grade,
                    grade_name: grade,                     // optional but safe
                    name: studentName,
                    parent_name: parentName,
                    phone: mobile,
                    email: email,
                    city: city,
                    pincode: pincode,
                    source: source,
                    branch_id: 7,                           // DPS Eldeco branch ID
                    school_id: 1,
                    source_type: "Website",
                    enquiry_type: "Digital",
                    message: "This Message From DPS Eldeco Website",
                    subject: "Admission Enquiry",
                    language_id: 1
                };

                console.log("Submitting payload:", payload); // for debugging

                try {
                    const res = await fetch('proxy/admission-proxy', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });

                    const responseData = await res.json().catch(() => ({ error: "Invalid JSON response" }));

                    if (!res.ok) {
                        throw new Error(`HTTP ${res.status}: ${responseData.message || JSON.stringify(responseData)}`);
                    }

                    if (responseData.status === false) {
                        throw new Error(responseData.message || "API returned an error");
                    }

                    // Success
                    document.getElementById("AdmissionFormPopup").classList.remove("hidden");
                    form.reset();

                    // Reset city display
                    const selectedLabel = document.querySelector('#cityTrigger .selected-text');
                    if (selectedLabel) {
                        selectedLabel.textContent = "Select City";
                        selectedLabel.classList.add('text-gray-400');
                    }
                    document.getElementById("acity").value = "";

                    setTimeout(() => document.getElementById("AdmissionFormPopup").classList.add("hidden"), 5000);
                } catch (err) {
                    console.error("Submission error:", err);
                    alert("Submission failed: " + err.message);
                } finally {
                    btn.disabled = false;
                    btn.textContent = "Submit";
                }
            });
        }
    </script>
</body>
</html>