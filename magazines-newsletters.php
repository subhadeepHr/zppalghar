<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications</title>
    <?php include_once "include/header_script.php"; ?>
</head>

<body>
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <div class="bg-[#F6F3EE] min-h-screen">
        <div class="max-w-7xl m-auto px-[15px]">

            <div class="">
                <h1 class="leading-[38px] font-semibold lg:text-[2rem] text-lg"><?= $ct ?></h1>
                <!-- here add -->
                <div class="border border-gray-300  p-4 mt-6">
                    <p class="text-gray-800">No Publication found.</p>
                </div>

            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>