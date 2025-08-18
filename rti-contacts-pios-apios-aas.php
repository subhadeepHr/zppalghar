<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RTI Contacts</title>
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f5f3ee] ">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <div class="max-w-7xl mx-auto px-1 py-6">
        <h1 class="text-2xl font-bold mb-4">RTI Contacts</h1>
        <div class="bg-white shadow-sm rounded-md p-6">
            <!-- Tabs -->
            <button id="tab1-btn" class="px-4 py-2 rounded-t bg-transparent text-[#666] font-semibold mb-10"
                onclick="switchTab('tab1')">
                Public Information Officer and Appellate Officer (Central)
            </button>

            <button id="tab2-btn" class="px-4 py-2 rounded-t  bg-[#4868cf] text-white mb-10" onclick="switchTab('tab2')">
                Palghar Division-wise Appellate Officer
            </button>


            <!-- Tab Content 1 -->
            <div id="tab1" class="tab-content">
                <p class="mb-2 text-base">Central Right to Information, 2005 Information showing department-wise address and
                    telephone
                    number of Public Information Officer and Appellate Officer in Zilla Parishad.</p>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm border border-gray-300 bg-white shadow">
                        <thead>
                            <tr class="bg-gray-800 text-white text-xl font-medium text-left">
                                <th colspan="5" class="px-4 py-3">Public Information Officer and Appellate Officer in Zilla
                                    Parishad</th>
                            </tr>
                            <tr class="bg-[#efaf43] text-black text-base text-left">
                                <th class=" p-4 font-medium">Sr. No.</th>
                                <th class=" p-4 font-medium">Department name</th>
                                <th class=" p-4 font-medium">Asst. Public Information Officer</th>
                                <th class=" p-4 font-medium">Public Information Officer</th>
                                <th class=" p-4 font-medium">Appellate Officer Designation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            <tr class="bg-white">
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">General Administration Department</td>
                                <td class="border px-4 py-2">Extension Officer (Statistics)</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer (CEO)</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">Panchayat Division</td>
                                <td class="border px-4 py-2">Extension Officer (Statistics)</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">3</td>
                                <td class="border px-4 py-2">Women and Child Welfare Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">4</td>
                                <td class="border px-4 py-2">Water and Sanitation Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">5</td>
                                <td class="border px-4 py-2">Department of Finance</td>
                                <td class="border px-4 py-2">Accounts Officer</td>
                                <td class="border px-4 py-2">Senior Accounts Officer</td>
                                <td class="border px-4 py-2">Chief Accounts and Finance Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">6</td>
                                <td class="border px-4 py-2">Construction Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Deputy Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer Construction</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">7</td>
                                <td class="border px-4 py-2">Rural Water Supply Department</td>
                                <td class="border px-4 py-2">Senior Assistant</td>
                                <td class="border px-4 py-2">Asst. Executive Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer (RWS)</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">8</td>
                                <td class="border px-4 py-2">Minor Irrigation Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Deputy Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer Minor Irrigation</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">9</td>
                                <td class="border px-4 py-2">Primary Education Department</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">Deputy Education Officer</td>
                                <td class="border px-4 py-2">Education Officer Primary</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">10</td>
                                <td class="border px-4 py-2">Secondary Education Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Superintendent Class-2</td>
                                <td class="border px-4 py-2">Education Officer Secondary</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">11</td>
                                <td class="border px-4 py-2">Health Department</td>
                                <td class="border px-4 py-2">Administration Officer</td>
                                <td class="border px-4 py-2">Add. District Health Officer</td>
                                <td class="border px-4 py-2">District Health Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">12</td>
                                <td class="border px-4 py-2">Agriculture Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">District Agriculture Officer</td>
                                <td class="border px-4 py-2">Agricultural Development Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">13</td>
                                <td class="border px-4 py-2">Animal Husbandry Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">District Animal Husbandry Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">14</td>
                                <td class="border px-4 py-2">Department of Social Welfare</td>
                                <td class="border px-4 py-2">Concerned employees</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">District Social Welfare Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">15</td>
                                <td class="border px-4 py-2">District Rural Development Agency (DRDA)</td>
                                <td class="border px-4 py-2">Senior Assistant</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Project Director, District Rural Development Agency</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab Content 2 -->
            <div id="tab2" class="tab-content hidden">
                <p class="mb-2">Zilla Parishad, Palghar Division-wise Appellate Officer</p>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm border border-gray-300 bg-white shadow">
                        <thead>
                            <tr class="bg-gray-800 text-white text-xl font-medium text-left">
                                <th colspan="5" class="px-4 py-3">Public Information Officer and Appellate Officer in Zilla
                                    Parishad</th>
                            </tr>
                            <tr class="bg-[#efaf43] text-black text-base text-left">
                                <th class=" p-4 font-medium">Sr. No.</th>
                                <th class=" p-4 font-medium">Department name</th>
                                <th class=" p-4 font-medium">Asst. Public Information Officer</th>
                                <th class=" p-4 font-medium">Public Information Officer</th>
                                <th class=" p-4 font-medium">Appellate Officer Designation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            <tr class="bg-white">
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">General Administration Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Assistant Administration Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer (GAD)</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">Panchayat Division</td>
                                <td class="border px-4 py-2">Extension Officer (Statistics)</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer (VP)</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">3</td>
                                <td class="border px-4 py-2">Women and Child Welfare Department</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Room Officer</td>
                                <td class="border px-4 py-2">Deputy Chief Executive Officer (WCD)</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">4</td>
                                <td class="border px-4 py-2">Department of Finance</td>
                                <td class="border px-4 py-2">Accounts Officer</td>
                                <td class="border px-4 py-2">Senior Accounts Officer</td>
                                <td class="border px-4 py-2">Chief Accounts and Finance Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">5</td>
                                <td class="border px-4 py-2">Construction Department</td>
                                <td class="border px-4 py-2">Junior Administrative Officer</td>
                                <td class="border px-4 py-2">Deputy Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer Construction</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">6</td>
                                <td class="border px-4 py-2">Rural Water Supply Department</td>
                                <td class="border px-4 py-2">Senior Assistant</td>
                                <td class="border px-4 py-2">Asst. Executive Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer (RWS)</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">7</td>
                                <td class="border px-4 py-2">Minor Irrigation Department</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Deputy Engineer</td>
                                <td class="border px-4 py-2">Executive Engineer Minor Irrigation</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">8</td>
                                <td class="border px-4 py-2">Primary Education Department</td>
                                <td class="border px-4 py-2">Room Officer</td>
                                <td class="border px-4 py-2">Deputy Education Officer</td>
                                <td class="border px-4 py-2">Education Officer Primary</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">9</td>
                                <td class="border px-4 py-2">Secondary Education Department</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Superintendent Class-2</td>
                                <td class="border px-4 py-2">Education Officer Secondary</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">10</td>
                                <td class="border px-4 py-2">Health Department</td>
                                <td class="border px-4 py-2">Administration Officer</td>
                                <td class="border px-4 py-2">Add. District Health Officer</td>
                                <td class="border px-4 py-2">District Health Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">11</td>
                                <td class="border px-4 py-2">Agriculture Department</td>
                                <td class="border px-4 py-2">Room Officer</td>
                                <td class="border px-4 py-2">District Agriculture Officer</td>
                                <td class="border px-4 py-2">Agricultural Development Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">12</td>
                                <td class="border px-4 py-2">Animal Husbandry Department</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Room Officer</td>
                                <td class="border px-4 py-2">District Animal Husbandry Officer</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">13</td>
                                <td class="border px-4 py-2">Department of Social Welfare</td>
                                <td class="border px-4 py-2">Concerned employees</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Social Welfare Officer</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">14</td>
                                <td class="border px-4 py-2">District Rural Development Agency (DRDA)</td>
                                <td class="border px-4 py-2">Senior Assistant</td>
                                <td class="border px-4 py-2">Superintendent</td>
                                <td class="border px-4 py-2">Project Director, District Rural Development Agency</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
    <script>
        function switchTab(tabId) {
            // Hide all tabs
            document.querySelectorAll(".tab-content").forEach(t => t.classList.add("hidden"));

            // Show selected tab
            document.getElementById(tabId).classList.remove("hidden");

            // Toggle styles manually for both tabs
            const tab1Btn = document.getElementById("tab1-btn");
            const tab2Btn = document.getElementById("tab2-btn");

            if (tabId === 'tab1') {
                tab1Btn.classList.add("bg-transparent", "text-gray-800");
                tab1Btn.classList.remove("bg-[#4868cf]", "text-white", "font-semibold");

                tab2Btn.classList.add("bg-[#4868cf]", "text-white", "font-semibold");
                tab2Btn.classList.remove("bg-transparent", "text-gray-800");
            } else {
                tab2Btn.classList.add("bg-transparent", "text-gray-800");
                tab2Btn.classList.remove("bg-[#4868cf]", "text-white", "font-semibold");

                tab1Btn.classList.add("bg-[#4868cf]", "text-white", "font-semibold");
                tab1Btn.classList.remove("bg-transparent", "text-gray-800");
            }
        }
    </script>
</body>

</html>