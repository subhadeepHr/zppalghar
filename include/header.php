<style>
    .topbar-item {
        padding: 0 12px;
        color: #666;
        text-decoration: none;
        border-right: 1px solid #c2c0c1;
        display: flex;
        align-items: center;
    }

    .topbar-item:last-child {
        border-right: none;
    }

    .topbar-item:hover {
        color: #333;
    }

    .h1-logo {
        color: #1a1a1a;
        line-height: 1.2;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        display: block;
        padding: 15px 20px;
        color: #000;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        /* background-color: #f0f0f0; */
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        /* background: white; */
        min-width: 250px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .nav-item:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item {
        display: block;
        padding: 12px 20px;
        /* color: #333; */
        text-decoration: none;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #fbad1a;
    }

    .dropdown-item:last-child {
        border-bottom: none;
    }

    .bg-offWhite {
        background-color: #fafafa;
    }

    /* Mobile menu styles */
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .mobile-menu.open {
        max-height: 100vh;
    }

    .mobile-nav-item {
        border-bottom: 1px solid #e5e5e5;
    }

    .mobile-nav-link {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        color: #000;
        text-decoration: none;
        font-weight: 500;
        background: white;
    }

    .mobile-nav-link:hover {
        background-color: #f5f5f5;
    }

    .mobile-submenu {
        background-color: #f8f9fa;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .mobile-submenu.open {
        max-height: 500px;
    }

    .mobile-submenu-item {
        padding: 12px 40px;
        border-bottom: 1px solid #e5e5e5;
        color: #666;
        text-decoration: none;
        display: block;
    }

    .mobile-submenu-item:hover {
        background-color: #e9ecef;
        color: #fbad1a;
    }

    /* Sidebar styles */
    .sidebar-item {
        color: #000;
        padding: 12px 16px;
        display: block;
        text-decoration: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .sidebar-item:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .sidebar-submenu {
        background-color: rgba(255, 255, 255, 0.1);
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .sidebar-submenu.open {
        max-height: 300px;
    }

    .sidebar-submenu-item {
        padding: 10px 32px;
        display: block;
        color: #000;
        text-decoration: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .sidebar-submenu-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Responsive styles */
    @media (max-width: 1023px) {
        .desktop-nav {
            display: none !important;
        }

        .mobile-nav-toggle {
            display: block;
        }

        /* Hide right logos on mobile */
        .right-logos {
            display: none;
        }
    }

    @media (min-width: 1024px) {
        .mobile-nav-toggle {
            display: none;
        }

        .desktop-nav {
            display: flex !important;
        }
    }
</style>

<!-- Top Header Bar -->
<div style="background-color: #e4e2da;" class="border-b border-[#c2c0c1] text-xs">
    <!-- <div class="max-w-7xl mx-auto h-[36px] flex justify-between items-center">
        <div class="flex items-center">
            <a lang="mr" href="https://maharashtra.gov.in/" class="topbar-item">महाराष्ट्र शासन</a>
            <a lang="en" href="https://maharashtra.gov.in/" class="topbar-item uppercase">Government of Maharashtra</a>
        </div>

        <div class="flex items-center">
            <a href="" class="topbar-item">
                <img src="assets/images/skip.svg" alt="Skip" class="w-[20px] h-[20px] mx-auto">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/search.svg" alt="Search" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/social.svg" alt="Social Media Icons" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/sitemap.svg" alt="Sitemap" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/accessibility.svg" alt="Accessibility" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/lang.svg" alt="Language" class="w-[20px] h-[20px]">
            </a>
        </div>
    </div> -->
    <div class="max-w-7xl mx-auto h-auto flex flex-col md:flex-row justify-between items-center md:h-[36px] ">

        <!-- This will show second on mobile -->
        <div class="flex items-center order-2 md:order-1 border-t md:border-t-0 ">
            <a lang="mr" href="https://maharashtra.gov.in/" class="topbar-item">महाराष्ट्र शासन</a>
            <a lang="en" href="https://maharashtra.gov.in/" class="topbar-item uppercase">Government of Maharashtra</a>
        </div>

        <!-- This will show first on mobile -->
        <div class="flex items-center order-1 md:order-2 ">
            <a href="" class="topbar-item">
                <img src="assets/images/skip.svg" alt="Skip" class="w-[20px] h-[20px] mx-auto">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/search.svg" alt="Search" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/social.svg" alt="Social Media Icons" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/sitemap.svg" alt="Sitemap" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/accessibility.svg" alt="Accessibility" class="w-[20px] h-[20px]">
            </a>
            <a href="" class="topbar-item">
                <img src="assets/images/lang.svg" alt="Language" class="w-[20px] h-[20px]">
            </a>
        </div>

    </div>

</div>

<!-- Main Header -->
<header class="border-b  lg:py-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Left Logo Section -->
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 flex items-center justify-center">
                    <div class="">
                        <img src="assets/images/emblem.svg" alt="Zilla Parishad Palghar Logo" class="w-7 h-14 lg:w-14 lg:h-28">
                    </div>
                </div>
                <div>
                    <span lang="mr" class="text-md lg:text-lg">जिल्हा परिषद पालघर </span>
                    <h1 class="h1-logo text-[1em] lg:text-[1.75em] font-bold">Zilla Parishad Palghar</h1>
                </div>
            </div>

            <!-- Right Logo Section - Hidden on Mobile -->
            <div class="right-logos flex items-center space-x-4">
                <div class="w-[88px] h-[88px] flex items-center justify-center">
                    <div class="text-white font-bold text-xs">
                        <img src="assets/images/mh-logo.png" />
                    </div>
                </div>
                <div class="w-[127px] h-[86px] flex items-center justify-center">
                    <div class="text-white font-bold text-xs"><img src="assets/images/digital-india-logo.png" /></div>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <button class="mobile-nav-toggle" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Navigation Bar -->
<nav class="bg-offWhite shadow-lg relative z-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between">
            <!-- Desktop Navigation -->
            <ul class="desktop-nav flex items-center font-semibold text-black">
                <li class="nav-item">
                    <a href="index.php" class="nav-link bg-[#fbad1a]">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="about.php" class="nav-link">About Us <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a href="introduction.php" class="dropdown-item">Introduction</a>
                        <a href="vison-mission.php" class="dropdown-item">Vision &amp; Mission</a>
                        <a href="objectives-functions.php" class="dropdown-item">Objectives &amp; Functions</a>
                        <a href="administrative-setup.php" class="dropdown-item">Administrative Setup</a>
                        <a href="whos-who.php" class="dropdown-item">Who's Who</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="directory.php" class="nav-link">Directory</a>
                </li>
                <li class="nav-item">
                    <a href="departments.php" class="nav-link">Departments</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="citizens-corner.php" class="nav-link">Citizen's Corner <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a href="citizens-services.php" class="dropdown-item">Services</a>
                        <a href="citizens-form.php" class="dropdown-item">Forms</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="schemes-programmes.php" class="nav-link">Schemes/Programmes</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="documents.php" class="nav-link">Documents <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a href="annual-reports.php" class="dropdown-item">Annual Reports</a>
                        <a href="budget-information.php" class="dropdown-item">Budget Information</a>
                        <a href="citizen-charter.php" class="dropdown-item">Citizen Charter</a>
                        <a href="rti-documents-manuals.php" class="dropdown-item">RTI Documents / Manuals</a>
                        <a href="government-orders.php" class="dropdown-item">Government Orders</a>
                        <a href="circulars-notifications.php" class="dropdown-item">Circulars / Notifications</a>
                        <a href="act-rules.php" class="dropdown-item">Acts &amp; Rules</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="rtis.php" class="nav-link">RTI <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a href="right-to-information-sections-1-to-17-information.php" class="dropdown-item">Right to Information Sections 1 to 17 Information</a>
                        <a href="rti-documents.php" class="dropdown-item">RTI Documents</a>
                        <a href="rti-contacts-pios-apios-aas.php" class="dropdown-item">RTI Contacts</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="notices.php" class="nav-link">Notices <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <a href="events.php" class="dropdown-item">Events</a>
                        <a href="past-events.php" class="dropdown-item">Past Events</a>
                        <a href="announcements-general.php" class="dropdown-item">Announcements (General)</a>
                        <a href="recruitments.php" class="dropdown-item">Recruitments</a>
                        <a href="tenders.php" class="dropdown-item">Tenders</a>
                    </div>
                </li>
            </ul>

            <!-- Desktop Hamburger for Sidebar -->
            <button id="openSidebar" class="desktop-nav text-gray-700 hover:text-gray-900 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobileMenu" class="mobile-menu bg-white border-t">
        <div class="mobile-nav-item">
            <a href="index.php" class="mobile-nav-link bg-[#fbad1a]">Home</a>
        </div>
        <div class="mobile-nav-item">
            <a href="#" class="mobile-nav-link" onclick="toggleMobileSubmenu('aboutSubmenu', this)">
                About Us
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="aboutSubmenu" class="mobile-submenu">
                <a href="introduction.php" class="mobile-submenu-item">Introduction</a>
                <a href="vison-mission.php" class="mobile-submenu-item">Vision &amp; Mission</a>
                <a href="objectives-functions.php" class="mobile-submenu-item">Objectives &amp; Functions</a>
                <a href="administrative-setup.php" class="mobile-submenu-item">Administrative Setup</a>
                <a href="whos-who.php" class="mobile-submenu-item">Who's Who</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="directory.php" class="mobile-nav-link">Directory</a>
        </div>
        <div class="mobile-nav-item">
            <a href="departments.php" class="mobile-nav-link">Departments</a>
        </div>
        <div class="mobile-nav-item">
            <a href="citizens-corner.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('citizenSubmenu', this)">
                Citizen's Corner
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="citizenSubmenu" class="mobile-submenu">
                <a href="citizens-services.php" class="mobile-submenu-item">Services</a>
                <a href="citizens-form.php" class="mobile-submenu-item">Forms</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="schemes-programmes.php" class="mobile-nav-link">Schemes/Programmes</a>
        </div>
        <div class="mobile-nav-item">
            <a href="documents.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('documentsSubmenu', this)">
                Documents
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="documentsSubmenu" class="mobile-submenu">
                <a href="annual-reports.php" class="mobile-submenu-item">Annual Reports</a>
                <a href="budget-information.php" class="mobile-submenu-item">Budget Information</a>
                <a href="citizen-charter.php" class="mobile-submenu-item">Citizen Charter</a>
                <a href="rti-documents-manuals.php" class="mobile-submenu-item">RTI Documents / Manuals</a>
                <a href="government-orders.php" class="mobile-submenu-item">Government Orders</a>
                <a href="circulars-notifications.php" class="mobile-submenu-item">Circulars / Notifications</a>
                <a href="act-rules.php" class="mobile-submenu-item">Acts &amp; Rules</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="rtis.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('rtiSubmenu', this)">
                RTI
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="rtiSubmenu" class="mobile-submenu">
                <a href="right-to-information-sections-1-to-17-information.php" class="mobile-submenu-item">Right to Information Sections 1 to 17 Information</a>
                <a href="rti-documents.php" class="mobile-submenu-item">RTI Documents</a>
                <a href="rti-contacts-pios-apios-aas.php" class="mobile-submenu-item">RTI Contacts</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="notices.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('noticesSubmenu', this)">
                Notices
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="noticesSubmenu" class="mobile-submenu">
                <a href="events.php" class="mobile-submenu-item">Events</a>
                <a href="past-events.php" class="mobile-submenu-item">Past Events</a>
                <a href="announcements-general.php" class="mobile-submenu-item">Announcements (General)</a>
                <a href="recruitments.php" class="mobile-submenu-item">Recruitments</a>
                <a href="tenders.php" class="mobile-submenu-item">Tenders</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="#" class="mobile-nav-link">Maharashtra Right to Public Service Act</a>
        </div>
        <div class="mobile-nav-item">
            <a href="media-corner.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('mediaSubmenu', this)">
                Media Corner
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="mediaSubmenu" class="mobile-submenu">
                <a href="media-corner-news.php" class="mobile-submenu-item">News</a>
                <a href="media-corner-press-release.php" class="mobile-submenu-item">Press Release</a>
                <a href="media-corner-photo-gallery.php" class="mobile-submenu-item">Photo Gallery</a>
                <a href="media-corner-video-gallery.php" class="mobile-submenu-item">Video Gallery</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="publications.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('publicationsSubmenu', this)">
                Publications
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="publicationsSubmenu" class="mobile-submenu">
                <a href="handbook.php" class="mobile-submenu-item">Handbook</a>
                <a href="brochures-pamphlets.php" class="mobile-submenu-item">Brochures / Pamphlets</a>
                <a href="magazines-newsletters.php" class="mobile-submenu-item">Magazines / Newsletters</a>
                <a href="training-manuals.php" class="mobile-submenu-item">Training Manuals</a>
            </div>
        </div>
        <div class="mobile-nav-item">
            <a href="important-telephone-numbers.php" class="mobile-nav-link">Important Telephone Numbers</a>
        </div>
        <div class="mobile-nav-item">
            <a href="#" class="mobile-nav-link">Helpline</a>
        </div>
        <div class="mobile-nav-item">
            <a href="#" class="mobile-nav-link" onclick="toggleMobileSubmenu('tourismSubmenu', this)">
                TOURISM
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="tourismSubmenu" class="mobile-submenu">
                <a href="#" class="mobile-submenu-item">& Heritage</a>

            </div>
        </div>
    </div>
</nav>

<!-- Sidebar Overlay -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<!--desktop yellow Sidebar -->
<div id="sidebar" class="fixed top-0 right-0 w-68 h-full bg-[#fbac1b] transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="p-4 flex justify-between items-center">
        <button id="closeSidebar" class="text-gray-700 hover:text-gray-900 text-right">
            ✕
        </button>
    </div>


    <div class="p-4">
        <ul role="menu" class="space-y-1">

            <li class="relative group">
                <a href="maharashtra-right-to-public-service-act.php"
                    class="block px-3 py-2 hover:bg-black/40 hover:text-white">Maharashtra Right to Public Service Act</a>
            </li>

            <!-- Menu with submenu -->
            <li class="relative group">
                <a href="media-corner.php"
                    class="flex items-center gap-4 px-3 py-2 text-black group-hover:bg-black/40 group-hover:text-white hover:bg-black/40 hover:text-white transition-colors duration-300">
                    Media Corner
                    <i class="fa fa-chevron-right transition-transform duration-300 group-hover:rotate-90"></i>
                </a>
                <ul class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-96 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-black/40 shadow-md">
                    <li><a href="media-corner-news.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">News</a></li>
                    <li><a href="media-corner-press-release.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Press Release</a></li>
                    <li><a href="media-corner-photo-gallery.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Photo Gallery</a></li>
                    <li><a href="media-corner-video-gallery.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Video Gallery</a></li>
                </ul>
            </li>

            <li class="relative group">
                <a href="publications.php"
                    class="flex items-center gap-4 px-3 py-2 group-hover:bg-black/40 group-hover:text-white hover:bg-black/40 hover:text-white transition-colors duration-300">
                    Publications
                    <i class="fa fa-chevron-right transition-transform duration-300 group-hover:rotate-90"></i>
                </a>
                <ul class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-96 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-black/40 shadow-md">
                    <li><a href="handbook.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Handbook</a></li>
                    <li><a href="brochures-pamphlets.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Brochures / Pamphlets</a></li>
                    <li><a href="magazines-newsletters.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Magazines / Newsletters</a></li>
                    <li><a href="training-manuals.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Training Manuals</a></li>
                </ul>
            </li>

            <li class="relative group">
                <a href="important-telephone-numbers.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Important Telephone Numbers</a>
            </li>

            <li class="relative group">
                <a href="#" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Helpline</a>
            </li>

            <li class="relative group">
                <a href="#"
                    class="flex items-center gap-4 px-3 py-2 group-hover:bg-black/40 group-hover:text-white hover:bg-black/40 hover:text-white transition-colors duration-300">
                    TOURISM
                    <i class="fa fa-chevron-right transition-transform duration-300 group-hover:rotate-90"></i>
                </a>
                <ul class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-96 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-black/40 shadow-md">
                    <li><a href="#" class="block px-3 py-2 hover:bg-black/40 hover:text-white">& Heritage</a></li>

                </ul>
            </li>

        </ul>
    </div>





</div>

<script>
    // Mobile menu toggle
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('open');
    }

    // Mobile submenu toggle
    function toggleMobileSubmenu(submenuId, linkElement) {
        event.preventDefault();
        const submenu = document.getElementById(submenuId);
        const icon = linkElement.querySelector('i');

        submenu.classList.toggle('open');

        if (submenu.classList.contains('open')) {
            icon.className = 'fa fa-minus text-sm';
        } else {
            icon.className = 'fa fa-plus text-sm';
        }
    }

    // Desktop sidebar functionality
    const openSidebarBtn = document.getElementById('openSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    openSidebarBtn?.addEventListener('click', () => {
        sidebar.classList.remove('translate-x-full');
        sidebarOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    closeSidebarBtn?.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    sidebarOverlay?.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    // Close mobile menu when window is resized to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.remove('open');
        }
    });

    // Handle escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            // Close sidebar
            sidebar.classList.add('translate-x-full');
            sidebarOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';

            // Close mobile menu
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.remove('open');
        }
    });
</script>