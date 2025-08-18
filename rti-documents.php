<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTI Documents</title>
    <?php include_once "include/header_script.php"; ?>
    <style>
        .icon-pdf::before {
            content: "\e993";
            font-family: 'custom-icons';
            /* Replace with your icon font */
        }

        .icon-download::before {
            content: "\e9c5";
            /* Example download icon */
            font-family: 'custom-icons';
        }
    </style>
</head>

<body class="bg-[#f5f3ee] ">
    <?php include_once "include/header.php"; ?>
    <div class="max-w-7xl mx-auto py-6">
        <h1 class="text-2xl font-medium mb-4">RTI Documents</h1>

        <div class="overflow-x-auto w-full py-4">
            <table class="min-w-full text-sm text-left border border-gray-300 shadow-sm">
                <!-- Black Header -->
                <thead>
                    <tr class="bg-gray-800 text-white text-base font-semibold">
                        <th colspan="3" class="px-4 py-3">RTI Documents</th>
                    </tr>
                    <tr class="bg-[#efaf43] text-black text-base">
                        <th class="p-4 font-medium">S.No</th>
                        <th class="p-4 font-medium">Description</th>
                        <th class="p-4 font-medium">Download</th>
                    </tr>
                </thead>

                <tbody class="text-gray-800">
                    <tr class="bg-white">
                        <td class="px-4 py-2 border">1</td>
                        <td class="px-4 py-2 border">Sample Application form A for obtaining information under Right to
                            Information Act, 2005</td>
                        <td class="px-4 py-2 border">
                            <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225615212178.pdf"
                                target="_blank" class="text-[#6a4501] inline-flex items-center gap-1">
                                View(26 KB)
                                <i class="fa-regular fa-file-pdf"></i>
                                <i class="fa-sharp fa-solid fa-download"></i> </a>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="px-4 py-2 border">2</td>
                        <td class="px-4 py-2 border">Sample Application form B for obtaining information under Right to
                            Information Act, 2005</td>
                        <td class="px-4 py-2 border">
                            <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412251103927237.pdf"
                                target="_blank" class="text-[#6a4501] inline-flex items-center gap-1">
                                View(20 KB)
                                <i class="fa-regular fa-file-pdf"></i>
                                <i class="fa-sharp fa-solid fa-download"></i> </a>
                        </td>
                    </tr>

                    <tr class="bg-white">
                        <td class="px-4 py-2 border">3</td>
                        <td class="px-4 py-2 border">Sample Application form C for obtaining information under Right to
                            Information Act, 2005</td>
                        <td class="px-4 py-2 border">
                            <a href="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/20241225875674689.pdf"
                                target="_blank" class="text-[#6a4501] inline-flex items-center gap-1">
                                View(20 KB)
                                <i class="fa-regular fa-file-pdf"></i>
                                <i class="fa-sharp fa-solid fa-download"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>