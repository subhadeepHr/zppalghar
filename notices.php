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
    <?php include_once "include/header_img.php"; ?>
    <div class="bg-[#F6F3EE]">
        <div class="max-w-7xl min-h-[600px] mx-auto px-1 py-1">

            <!-- Main Title -->
            <div class="max-w-7xl mx-auto px-1 py-1">
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
                href: "events.php",
                ariaLabel: "Events"
            },
            {
                title: "Past Events",
                href: "past-events.php",
                ariaLabel: "Past Events"
            },
            {
                title: "Announcements (General)",
                href: "announcements-general.php",
                ariaLabel: "General Announcements"
            },
            {
                title: "Announcements (Budgetary)",
                href: "announcements-budgetary.php",
                ariaLabel: "Budgetary Announcements"
            },
            {
                title: "Recruitments",
                href: "recruitments.php",
                ariaLabel: "Recruitments"
            },
            {
                title: "Tenders",
                href: "tenders.php",
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