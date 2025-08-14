<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices | Zilla Parishad Palghar</title>
    <?php include_once "include/header_script.php"; ?>
</head>

<body>
    <?php include_once "include/header.php"; ?>
    <img src="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412091606075104.jpg" alt="Tailwind CSS Logo" class="mx-auto min-h-[115px] object-cover">
    <div class="bg-[#F6F3EE]">
        <div class="max-w-7xl min-h-[600px] mx-auto px-4 py-3">
            <!-- Header -->
            <div>
                <div class="flex justify-between items-center">
                    <!-- Breadcrumb -->
                    <nav class="text-sm">
                        <a href="index.php" class="text-orange-600 hover:text-orange-700">Home</a>
                        <span class="mx-2 text-gray-500">></span>
                        <span class="text-gray-700">Notices</span>
                    </nav>

                    <!-- Social Icons -->
                    <div class="flex items-center space-x-2">
                        <button id="print" tabindex="0" aria-label="Print Page Content"
                            class="cursor-pointer hover:opacity-75 transition-opacity">
                            <img src="assets/print_icon.svg" alt="print icon" class="size-5" />
                        </button>
                        <span>/</span>
                        <img src="assets/share_icon.svg" alt="share icon" class="size-5" />
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents"><img
                                src="assets/facebook_social_icon.svg" alt="facebook icon" class="size-5"></a>
                        <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents"
                            class="text-blue-400 hover:text-blue-500"><img src="assets/twitter_social_icon.svg"
                                alt="twitter icon" class="size-5"></a>
                        <a href="http://www.linkedin.com/sharing/share-offsite/?url=https://www.zppalghar.gov.in/en/documents/&mini=true"
                            class="text-blue-700 hover:text-blue-800"><img src="assets/linkedin_social_icon.svg"
                                alt="linkedin icon" class="size-5"></a>
                    </div>
                </div>
            </div>

            <!-- Main Title -->
            <div class="max-w-7xl mx-auto py-6">
                <h1 class="text-[28px] font-semibold text-gray-900">Notices</h1>
            </div>

            <!-- Notices Grid -->
            <div id="noticesGrid" class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                <!-- Dynamic content will be generated here -->
            </div>

        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>

    <script>
        // Notice categories configuration
        const noticeCategories = [{
                title: "Events",
                href: "#events",
                ariaLabel: "Events"
            },
            {
                title: "Past Events",
                href: "#past-events",
                ariaLabel: "Past Events"
            },
            {
                title: "Announcements (General)",
                href: "#announcements-general",
                ariaLabel: "General Announcements"
            },
            {
                title: "Announcements (Budgetary)",
                href: "#announcements-budgetary",
                ariaLabel: "Budgetary Announcements"
            },
            {
                title: "Recruitments",
                href: "#recruitments",
                ariaLabel: "Recruitments"
            },
            {
                title: "Tenders",
                href: "#tenders",
                ariaLabel: "Tenders"
            }
        ];

        // Function to create a notice card
        function createNoticeCard(category) {
            return `
                <a class="border rounded-lg p-[10px] flex gap-x-[10px] items-center border-[#737373] hover:border-orange-500 transition-colors duration-200"
                    href="${category.href}" aria-label="${category.ariaLabel}">
                    <div class="rounded-full border-[1px] flex items-center justify-center flex-shrink-0 p-1 border-[#848484]">
                        <img src="assets/images/right-arrow.svg" class="h-[40px]" alt="Arrow icon">
                    </div>
                    <div class="list-text font-medium text-gray-800">${category.title}</div>
                </a>
            `;
        }

        // Function to render all notice cards
        function renderNoticeCards() {
            const gridContainer = document.getElementById('noticesGrid');
            if (gridContainer) {
                const cardsHTML = noticeCategories.map(category => createNoticeCard(category)).join('');
                gridContainer.innerHTML = cardsHTML;
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            renderNoticeCards();
        });
    </script>
</body>

</html>