<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements(General) | Zilla Parishad Palghar | India</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f6f3ee] font-sans">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <!-- Header -->


    <!-- Main Title -->
    <div class="max-w-7xl mx-auto py-6 flex justify-between items-center">
        <h1 class="text-[28px] font-semibold text-gray-900"><?= $ct ?></h1>
        <select name="" id="" class="bg-transparent border border-gray-300 rounded-md px-7 py-1">
            <option value="all">--Sort By--</option>
            <option value="start-date">Start Date</option>
            <option value="end-date">End Date</option>
        </select>
    </div>

    <!-- Table Content -->
    <div class="max-w-7xl mx-auto pb-8 flex flex-col gap-y-12">

        <div class="bg-[#f8f8f8] shadow-sm border">
            <div class="bg-[#333] text-white px-6 py-2 ">
                <h2 class="text-xl font-semibold">Announcements (General)</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full bg-white">
                    <thead>
                        <tr class="bg-[#fbac1b] text-black">
                            <th class="px-6 py-3 text-left text-sm font-semibold w-80">Title</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold w-96">Description</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Start Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">End Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">File</th>
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
                                    class="text-gray-700 hover:text-gray-900">Revised Final Service Seniority List for Center Head Promotion</a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">Revised Final Service Seniority List for Center Head Promotion</td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">26/12/2024</td>
                            <td class="px-6 py-2 text-sm text-gray-700 border-r border-gray-200">26/12/2025</td>
                            <td class="px-6 py-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241226199753461.pdf"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-[#6a4501] hover:text-black">
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
                    </tbody>
                </table>
            </div>
        </div>

        <button class="w-fit py-1 px-2 border border-[#FBAC1B]">
            Archive
        </button>

    </div>





    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>