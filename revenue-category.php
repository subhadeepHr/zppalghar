<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Services | Zilla Parishad Palghar | India</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f6f3ee] font-sans">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <!-- Header -->


    <!-- Main Title -->
    <div class="max-w-7xl mx-auto px-1 py-1">
        <h1 class="text-[28px] font-semibold text-gray-900"><?= $ct ?></h1>
    </div>

    <!-- Search Bar with filter -->
    <div class="max-w-7xl mx-auto  px-1 py-1">
        <div class="bg-[#e0e1e0] flex">

            <div class="relative md:flex items-center hidden basis-[25%] bg-[#fbad1a] text-nowrap px-6 py-8">
                Filter by Service Category
                <svg class="absolute -right-3 bottom-9" width="13" height="22" viewBox="0 0 13 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 11L0.25 21.3923L0.25 0.607696L13 11Z" fill="#FBAD1A" />
                </svg>


            </div>


            <div class=" md:basis-[75%] w-full px-6 py-8 flex justify-center items-center">
                <div class="flex">
                    <select name="" id="categoryFilterService" class="min-w-40 md:w-72 lg:w-[570px] p-1">
                        <option value="all">All</option>
                        <option value="certificates" selected>Certificates</option>
                        <option value="revenue" selected>Revenue</option>
                        <option value="electoral">Electoral</option>
                        <option value="education">Education</option>
                        <option value="maharashtra_public_service_rights_act">Maharashtra Public Service Rights Act</option>

                    </select>
                    <button id="filterButtonService"
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
    <div class="max-w-7xl mx-auto px-1 pb-8">

        <div class="bg-[#f8f8f8]">

            <div class="overflow-x-auto service mt-3">
                <div class="service-container" bis_skin_checked="1">
                    <div class="service-content" bis_skin_checked="1">
                        <ul class="clearfix">
                            <li class="service-box">
                                <a href="common-service-centers-csc.php">
                                    <span class="fa fa-building-o"></span>
                                    <span>Common Service Centers (CSC)</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>