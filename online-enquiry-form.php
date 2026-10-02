<?php 
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Saharanpur | Online Enquiry Form</title>
    <style>
        /* Custom scrollbar for city list */
        #cityList::-webkit-scrollbar { width: 5px; }
        #cityList::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>

<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] text-[28px] font-[700] text-white text-left ml-4 sm:ml-[7rem] hr-line relative leading-9">
                    Online Enquiry Form
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/" class="text-sm font-medium text-blue-main">Home</a>
                </li>
                <li class="flex items-center text-blue-main">
                    <svg class="w-3 h-3 mx-1" fill="none" viewBox="0 0 6 10" stroke="currentColor"><path stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                    <span class="text-sm font-medium">Admission</span>
                </li>
                <li class="flex items-center text-blue-main">
                    <svg class="w-3 h-3 mx-1" fill="none" viewBox="0 0 6 10" stroke="currentColor"><path stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                    <a href="online-enquiry-form" class="text-sm font-medium">Online Enquiry Form</a>
                </li>
            </ol>
        </div>

        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>

                <div class="my-10">
                    <form id="AdmissionForm" method="post">
                        <div class="mt-4">
                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                <option value="" disabled selected>Enquiry For Session</option>
                                <?php
                                $sessions = include "includes/session-api.php";
                                $uniqueSessions = array_unique(array_column($sessions, 'session'));
                                foreach ($uniqueSessions as $sess):
                                    if (empty(trim($sess))) continue;
                                ?>
                                    <option value="<?= htmlspecialchars($sess) ?>"><?= htmlspecialchars($sess) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mt-4">
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

                                            // remove duplicates
                                            $uniqueGrades = [];
                                            foreach ($grades as $g) {
                                                $grade = trim($g['grades']);
                                                if ($grade && !in_array($grade, $uniqueGrades)) {
                                                    $uniqueGrades[] = $grade;
                                                }
                                            }

                                            // safe sorting
                                            usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {

                                                $posA = array_search($a, $gradeOrder);
                                                $posB = array_search($b, $gradeOrder);

                                                $posA = ($posA === false) ? 999 : $posA;
                                                $posB = ($posB === false) ? 999 : $posB;

                                                return $posA - $posB;
                                            });

                                            foreach ($uniqueGrades as $gr):
                                        ?>
                                    <option value="<?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>
                                    </option>
                                    <?php endforeach; } else { ?>
                                        <option value="">No grades available</option>
                                    <?php } ?>
                                </select>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>
                        <div class="mt-4">
                            <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                        </div>
                        <div class="mt-4">
                            <input type="text" id="aemail" placeholder="Email" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                        </div>

                        <div class="mt-4 relative" id="cityWrapper">
                            <select id="acity" name="city" class="hidden" required>
                                <option value="">Select City</option>
                                <?php
                                $cities = include 'includes/get-city.php';
                                if (!empty($cities)):
                                    $uniqueCities = array_unique(array_column($cities, 'name'));
                                    sort($uniqueCities);
                                    foreach ($uniqueCities as $cityName):
                                ?>
                                    <option value="<?= htmlspecialchars($cityName) ?>"><?= htmlspecialchars($cityName) ?></option>
                                <?php endforeach; endif; ?>
                            </select>

                            <div class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center" id="cityTrigger">
                                <span class="selected-text text-[#808080cc]">Select City</span>
                                <span>▼</span>
                            </div>

                            <div class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full" id="cityDropdown">
                                <input type="text" id="citySearch" placeholder="Search..." class="w-full p-2 border-b border-gray-300 outline-none">
                                <ul class="max-h-48 overflow-y-auto" id="cityList"></ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="apincode" placeholder="Pincode" class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" required>
                            <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                        </div>

                        <div class="mt-4 flex items-center gap-2">
                            <input type="checkbox" id="terms" required>
                            <label for="terms" class="text-sm">I agree to <a href="termsandconditions" class="text-blue-500 underline">Terms & Conditions</a>.</label>
                        </div>

                        <input type="hidden" name="source" id="source">
                        
                        <div id="successPopup" class="hidden mt-4 p-3 bg-green-500 text-white rounded text-center">
                            Form submitted successfully!
                        </div>

                        <div class="my-4">
                            <button type="submit" id="AsubmitBtn" class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // --- 1. Source Tracking (Enhanced) ---
        (function() {
            const urlParams = new URLSearchParams(window.location.search);
            let source = urlParams.get("utm_source") || document.referrer || "Website";
            const s = source.toLowerCase();
            if (s.includes("google")) source = "Google-Ads by Agency";
            else if (s.includes("facebook") || s.includes("meta")) source = "Facebook by Agency";
            else if (s.includes("instagram") || s.includes("ig")) source = "Instagram by Agency";
            else if (source !== "Website") source = "Others";
            
            if (!sessionStorage.getItem("leadSource")) sessionStorage.setItem("leadSource", source);
            document.getElementById("source").value = sessionStorage.getItem("leadSource");
        })();

        // --- 2. City Dropdown (Robust) ---
        const cityWrapper = document.getElementById('cityWrapper');
        const cityTrigger = document.getElementById('cityTrigger');
        const cityDropdown = document.getElementById('cityDropdown');
        const citySearch = document.getElementById('citySearch');
        const cityList = document.getElementById('cityList');
        const hiddenCitySelect = document.getElementById('acity');
        const selectedLabel = cityTrigger.querySelector('.selected-text');

        // Populate visual list from hidden select
        Array.from(hiddenCitySelect.options).forEach(opt => {
            if (opt.value === "") return;
            const li = document.createElement('li');
            li.className = "p-2 hover:bg-blue-50 cursor-pointer text-sm text-gray-700 border-b last:border-0";
            li.textContent = opt.text;
            li.onclick = (e) => {
                e.stopPropagation();
                hiddenCitySelect.value = opt.value;
                selectedLabel.textContent = opt.text;
                selectedLabel.classList.remove('text-[#808080cc]');
                selectedLabel.classList.add('text-black');
                cityDropdown.classList.add('hidden');
            };
            cityList.appendChild(li);
        });

        cityTrigger.onclick = (e) => {
            e.stopPropagation();
            cityDropdown.classList.toggle('hidden');
            if (!cityDropdown.classList.contains('hidden')) citySearch.focus();
        };

        citySearch.oninput = (e) => {
            const term = e.target.value.toLowerCase();
            cityList.querySelectorAll('li').forEach(li => {
                li.style.display = li.textContent.toLowerCase().includes(term) ? "block" : "none";
            });
        };

        document.addEventListener('click', (e) => {
            if (!cityWrapper.contains(e.target)) cityDropdown.classList.add('hidden');
        });

        // --- 3. Validation & Submission (FIXED) ---
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        document.getElementById("AdmissionForm").addEventListener("submit", async function(e) {
            e.preventDefault();
            const btn = document.getElementById("AsubmitBtn");
            
            // Gather values
            const session = document.getElementById("asession").value;
            const grade = document.getElementById("agrade").value;
            const sName = document.getElementById("astudent_name").value.trim();
            const pName = document.getElementById("aparent_name").value.trim();
            const mobile = document.getElementById("amobile").value.trim();
            const email = document.getElementById("aemail").value.trim();
            const city = hiddenCitySelect.value;
            const pin = document.getElementById("apincode").value.trim();
            const source = document.getElementById("source").value;
            const terms = document.getElementById("terms").checked;

            // Validation
            if (!session || !grade || !sName || !mobile || !city || !pin) {
                alert("Please fill all required fields.");
                return;
            }
            if (!nameRegex.test(sName)) {
                alert("Student name contains invalid characters.");
                return;
            }
            if (pName && !nameRegex.test(pName)) {
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
            if (!pincodeRegex.test(pin)) {
                alert("Please enter a valid 6-digit pincode.");
                return;
            }
            if (!terms) {
                alert("Please agree to Terms & Conditions.");
                return;
            }

            btn.disabled = true;
            btn.textContent = "Submitting...";

            // ✅ COMPLETE PAYLOAD – includes all fields expected by backend
            const payload = {
                session: session,
                grade: grade,
                grade_name: grade,                     // optional but safe
                name: sName,
                parent_name: pName,
                phone: mobile,
                email: email,
                city: city,
                pincode: pin,
                source: source,
                branch_id: 7,                           // DPS Saharanpur branch ID (adjust if needed)
                school_id: 1,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Saharanpur Website",
                subject: "Admission Enquiry",
                language_id: 1
            };

            console.log("Submitting payload:", payload); // for debugging

            try {
                const res = await fetch(`proxy/admission-proxy`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
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
                document.getElementById("successPopup").classList.remove("hidden");
                document.getElementById("AdmissionForm").reset();

                // Reset city display
                selectedLabel.textContent = "Select City";
                selectedLabel.classList.add('text-[#808080cc]');
                hiddenCitySelect.value = "";

                setTimeout(() => document.getElementById("successPopup").classList.add("hidden"), 5000);
            } catch (err) {
                console.error("Submission error:", err);
                alert("Submission failed: " + err.message);
            } finally {
                btn.disabled = false;
                btn.textContent = "Submit";
            }
        });
    </script>

    <?php include "includes/foot.php" ?>
</body>
</html>