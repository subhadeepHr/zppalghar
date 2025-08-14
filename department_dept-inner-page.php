<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Administration Department</title>
    <?php include_once "include/header_script.php"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-[#f6f3ee] font-sans">
    <?php include_once "include/header.php"; ?>
    <!-- Header -->
    <div class="">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Breadcrumb -->
                <nav class="text-md">
                    <a href="#" class="text-orange-600 hover:text-orange-700">Home</a>
                    <span class="mx-2 text-gray-500">></span>
                    <span class="text-gray-700">General Administration Department</span>
                </nav>

                <!-- Social Icons -->
                <div class="flex space-x-3">
                    <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fas fa-print"></i></a>
                    <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fas fa-share-alt"></i></a>
                    <a href="#" class="text-blue-600 hover:text-blue-700"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-500"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-blue-700 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Title -->
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h1 class="text-[28px] font-semibold text-gray-900">General Administration Department</h1>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 pb-8">
        <div class="flex flex-col lg:flex-row gap-4 bg-[#f8f8f8]">
            <!-- Sidebar Navigation -->
            <div class="lg:w-52 flex-shrink-0">
                <nav class="flex flex-col gap-[1px]">
                    <button onclick="showTab(event, 'hod')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        HOD
                    </button>
                    <button onclick="showTab(event, 'vision')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Vision & Mission
                    </button>
                    <button onclick="showTab(event, 'objectives')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Objectives & Functions
                    </button>
                    <button onclick="showTab(event, 'setup')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Administrative Setup
                    </button>
                    <button onclick="showTab(event, 'organization')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Organization
                    </button>
                    <button onclick="showTab(event, 'seniority')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Seniority list
                    </button>
                    <button onclick="showTab(event, 'vacancy')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Vacancy metrics
                    </button>
                    <button onclick="showTab(event, 'recruitment')"
                        class="tab-btn w-full text-left px-4 py-3 bg-[#5aa1e3] text-white font-medium rounded-sm hover:bg-[#4a8ccc] transition-colors">
                        Recruitment rules
                    </button>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 px-4 ">
                <!-- HOD Tab -->
                <div id="hod" class="tab-content py-2">
                    <div class="bg-[#f8f8f8] p-4">
                        <div class="text-black py-2">
                            <h2 class="text-2xl font-semibold">HOD</h2>
                        </div>
                        <div class="flex flex-col text-black">
                            <p><span class="font-bold">Name</span> – Mr. Chandrashekhar Jagtap</p>
                            <p><span class="font-bold">Designation</span> – Deputy Chief Executive Officer (GAD)
                                (Acting)</p>
                            <p><span class="font-bold">Email address</span> – gadzppalghar[at]gmail[dot]com</p>
                            <p><span class="font-bold">Address</span> – Room No 007, Ground Floor, Zilla Parishad
                                Office, Palghar-
                                Boisar Rd, Kolgaon, Taluka-District – Palghar, 401404</p>
                            <p><span class="font-bold">Phone number</span> – 02525-205403</p>
                            <p><span class="font-bold">Room No</span> – 007</p>
                        </div>
                    </div>
                </div>


                <!-- Vision & Mission Tab -->
                <div id="vision" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] ">
                        <div class="text-black py-2 ">
                            <h2 class="text-2xl font-semibold">Vision & Mission</h2>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p>General Administration Department is an important department out of total 17
                                    departments of Zilla Parishad Palghar. Deputy Chief Executive Officer (Gen.) is head
                                    of this department. Scrutiny of important information/administrative proposals and
                                    cases from all departments in Zilla Parishad as required gives approval of Hon.
                                    Chief Executive Officer, Z.P. Palghar’s and submit to the senior office is done
                                    through this department.</p>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Objectives & Functions Tab -->
                <div id="objectives" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] ">
                        <div class="text-black py-2 ">
                            <h2 class="text-2xl font-semibold">Objectives & Functions</h2>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <ul class="list-disc list-inside space-y-2 text-black">
                                    <li>
                                        All appointments made by Zilla Parishad including promotions, district
                                        transfers,
                                        promotion wise transfers, inquiry cases, award of advance pay increment to
                                        employees
                                        for outstanding performance, etc. Overseeing the working of General Assembly,
                                        Standing
                                        Committee Assembly in Zilla Parishad.
                                    </li>
                                    <li>Establishment of Maharashtra Vikas Seva Class-1 and 2 Officers.</li>
                                    <li>Z.P. Establishment works of class 3 and 4 employees.</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Administrative Setup Tab -->
                <div id="setup" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] ">
                        <div class="text-black py-2 ">
                            <h2 class="text-2xl font-semibold">Administrative Setup</h2>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="text-black mb-4">
                                    A committee headed by Balwantrai Mehta recommended a three-tier Panchayati Raj
                                    system in 1957.
                                    The Government of Maharashtra established the Maharashtra Zilla Parishads and
                                    Panchayat Samitis Act 1961
                                    and adopted the three-tier Panchayat Raj system on 1 May 1962 under the Act.
                                </p>
                                <ul class="list-disc list-inside space-y-2 text-black">
                                    <li><span class="font-bold">Zilla Parishad</span></li>
                                    <li><span class="font-bold">Panchayat Samiti</span></li>
                                    <li><span class="font-bold">Gram Panchayat</span></li>
                                    <li><span class="font-bold">Attached to Hierarchy</span></li>
                                </ul>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Organization Tab -->
                <div id="organization" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] ">
                        <div class="text-black py-2 ">
                            <h2 class="text-2xl font-semibold">Organization</h2>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <div class="mb-4">
                                    <p class="font-bold text-black">Attached Offices</p>
                                    <ul class="list-disc list-inside space-y-2 text-black">
                                        <li>Zilla Parishad Palghar</li>
                                        <li>Panchayat Samiti</li>
                                        <li>Gram Panchayat</li>
                                    </ul>
                                </div>

                                <div>
                                    <p class="font-bold text-black">Commissions</p>
                                    <p class="text-black">
                                        Divisional Commissioner, Konkan Division Navi Mumbai, Belapur.
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Seniority List Tab -->
                <div id="seniority" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] shadow-sm border">
                        <div class="bg-[#333] text-white px-6 py-2 ">
                            <h2 class="text-xl font-semibold">Seniority List</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr class="bg-[#fbac1b] text-black">
                                        <th class="px-6 py-3 text-left text-md font-semibold w-1/3">Sr.No</th>
                                        <th class="px-6 py-3 text-left text-md font-semibold w-1/3">Subject</th>
                                        <th class="px-6 py-3 text-left text-md font-semibold w-1/3">Download</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">1.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            Regarding publication of revised seniority list of employees in the Senior
                                            Assistant Cadre of the General Administration Department as on 01/01/2025.
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">2.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            The seniority list of Zilla Parishad employees for selection in Maharashtra
                                            Development Service Class-2 has been revised on 01.01.2025 itself, as per
                                            the final seniority list dated 31 March 2017.
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">3.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            Final service seniority list of employees working in the Senior Assistant
                                            Cadre as on 01.01.2025
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- Vacancy Metrics Tab -->
                <div id="vacancy" class="tab-content py-2 hidden">
                    <div class="bg-[#f8f8f8] shadow-sm border">
                        <div class="bg-[#333] text-white px-6 py-2 ">
                            <h2 class="text-xl font-semibold">Vacancy Metrics</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr class="bg-[#fbac1b] text-black">
                                        <th class="px-6 py-3 text-left text-md font-semibold">Sr.No</th>
                                        <th class="px-6 py-3 text-left text-md font-semibold">Subject</th>
                                        <th class="px-6 py-3 text-left text-md font-semibold">Download</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">1.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            Regarding publication of revised seniority list of employees in the Senior
                                            Assistant Cadre of the General Administration Department as on 01/01/2025.
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">2.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            The seniority list of Zilla Parishad employees for selection in Maharashtra
                                            Development Service Class-2 has been revised on 01.01.2025 itself, as per
                                            the final seniority list dated 31 March 2017.
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">3.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            Final service seniority list of employees working in the Senior Assistant
                                            Cadre as on 01.01.2025
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
                                        <td class="px-6 py-4 text-md text-gray-900">4.</td>
                                        <td class="px-6 py-4 text-md text-gray-700">
                                            Final service seniority list of disabled employees working in Junior
                                            Assistant cadre as on 01.01.2025
                                        </td>
                                        <td class="px-6 py-4 text-md">
                                            <a href="#" class="text-[#6a4501] hover:text-black items-center">
                                                General Administration Department (PDF) <i class="far fa-file-pdf text-[#6a4501]" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

                <!-- Recruitment Rules Tab -->
                <div id="recruitment" class="tab-content py-2 hidden">

                </div>

            </div>
        </div>
    </div>
    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
    <script>
        function showTab(e, tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.add('hidden'));

            // Reset all tab buttons to default style
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(btn => {
                btn.classList.remove('bg-[#f8f8f8]', 'text-gray-600');
                btn.classList.add('bg-[#5aa1e3]', 'text-white', 'hover:bg-[#4a8ccc]');
            });

            // Show selected tab content
            document.getElementById(tabName).classList.remove('hidden');

            // Highlight active tab button
            e.target.classList.remove('bg-[#5aa1e3]', 'text-white', 'hover:bg-[#4a8ccc]');
            e.target.classList.add('bg-[#f8f8f8]', 'text-gray-600');
        }

        // Show default tab on page load
        document.addEventListener('DOMContentLoaded', function() {
            showTab({
                target: document.querySelector('.tab-btn')
            }, 'hod'); // Default open first tab
        });
    </script>
</body>

</html>