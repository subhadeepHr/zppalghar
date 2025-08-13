<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents | Zilla Parishad Palghar | India</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include_once "../include/header_script.php"; ?>
</head>

<body class="bg-[#f6f3ee] font-sans">
    <?php include_once "../include/header.php"; ?>
    <!-- Header -->
    <div class="">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Breadcrumb -->
                <nav class="text-sm">
                    <a href="#" class="text-orange-600 hover:text-orange-700">Home</a>
                    <span class="mx-2 text-gray-500">></span>
                    <span class="text-gray-700">Documents</span>
                </nav>

                <!-- Social Icons -->
                <div class="flex items-center space-x-2">
                    <button id="print" tabindex="0" aria-label="Print Page Content"
                        class="cursor-pointer hover:opacity-75 transition-opacity">
                        <img src="../assets/print_icon.svg" alt="print icon" class="size-5" />
                    </button>
                    <span>/</span>
                    <img src="../assets/share_icon.svg" alt="share icon" class="size-5" />
                    <a
                        href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents"><img
                            src="../assets/facebook_social_icon.svg" alt="facebook icon" class="size-5"></a>
                    <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents"
                        class="text-blue-400 hover:text-blue-500"><img src="../assets/twitter_social_icon.svg"
                            alt="twitter icon" class="size-5"></a>
                    <a href="http://www.linkedin.com/sharing/share-offsite/?url=https://www.zppalghar.gov.in/en/documents/&mini=true"
                        class="text-blue-700 hover:text-blue-800"><img src="../assets/linkedin_social_icon.svg"
                            alt="linkedin icon" class="size-5"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Title -->
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h1 class="text-[28px] font-semibold text-gray-900">Documents</h1>
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
                        <option value="acts_rules">Acts & Rules</option>
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
                        <!-- Row 1 -->
                        <tr class="">
                            <td class="px-6 py-2  text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226740708532.pdf"
                                    aria-label="Right to Service Act 2015 Document for publication on home page of District Website PDF 1 MB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Right to Service Act 2015 Document for
                                    publication on home page of District Website</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226740708532.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(1 MB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226740708532.pdf"
                                        download=""
                                        aria-label="Download, Right to Service Act 2015 Document for publication on home page of District Website PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="bg-[#f5f5f4]">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261655917127.pdf"
                                    aria-label="Maharashtra Right To Service Ordinance 2015 PDF 872 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Maharashtra Right To Service Ordinance
                                    2015</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">28/04/2015</td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261655917127.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(872 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261655917127.pdf"
                                        download=""
                                        aria-label="Download, Maharashtra Right To Service Ordinance 2015 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226921605118.pdf"
                                    aria-label="Regarding implementation of Right to Service Act 2015 PDF 729 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Regarding implementation of Right to
                                    Service Act 2015</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">21/11/2023</td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226921605118.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(729 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226921605118.pdf"
                                        download=""
                                        aria-label="Download, Regarding implementation of Right to Service Act 2015 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="bg-[#f5f5f4]">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261895568194.pdf"
                                    aria-label="Notified Services 1 to 7 under Right To Service Act PDF 696 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Notified Services 1 to 7 under Right To
                                    Service Act</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">16/02/2019</td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261895568194.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(696 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412261895568194.pdf"
                                        download=""
                                        aria-label="Download, Notified Services 1 to 7 under Right To Service Act PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225875674689.pdf"
                                    aria-label="Sample Application form C for obtaining information under Right to Information Act, 2005 PDF 20 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Sample Application form C for obtaining
                                    information under Right to Information Act, 2005</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225875674689.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(20 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225875674689.pdf"
                                        download=""
                                        aria-label="Download, Sample Application form C for obtaining information under Right to Information Act, 2005 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="bg-[#f5f5f4]">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251103927237.pdf"
                                    aria-label="Sample Application form B for obtaining information under Right to Information Act, 2005 PDF 20 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Sample Application form B for obtaining
                                    information under Right to Information Act, 2005</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251103927237.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(20 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251103927237.pdf"
                                        download=""
                                        aria-label="Download, Sample Application form B for obtaining information under Right to Information Act, 2005 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr class="">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225615212178.pdf"
                                    aria-label="Sample Application form A for obtaining information under Right to Information Act, 2005 PDF 26 KB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Sample Application form A for obtaining
                                    information under Right to Information Act, 2005</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225615212178.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(26 KB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225615212178.pdf"
                                        download=""
                                        aria-label="Download, Sample Application form A for obtaining information under Right to Information Act, 2005 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr class="bg-[#f5f5f4]">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225329421671.pdf"
                                    aria-label="Zilla Parishad Palghar Budget 2024-25 PDF 10 MB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Zilla Parishad Palghar Budget 2024-25</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225329421671.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(10 MB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225329421671.pdf"
                                        download="" aria-label="Download, Zilla Parishad Palghar Budget 2024-25 PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr class="">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251629370129.pdf"
                                    aria-label="Annual Report 2023-24 (Health Department) PDF 2 MB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Annual Report 2023-24 (Health
                                    Department)</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251629370129.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(2 MB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251629370129.pdf"
                                        download="" aria-label="Download, Annual Report 2023-24 (Health Department) PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr class="bg-[#f5f5f4]">
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">
                                <a target="_blank"
                                    href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241203924015292.pdf"
                                    aria-label="Citizen Charter Finance Department PDF 2 MB - opens in a new window"
                                    title="Click here to view" rel="noopener noreferrer"
                                    class="text-gray-700 hover:text-gray-900">Citizen Charter Finance Department</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200"></td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241203924015292.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">Accessible Version :
                                        View</a>
                                    <i class="far fa-file-pdf text-gray-500" aria-hidden="true"></i>
                                    <span class="text-gray-500 text-xs">(2 MB)</span>
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241203924015292.pdf"
                                        download="" aria-label="Download, Citizen Charter Finance Department PDF"
                                        class="ml-3 text-gray-600 hover:text-gray-800" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

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

    <?php include_once "../include/footer.php"; ?>
    <?php include_once "../include/footer_script.php"; ?>
</body>

</html>