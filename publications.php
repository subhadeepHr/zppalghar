<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
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
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 py-[15px]">
                    <a class="border rounded-lg p-[10px] flex gap-x-[10px] items-center border-[#737373]"
                        href="magazines-newsletters.php" aria-label="Introduction - PDF">
                        <div class="rounded-full border-[1px] flex items-center justify-center flex-shrink-0 p-1 border-[#848484]">
                            <img src="assets/images/right-arrow.svg" class="h-[40px]">
                        </div>
                        <div class="list-text">Magazines/Newsletters</div>
                    </a>
                    <a class="border rounded-lg p-[10px] flex gap-x-[10px] items-center border-[#737373]"
                        href="training-manuals.php" aria-label="">
                        <div class="rounded-full border-[1px] flex items-center justify-center flex-shrink-0 p-1 border-[#848484]">
                            <img src="assets/images/right-arrow.svg" class="h-[40px]">
                        </div>
                        <div class="list-text">Training Manuals</div>
                    </a>
                    <a class="border rounded-lg p-[10px] flex gap-x-[10px] items-center border-[#737373]"
                        href="handbook.php" aria-label="">
                        <div class="rounded-full border-[1px] flex items-center justify-center flex-shrink-0 p-1 border-[#848484]">
                            <img src="assets/images/right-arrow.svg" class="h-[40px]">
                        </div>
                        <div class="list-text">Handbook</div>
                    </a>
                    <a class="border rounded-lg p-[10px] flex gap-x-[10px] items-center border-[#737373]"
                        href="brochures-pamphlets.php" aria-label="">
                        <div class="rounded-full border-[1px] flex items-center justify-center flex-shrink-0 p-1 border-[#848484]">
                            <img src="assets/images/right-arrow.svg" class="h-[40px]">
                        </div>
                        <div class="list-text">Brochures / Pamphlets</div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>