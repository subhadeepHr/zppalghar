<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements (Budgetary) | Zilla Parishad Palghar | India</title>
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

        <div class="w-full border border-gray-300 p-1">
            <h2 class="p-4">Sorry, no notice matched this category.</h2>
        </div>

        <button class="w-fit py-1 px-2 border border-[#FBAC1B]">
            Archive
        </button>

    </div>





    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>