<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery | Zilla Parishad Palghar</title>
    <?php include_once "include/header_script.php"; ?>
</head>

<body>
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <div class="bg-[#F6F3EE]">
        <div class="max-w-7xl min-h-[600px] mx-auto px-4 py-3">

            <!-- Main Title with view changes -->
            <div class="max-w-7xl mx-auto py-6 flex justify-between items-center">
                <h1 class="text-[28px]"><?= $ct ?></h1>
                <div class="hidden lg:flex gap-3">
                    <button id="gridViewBtn">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="11.4191" height="11.4191" fill="currentColor" />
                            <rect x="14.5815" width="11.4191" height="11.4191" fill="currentColor" />
                            <rect x="14.5815" y="14.5811" width="11.4191" height="11.4191" fill="currentColor" />
                            <rect y="14.5811" width="11.4191" height="11.4191" fill="currentColor" />
                        </svg>
                    </button>

                    <button id="listViewBtn">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="26" height="5" fill="currentColor" />
                            <rect y="10" width="26" height="5" fill="currentColor" />
                            <rect y="20" width="26" height="5" fill="currentColor" />
                        </svg>
                    </button>

                </div>
            </div>

            <!-- Grid View:  Past Event Details -->
            <div id="gridView" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 mb-8">

                <div class="relative bg-white shadow-md min-h-[300px] flex flex-col">
                    <a href="https://www.zppalghar.gov.in/en/gallery/students-welcomed-by-the-chief-minister-in-palghar/" class="photo-count">
                        <span class="icon-photo-album"></span>
                        <strong>6</strong> <br />Images </a>
                    <!-- Image Container -->
                    <div class="w-full h-36 aspect-video flex-shrink-0 overflow-hidden">
                        <img class="size-full object-cover hover:scale-105 transition-transform duration-300" src="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/bfi_thumb/20250728620214723-r9eugmn3i6xqmr7lu9spg1s6kpnh1a04a68w2af5qe.jpeg" alt="news">
                    </div>
                    <!-- Text Content -->
                    <div class="relative p-4 pb-8 flex-1 flex flex-col justify-between gap-y-1">
                        <div class="absolute -top-[4%] left-[45%]">
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 0L25.9904 15H0.00961876L13 0Z" fill="white" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="space-y-1">
                                <h3 class="text-sm font-semibold">Students welcomed by the Chief Minister in Palghar</h3>

                            </div>
                        </div>
                        <div class="border border-gray-300 w-full flex justify-center gap-x-2  px-4 py-2">
                            <img src="assets/share_icon.svg" alt="share icon" class="size-4" />
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents">
                                <img src="assets/facebook_social_icon.svg" alt="facebook icon" class="size-4">
                            </a>
                            <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents">
                                <img src="assets/twitter_social_icon.svg" alt="twitter icon" class="size-4">
                            </a>
                        </div>
                    </div>

                    <a href="">
                        <button class="absolute -bottom-5 left-[45%] rounded-full size-9 bg-white  border-2 border-[#FBAC1B] text-[#FBAC1B] flex flex-col items-center justify-center">
                            <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L10 9.5L1.5 15.5" stroke="#FBAC1B" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </a>
                </div>



            </div>

            <!-- List View:  Past Event Details -->
            <div id="listView" class="hidden grid-rows-2 gap-y-8">

                <!-- Card -->
                <div class=" bg-white shadow-md flex">
                    <a href="https://www.zppalghar.gov.in/en/gallery/students-welcomed-by-the-chief-minister-in-palghar/" class="photo-count">
                        <span class="icon-photo-album"></span>
                        <strong>6</strong> <br />Images </a>
                    <!-- Image Container -->
                    <div class="w-96 h-48 aspect-video flex-shrink-0 overflow-hidden">
                        <img class="size-full object-cover hover:scale-105 transition-transform duration-300" src="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/bfi_thumb/20250728620214723-r9eugmn3i6xqmr7lu9spg1s6kpnh1a04a68w2af5qe.jpeg" alt="news">
                    </div>
                    <!-- Text Content -->
                    <div class="relative p-4 flex flex-col justify-between gap-y-4">
                        <div class="absolute -left-3 top-[45%]">
                            <svg width="15" height="26" viewBox="0 0 15 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.00146484 13.001L15.0015 0.010592L15.0015 25.9914L0.00146484 13.001Z" fill="white" />
                            </svg>

                        </div>
                        <div class="flex gap-x-4 justify-between items-center">
                            <div class="space-y-3 w-[80%]">
                                <h2 class="text-base font-semibold">Students welcomed by the Chief Minister in Palghar</h2>


                                <div class="flex gap-x-4">
                                    <div class="border border-gray-300 w-fit flex justify-center items-center gap-x-2  px-4 py-2">
                                        <img src="assets/share_icon.svg" alt="share icon" class="size-4" />
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents">
                                            <img src="assets/facebook_social_icon.svg" alt="facebook icon" class="size-4">
                                        </a>
                                        <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents">
                                            <img src="assets/twitter_social_icon.svg" alt="twitter icon" class="size-4">
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <a href="">
                                <button class="rounded-full size-9 bg-white border-2 border-[#FBAC1B] text-[#FBAC1B] flex flex-col items-center justify-center">
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
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>

    <script>
        // View toggle functionality
        const gridViewBtn = document.getElementById('gridViewBtn');
        const listViewBtn = document.getElementById('listViewBtn');
        const gridView = document.getElementById('gridView');
        const listView = document.getElementById('listView');

        // Default state: Grid view active
        let isGridView = true;

        // Grid view button click
        gridViewBtn.addEventListener('click', function() {
            if (!isGridView) {
                // Switch to grid view
                gridView.classList.remove('hidden');
                gridView.classList.add('grid');
                listView.classList.add('hidden');
                listView.classList.remove('grid');
                isGridView = true;
            }
        });

        // List view button click
        listViewBtn.addEventListener('click', function() {
            if (isGridView) {
                // Switch to list view
                gridView.classList.add('hidden');
                gridView.classList.remove('grid');
                listView.classList.remove('hidden');
                listView.classList.add('grid');
                isGridView = false;
            }
        });

        // Handle responsive behavior
        function handleResize() {
            const isLargeScreen = window.innerWidth >= 1024; // lg breakpoint

            if (!isLargeScreen) {
                // On smaller screens, always show grid view and hide list view
                gridView.classList.remove('hidden');
                gridView.classList.add('grid');
                listView.classList.add('hidden');
                listView.classList.remove('grid');
                isGridView = true;
            }
        }
        // Listen for window resize
        window.addEventListener('resize', handleResize);

        // Initial call to handle current screen size
        handleResize();
    </script>

</body>

</html>