<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act & Rules | Zilla Parishad Palghar | India</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f6f3ee] font-sans">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>


    <!-- Main Title -->
    <div class="max-w-7xl mx-auto px-4 py-1">
        <h1 class="text-[28px] font-semibold text-gray-900"><?= $ct ?></h1>
    </div>

    <!-- Search Bar with filter -->
    <div class="max-w-7xl mx-auto  px-4 py-6">
        <div class="bg-[#e0e1e0] flex">

            <div class="relative md:flex items-center hidden basis-[25%] bg-[#fbad1a] text-nowrap px-6 py-8">
                Filter Document category wise
                <svg class="absolute -right-3 bottom-9" width="13" height="22" viewBox="0 0 13 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 11L0.25 21.3923L0.25 0.607696L13 11Z" fill="#FBAD1A" />
                </svg>


            </div>


            <div class=" md:basis-[75%] w-full px-6 py-8 flex justify-center items-center">
                <div class="flex">
                    <select name="" id="categoryFilter" class="min-w-40 md:w-72 lg:w-[570px] p-1">
                        <option value="all">All</option>
                        <option value="acts_rules" selected>Acts & Rules</option>
                        <option value="circulars_notifications">Circulars / Notifications</option>
                        <option value="annual_reports">Annual Reports</option>
                        <option value="budget_information">Budget Information</option>
                        <option value="citizen_charter">Citizen Charter</option>
                        <option value="government_orders">Government Orders</option>
                        <option value="rti_documents">RTI Documents / Manuals</option>
                    </select>
                    <button id="filterButton"
                        class="flex justify-center items-center gap-1 bg-[#fbad1a] text-black text-sm px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Content -->
    <div class="max-w-7xl mx-auto px-4 pb-8">

        <div class="bg-[#f8f8f8] shadow-sm border">
            <div class="bg-[#333] text-white px-6 py-2 ">
                <h2 class="text-xl font-semibold">All Documents</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full bg-white">
                    <thead>
                        <tr class="bg-[#fbac1b] text-black">
                            <th class="px-6 py-3 text-left text-sm font-semibold">Title</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">View / Download</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">

                        <!-- Row 11 -->
                        <tr class="">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412011472472300.pdf"
                                    aria-label="RTS Rules Gazette PDF 171 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">RTS Rules Gazette</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">18/11/2016</td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412011472472300.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(171 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412011472472300.pdf"
                                        download="" aria-label="Download, RTS Rules Gazette PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>