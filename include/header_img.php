<?php
// Menu structure
// Menu structure
$menu = [
    ['title' => 'Home', 'url' => 'index.php'],
    ['title' => 'About Us', 'url' => 'about.php', 'children' => [
        ['title' => 'Introduction', 'url' => 'introduction.php'],
        ['title' => 'Vision & Mission', 'url' => 'vison-mission.php'],
        ['title' => 'Objectives & Functions', 'url' => 'objectives-functions.php'],
        ['title' => 'Administrative Setup', 'url' => 'administrative-setup.php'],
        ['title' => 'Who’s Who', 'url' => 'whos-who.php']
    ]],
    ['title' => 'Directory', 'url' => 'directory.php'],
    ['title' => 'Departments', 'url' => 'departments.php'],
    ['title' => 'Citizen’s Corner', 'url' => 'citizens-corner.php', 'children' => [
        ['title' => 'Services', 'url' => 'citizens-services.php'],
        ['title' => 'Common Service Centers (CSC)', 'url' => 'common-service-centers-csc.php'],
        ['title' => 'SWAYAM portal', 'url' => 'swayam-portal.php'],
        ['title' => 'Certificate', 'url' => 'certificate-category.php'],
        ['title' => 'Revenue', 'url' => 'revenue-category.php'],
        ['title' => 'Electoral', 'url' => 'electoral-category.php'],
        ['title' => 'Education', 'url' => 'education-category.php'],
        ['title' => 'Maharashtra Public Service Rights Act', 'url' => 'mpsra.php'],
        ['title' => 'Forms', 'url' => 'citizens-form.php']
    ]],
    ['title' => 'Schemes/Programmes', 'url' => 'schemes-programmes.php'],
    ['title' => 'Documents', 'url' => 'documents.php', 'children' => [
        ['title' => 'Annual Reports', 'url' => 'annual-reports.php'],
        ['title' => 'Budget Information', 'url' => 'budget-information.php'],
        ['title' => 'Citizen Charter', 'url' => 'citizen-charter.php'],
        ['title' => 'RTI Documents / Manuals', 'url' => 'rti-documents-manuals.php'],
        ['title' => 'Government Orders', 'url' => 'government-orders.php'],
        ['title' => 'Circulars / Notifications', 'url' => 'circulars-notifications.php'],
        ['title' => 'Acts & Rules', 'url' => 'act-rules.php']
    ]],
    ['title' => 'RTI', 'url' => 'rtis.php', 'children' => [
        ['title' => 'Right to Information Sections 1 to 17 Information', 'url' => 'right-to-information-sections-1-to-17-information.php'],
        ['title' => 'RTI Documents', 'url' => 'rti-documents.php'],
        ['title' => 'RTI Contacts', 'url' => 'rti-contacts-pios-apios-aas.php']
    ]],
    ['title' => 'Notices', 'url' => 'notices.php', 'children' => [
        ['title' => 'Events', 'url' => 'events.php'],
        ['title' => 'Past Events', 'url' => 'past-events.php'],
        ['title' => 'Announcements (General)', 'url' => 'announcements-general.php'],
        ['title' => 'Recruitments', 'url' => 'recruitments.php'],
        ['title' => 'Tenders', 'url' => 'tenders.php'],
        ['title' => 'Constitution Day celebrated at Zilla Parishad Palghar', 'url' => 'constitution-day-celebrated-at-zilla-parishad-palghar.php'],
        ['title' => 'Successful program of health check-up of beneficiaries migrated to brick kilns in Palghar district', 'url' => 'successful-program-of-health-check-up-of-beneficiaries-migrated-to-brick-kilns-in-palghar-district.php'],
        ['title' => 'Announcements (Budgetary)', 'url' => 'announcements-budgetary.php']
    ]],
    ['title' => 'Feedback', 'url' => 'feedback.php'],
    ['title' => 'Website Policies', 'url' => 'policies.php'],
    ['title' => 'Website Visitor Summary', 'url' => 'visitorSummery.php'],
    ['title' => 'Contact Us', 'url' => 'contactUs.php'],
    ['title' => 'Help', 'url' => 'helpPage.php'],
    ['title' => 'Web Information Manager', 'url' => 'informationManager.php'],
    ['title' => 'Maharashtra Right to Public Service Act', 'url' => 'maharashtra-right-to-public-service-act.php'],
    ['title' => 'Media Corner', 'url' => 'media-corner.php', 'children' => [
        ['title' => 'News', 'url' => 'media-corner-news.php'],
        ['title' => 'Press Release', 'url' => 'media-corner-press-release.php'],
        ['title' => 'Photo Gallery', 'url' => 'media-corner-photo-gallery.php'],
        ['title' => 'Video Gallery', 'url' => 'media-corner-video-gallery.php'],
    ]],
    // ['title' => 'Publications', 'url' => 'publications.php'],
    // ['title' => 'Magazines / Newsletters', 'url' => 'magazines-newsletters.php'],

    ['title' => 'Publications', 'url' => 'publications.php', 'children' => [
        ['title' => 'Magazines / Newsletters', 'url' => 'magazines-newsletters.php'],
        ['title' => 'Training Manuals', 'url' => 'training-manuals.php'],
        ['title' => 'Handbook', 'url' => 'handbook.php'],
        ['title' => 'Brochures / Pamphlets', 'url' => 'brochures-pamphlets.php'],
    ]],
    ['title' => 'Important Telephone Numbers', 'url' => 'important-telephone-numbers.php'],
    ['title' => 'Helpline', 'url' => 'helpline.php'],
    ['title' => 'Tourism', 'url' => 'tourism.php'],





];

