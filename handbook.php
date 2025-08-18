<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handbook</title>
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
                <div class="grid lg:grid-cols-2 gap-8 mt-6">
                    <!-- Single Publication Card -->
                    <div class="relative  shadow-md border border-gray-200 p-4 flex flex-col">
                        <div class="flex gap-4">
                            <!-- Thumbnail -->
                            <div class="w-40 h-52 flex-shrink-0">
                                <img src="./assets/images/20241226471460433-qz2s4j2ub44qqe2i05k0q758yyv9qr7x3j9w6huh5e.png" alt="E-office Manual" class="w-full h-full object-cover border" />
                            </div>
                            <!-- Details -->
                            <div>
                                <h2 class="text-xl font-semibold text-[#8A6000]">E-office Manual</h2>
                                <p><span class="font-bold">Author :</span> NIC</p>
                                <p><span class="font-bold">Subject :</span> Eoffice</p>
                                <p><span class="font-bold">Language :</span> English</p>
                                <p><span class="font-bold">Date :</span> 2023</p>
                            </div>
                        </div>

                        <!-- Social Share Bar -->
                        <div class="border border-gray-300 w-full flex justify-center gap-x-4 px-4 py-2 mt-6 mb-2 shadow-sm">
                            <img src="assets/share_icon.svg" alt="share icon" class="size-4" />
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents" target="_blank">
                                <img src="assets/facebook_social_icon.svg" alt="facebook icon" class="size-4">
                            </a>
                            <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents" target="_blank">
                                <img src="assets/twitter_social_icon.svg" alt="twitter icon" class="size-4">
                            </a>
                        </div>

                        <!-- Arrow Button -->
                        <a href="#">
                            <button class="absolute -bottom-5 left-1/2 -translate-x-1/2 rounded-full size-9 bg-white border-2 border-[#FBAC1B] text-[#FBAC1B] flex items-center justify-center">
                                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.5L10 9.5L1.5 15.5" stroke="#FBAC1B" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>