// Recursive search for breadcrumb path
function find_breadcrumb_path($menu, $current_url, $path = [])
{
    foreach ($menu as $item) {
        $new_path = array_merge($path, [$item]);
        if (strcasecmp($item['url'], $current_url) === 0) {
            return $new_path;
        }
        if (!empty($item['children'])) {
            $result = find_breadcrumb_path($item['children'], $current_url, $new_path);
            if ($result) return $result;
        }
    }
    return null;
}

$current_page = strtolower(basename($_SERVER['PHP_SELF']));
$breadcrumbs = find_breadcrumb_path($menu, $current_page);
?>

<!-- Page Image -->
<img src="https://cdnbbsr.s3waas.gov.in/s34dd9cec1c21bc54eecb53786a2c5fa09/uploads/2024/12/202412091606075104.jpg"
    alt="Tailwind CSS Logo" class="mx-auto h-auto lg:min-h-[115px] object-cover">

<div class="">
    <div class="max-w-7xl mx-auto px-4 py-3">
        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-y-4">

            <!-- Breadcrumb -->
            <nav class="flex flex-wrap items-center text-sm lg:text-base">
                <a href="index.php" class="text-[#6a4501] hover:text-orange-700">Home</a>
                <span class="mx-2 text-gray-500">&gt;</span>
                <?php
                $ct = '';
                if ($breadcrumbs) {
                    foreach ($breadcrumbs as $i => $crumb) {
                        if ($i > 0) echo ' <span class="mx-2 text-gray-500">&gt;</span> ';
                        if ($i < count($breadcrumbs) - 1) {

                            echo '<a href="' . $crumb['url'] . '" class="text-[#6a4501] hover:text-orange-700">' . $crumb['title'] . '</a>';
                        } else {
                            echo '<span class="text-gray-700">' . $crumb['title'] . '</span>';
                        }
                        $ct =  $crumb['title'];
                    }
                }
                ?>
            </nav>

            <!-- Social Icons -->
            <div class="flex items-center space-x-2">
                <button id="print" tabindex="0" aria-label="Print Page Content"
                    class="cursor-pointer hover:opacity-75 transition-opacity">
                    <img src="assets/print_icon.svg" alt="print icon" class="size-5" />
                </button>
                <span>/</span>
                <img src="assets/share_icon.svg" alt="share icon" class="size-5" />
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.zppalghar.gov.in/en/documents/&t=Documents">
                    <img src="assets/facebook_social_icon.svg" alt="facebook icon" class="size-5">
                </a>
                <a href="https://x.com/share?url=https://www.zppalghar.gov.in/en/documents/&via=TWITTER_HANDLE&text=Documents">
                    <img src="assets/twitter_social_icon.svg" alt="twitter icon" class="size-5">
                </a>
                <a href="http://www.linkedin.com/sharing/share-offsite/?url=https://www.zppalghar.gov.in/en/documents/&mini=true">
                    <img src="assets/linkedin_social_icon.svg" alt="linkedin icon" class="size-5">
                </a>
            </div>
        </div>
    </div>
</div>