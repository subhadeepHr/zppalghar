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
        max-height: max-content;
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

    /* Accessibility Tools Panel Styles */
    .accessibility-trigger {
        position: relative;
    }

    .accessibility-panel {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        border-radius: 6px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        padding: 12px;
        width: 320px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
        border: 1px solid #e0e0e0;


    }

    .accessibility-trigger:hover .accessibility-panel {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .accessibility-panel h3 {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 12px 0;
        color: #333;
        text-align: center;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 8px;
    }

    .accessibility-section {
        margin-bottom: 16px;
    }

    .accessibility-section:last-child {
        margin-bottom: 0;
    }

    .section-title {
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
    }

    .accessibility-grid {
        display: grid;
        gap: 6px;
    }

    .color-contrast-grid {
        grid-template-columns: 1fr 1fr 1fr;
    }

    .text-size-grid {
        grid-template-columns: 1fr 1fr 1fr;
    }

    .other-controls-grid {
        grid-template-columns: 1fr 1fr 1fr;
    }

    .accessibility-btn {
        background: #f8f9fa;
        border: 2px solid #e9ecef;
        border-radius: 6px;
        padding: 6px 4px;
        cursor: pointer;
        transition: all 0.2s ease;
        text-align: center;
        position: relative;
        min-height: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2px;
    }

    .accessibility-btn:hover {
        background: #e9ecef;
        transform: translateY(-2px);
    }

    .accessibility-btn.active {
        background: #f8f9fa;
        border-color: #000;
        border-width: 3px;
        color: #000;
        box-shadow: none;
        transform: scale(1.02);
    }

    .accessibility-btn.active::after {
        content: '✓';
        position: absolute;
        top: 4px;
        right: 4px;
        background: #000;
        color: white;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        border: none;
    }

    .btn-icon {
        font-size: 16px;
        margin-bottom: 2px;
    }

    .btn-label {
        font-size: 10px;
        font-weight: 500;
        text-align: center;
    }

    .high-contrast .btn-icon {
        color: white;
    }

    .invert .btn-icon {
        filter: invert(1);
    }

    .saturation .btn-icon {
        filter: grayscale(1);
    }

    /* Special button styles */
    .btn-high-contrast {
        background: #000;
        color: white;
        border-color: #000;
    }

    .btn-high-contrast:hover {
        background: #333;
    }

    .btn-invert {
        color: #000;
    }

    .btn-saturation {
        filter: grayscale(0.5);
    }

    /* Text size buttons */
    .btn-font-increase .btn-icon::before {
        content: 'A+';
        font-size: 14px;
        text-wrap: nowrap;
        font-weight: bold;
    }

    .btn-font-decrease .btn-icon::before {
        content: 'A-';
        font-size: 14px;
        text-wrap: nowrap;
        font-weight: bold;
    }

    .btn-normal-font .btn-icon::before {
        content: 'A';
        font-size: 14px;
        text-wrap: nowrap;
        font-weight: bold;
    }

    /* Ensure all buttons including text spacing and line height show active state */
    .accessibility-btn.active .btn-icon::before {
        color: inherit;
    }

    .accessibility-btn.active .btn-label {
        color: inherit;
    }

    /* Active states for accessibility features */
    body.high-contrast {
        background-color: #000 !important;
        color: #ffff00 !important;
    }

    body.high-contrast * {
        background-color: #000 !important;
        color: #ffff00 !important;
        border-color: #ffff00 !important;
    }

    body.high-contrast a {
        color: #ffff00 !important;
        text-decoration: underline !important;
    }

    body.high-contrast .accessibility-panel {
        background-color: #000 !important;
        border-color: #ffff00 !important;
    }

    body.high-contrast .accessibility-btn {
        background-color: #333 !important;
        border-color: #ffff00 !important;
        color: #ffff00 !important;
    }

    body.high-contrast .accessibility-btn.active {
        background-color: #000 !important;
        color: #ffff00 !important;
        border-color: #ffff00 !important;
        border-width: 3px !important;
    }

    body.high-contrast .accessibility-btn.active::after {
        background: #ffff00 !important;
        color: #000 !important;
    }

    body.invert {
        filter: invert(1) hue-rotate(180deg);
    }

    body.invert img {
        filter: invert(1) hue-rotate(180deg);
    }

    body.saturation {
        filter: grayscale(0.5);
    }

    body.large-font {
        font-size: 120% !important;
    }

    body.larger-font {
        font-size: 140% !important;
    }

    body.largest-font {
        font-size: 160% !important;
    }

    body.small-font {
        font-size: 85% !important;
    }

    body.smaller-font {
        font-size: 70% !important;
    }

    body.smallest-font {
        font-size: 55% !important;
    }

    body.wide-spacing {
        letter-spacing: 0.1em !important;
    }

    body.high-line-height * {
        line-height: 1.8 !important;
    }

    body.hide-images img {
        visibility: hidden !important;
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
            <a href="sitemap.php" class="topbar-item">
                <img src="assets/images/sitemap.svg" alt="Sitemap" class="w-[20px] h-[20px]">
            </a>
            <a href="#" class="topbar-item accessibility-trigger" id="accessibilityTrigger">
                <img src="assets/images/accessibility.svg" alt="Accessibility" class="w-[20px] h-[20px]">

                <!-- Accessibility Tools Panel -->
                <div class="accessibility-panel" id="accessibilityPanel">
                    <h3>Accessibility Tools</h3>

                    <!-- Color Contrast Section -->
                    <div class="accessibility-section">
                        <div class="section-title">Color Contrast</div>
                        <div class="accessibility-grid color-contrast-grid">
                            <button class="accessibility-btn btn-high-contrast" data-feature="high-contrast">
                                <div class="btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" fill="white" viewBox="0 -960 960 960" width="24px">
                                        <path d="M480-288.46 531.54-340H620v-88.46L671.54-480 620-531.54V-620h-88.46L480-671.54 428.46-620H340v88.46L288.46-480 340-428.46V-340h88.46L480-288.46Zm0-81.54v-220q45.77 0 77.88 32.12Q590-525.77 590-480q0 45.77-32.12 77.88Q525.77-370 480-370ZM172.31-180Q142-180 121-201q-21-21-21-51.31v-455.38Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31v455.38Q860-222 839-201q-21 21-51.31 21H172.31Zm0-60h615.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-455.38q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v455.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85ZM160-240v-480 480Z"></path>
                                    </svg>
                                </div>
                                <div class="btn-label">High Contrast</div>
                            </button>
                            <button class="accessibility-btn active" data-feature="normal-contrast">
                                <div class="btn-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 16.7885L13.2885 15.5H15.5V13.2885L16.7885 12L15.5 10.7115V8.5H13.2885L12 7.2115L10.7115 8.5H8.5V10.7115L7.2115 12L8.5 13.2885V15.5H10.7115L12 16.7885ZM4.30775 19.5C3.80258 19.5 3.375 19.325 3.025 18.975C2.675 18.625 2.5 18.1974 2.5 17.6923V6.30775C2.5 5.80258 2.675 5.375 3.025 5.025C3.375 4.675 3.80258 4.5 4.30775 4.5H19.6923C20.1974 4.5 20.625 4.675 20.975 5.025C21.325 5.375 21.5 5.80258 21.5 6.30775V17.6923C21.5 18.1974 21.325 18.625 20.975 18.975C20.625 19.325 20.1974 19.5 19.6923 19.5H4.30775ZM4.30775 18H19.6923C19.7693 18 19.8398 17.9679 19.9038 17.9038C19.9679 17.8398 20 17.7693 20 17.6923V6.30775C20 6.23075 19.9679 6.16025 19.9038 6.09625C19.8398 6.03208 19.7693 6 19.6923 6H4.30775C4.23075 6 4.16025 6.03208 4.09625 6.09625C4.03208 6.16025 4 6.23075 4 6.30775V17.6923C4 17.7693 4.03208 17.8398 4.09625 17.9038C4.16025 17.9679 4.23075 18 4.30775 18Z"></path>
                                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" fill="white"></path>
                                    </svg>
                                </div>
                                <div class="btn-label">Normal Contrast</div>
                            </button>
                            <button class="accessibility-btn" data-feature="highlight-links">
                                <div class="btn-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                        <path d="M432.31-298.46H281.54q-75.34 0-128.44-53.1Q100-404.65 100-479.98q0-75.33 53.1-128.44 53.1-53.12 128.44-53.12h150.77v60H281.54q-50.39 0-85.96 35.58Q160-530.38 160-480q0 50.38 35.58 85.96 35.57 35.58 85.96 35.58h150.77v60ZM330-450v-60h300v60H330Zm197.69 151.54v-60h150.77q50.39 0 85.96-35.58Q800-429.62 800-480q0-50.38-35.58-85.96-35.57-35.58-85.96-35.58H527.69v-60h150.77q75.34 0 128.44 53.1Q860-555.35 860-480.02q0 75.33-53.1 128.44-53.1 53.12-128.44 53.12H527.69Z"></path>
                                    </svg></div>
                                <div class="btn-label">Highlight Links</div>
                            </button>
                        </div>
                    </div>

                    <div class="accessibility-section">
                        <div class="accessibility-grid color-contrast-grid">
                            <button class="accessibility-btn btn-invert" data-feature="invert">
                                <div class="btn-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                        <path d="M480.07-100q-78.84 0-148.21-29.92t-120.68-81.21q-51.31-51.29-81.25-120.63Q100-401.1 100-479.93q0-78.84 29.92-148.21t81.21-120.68q51.29-51.31 120.63-81.25Q401.1-860 479.93-860q78.84 0 148.21 29.92t120.68 81.21q51.31 51.29 81.25 120.63Q860-558.9 860-480.07q0 78.84-29.92 148.21t-81.21 120.68q-51.29 51.31-120.63 81.25Q558.9-100 480.07-100ZM510-161.85q121.31-11.53 205.65-101.42Q800-353.15 800-480t-83.96-216.35q-83.96-89.5-206.04-101.8v636.3Z"></path>
                                    </svg></div>
                                <div class="btn-label">Invert</div>
                            </button>
                            <button class="accessibility-btn btn-saturation" data-feature="saturation">
                                <div class="btn-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                        <path d="M480-140q-124.92 0-212.46-86.35Q180-312.69 180-435.62q0-62.53 23.66-114.69 23.65-52.15 64.19-93.84L480-852.31l212.15 208.16q40.54 41.69 64.19 94.42Q780-497 780-435.62q0 122.93-87.54 209.27Q604.92-140 480-140Zm0-60v-568L310-600q-35 33-52.5 74.69T240-435.62q0 97 70 166.31T480-200Z"></path>
                                    </svg></div>
                                <div class="btn-label">Saturation</div>
                            </button>
                            <div></div>
                        </div>
                    </div>

                    <!-- Text Size Section -->
                    <div class="accessibility-section">
                        <div class="section-title">Text Size</div>
                        <div class="accessibility-grid text-size-grid">
                            <button class="accessibility-btn btn-font-increase" data-feature="font-increase">
                                <div class="btn-icon"></div>
                                <div class="btn-label">Font Size Increase</div>
                            </button>
                            <button class="accessibility-btn btn-font-decrease" data-feature="font-decrease">
                                <div class="btn-icon"></div>
                                <div class="btn-label">Font Size Decrease</div>
                            </button>
                            <button class="accessibility-btn btn-normal-font active" data-feature="normal-font">
                                <div class="btn-icon"></div>
                                <div class="btn-label">Normal Font</div>
                            </button>
                        </div>
                    </div>

                    <div class="accessibility-section">
                        <div class="accessibility-grid text-size-grid">
                            <button class="accessibility-btn btn-text-spacing" data-feature="text-spacing">
                                <div class="btn-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5852 5H8.15341C8.06903 5 8 5.06903 8 5.15341V7.60795C8 7.69233 8.06903 7.76136 8.15341 7.76136H9.22727C9.31165 7.76136 9.38068 7.69233 9.38068 7.60795V6.38068H11.6023V13.1193H9.83807C9.75369 13.1193 9.68466 13.1884 9.68466 13.2727V14.3466C9.68466 14.431 9.75369 14.5 9.83807 14.5H14.9006C14.9849 14.5 15.054 14.431 15.054 14.3466V13.2727C15.054 13.1884 14.9849 13.1193 14.9006 13.1193H13.1364V6.38068H15.358V7.60795C15.358 7.69233 15.427 7.76136 15.5114 7.76136H16.5852C16.6696 7.76136 16.7386 7.69233 16.7386 7.60795V5.15341C16.7386 5.06903 16.6696 5 16.5852 5Z"></path>
                                        <path d="M16.1648 14.9953V16.2379H8.72444V14.9953C8.72444 14.8802 8.59021 14.815 8.50008 14.886L6.05321 16.819C6.03665 16.8317 6.02324 16.8482 6.01402 16.8669C6.0048 16.8857 6 16.9064 6 16.9273C6 16.9482 6.0048 16.9689 6.01402 16.9876C6.02324 17.0064 6.03665 17.0228 6.05321 17.0356L8.50008 18.9686C8.52055 18.9847 8.54515 18.9947 8.57105 18.9975C8.59695 19.0003 8.6231 18.9957 8.64652 18.9843C8.66994 18.9729 8.68966 18.9551 8.70345 18.933C8.71723 18.9109 8.7245 18.8853 8.72444 18.8593V17.6186H16.1648V18.8612C16.1648 18.9763 16.299 19.0415 16.3891 18.9705L18.8341 17.0376C18.9051 16.9819 18.9051 16.8746 18.8341 16.8209L16.3891 14.8879C16.3689 14.8717 16.3444 14.8615 16.3186 14.8585C16.2928 14.8556 16.2667 14.8599 16.2432 14.8712C16.2198 14.8824 16.2 14.9 16.1861 14.9219C16.1723 14.9439 16.1649 14.9693 16.1648 14.9953Z"></path>
                                    </svg></div>
                                <div class="btn-label">Text Spacing</div>
                            </button>
                            <button class="accessibility-btn btn-line-height" data-feature="line-height">
                                <div class="btn-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5852 5H4.15341C4.06903 5 4 5.06903 4 5.15341V7.60795C4 7.69233 4.06903 7.76136 4.15341 7.76136H5.22727C5.31165 7.76136 5.38068 7.69233 5.38068 7.60795V6.38068H8.60227V17.1193H6.83807C6.75369 17.1193 6.68466 17.1884 6.68466 17.2727V18.3466C6.68466 18.431 6.75369 18.5 6.83807 18.5H11.9006C11.9849 18.5 12.054 18.431 12.054 18.3466V17.2727C12.054 17.1884 11.9849 17.1193 11.9006 17.1193H10.1364V6.38068H13.358V7.60795C13.358 7.69233 13.427 7.76136 13.5114 7.76136H14.5852C14.6696 7.76136 14.7386 7.69233 14.7386 7.60795V5.15341C14.7386 5.06903 14.6696 5 14.5852 5ZM19.8165 15.4702H18.5739V8.02983H19.8165C19.9315 8.02983 19.9967 7.8956 19.9258 7.80547L17.9928 5.35859C17.98 5.34204 17.9636 5.32863 17.9448 5.31941C17.9261 5.31018 17.9054 5.30539 17.8845 5.30539C17.8636 5.30539 17.8429 5.31018 17.8241 5.31941C17.8053 5.32863 17.7889 5.34204 17.7761 5.35859L15.8432 7.80547C15.8271 7.82594 15.8171 7.85054 15.8143 7.87644C15.8115 7.90234 15.8161 7.92849 15.8275 7.95191C15.8389 7.97532 15.8567 7.99505 15.8788 8.00883C15.9009 8.02262 15.9264 8.02989 15.9525 8.02983H17.1932V15.4702H15.9506C15.8355 15.4702 15.7703 15.6044 15.8413 15.6945L17.7742 18.1395C17.8298 18.2104 17.9372 18.2104 17.9909 18.1395L19.9239 15.6945C19.9401 15.6743 19.9503 15.6498 19.9533 15.624C19.9562 15.5982 19.9518 15.5721 19.9406 15.5486C19.9294 15.5252 19.9118 15.5054 19.8898 15.4915C19.8679 15.4776 19.8425 15.4702 19.8165 15.4702Z"></path>
                                    </svg>
                                </div>
                                <div class="btn-label">Line Height</div>
                            </button>
                            <div></div>
                        </div>
                    </div>

                    <!-- Other Controls Section -->
                    <div class="accessibility-section">
                        <div class="section-title">Other controls</div>
                        <div class="accessibility-grid other-controls-grid">
                            <button class="accessibility-btn btn-screen-reader" data-feature="screen-reader">
                                <div class="btn-icon">
                                    <svg width="21" height="21" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1973 0.140137C11.3863 -0.0116447 11.6461 -0.0430314 11.8662 0.0600586C12.0896 0.164819 12.2323 0.389477 12.2324 0.63623V20.3638C12.2324 20.6105 12.0896 20.8352 11.8662 20.9399C11.6427 21.0446 11.3782 21.011 11.1885 20.853L4.79004 15.52H2.82812C1.27839 15.5199 0.0195706 14.2732 0 12.728V8.30811C1.94537e-05 6.74616 1.2662 5.48008 2.82812 5.47998H4.79004L11.1885 0.147949L11.1973 0.140137ZM5.42773 6.60498C5.31345 6.70022 5.16927 6.75237 5.02051 6.75244H2.82812C1.96912 6.75254 1.27248 7.44908 1.27246 8.30811V12.7124C1.28341 13.562 1.97593 14.2475 2.82812 14.2476H5.03418C5.17808 14.2507 5.31695 14.3027 5.42773 14.395L10.96 19.0054V1.99463L5.42773 6.60498ZM17.7217 3.47412C17.9663 3.22956 18.3611 3.22544 18.6104 3.4624L18.6221 3.47412L18.6641 3.51709C20.4537 5.34372 21 8.26774 21 10.5005C20.9999 12.7507 20.4453 15.7025 18.6221 17.5259C18.3736 17.7744 17.9702 17.7744 17.7217 17.5259C17.4732 17.2774 17.4732 16.874 17.7217 16.6255C19.1858 15.1612 19.7275 12.6338 19.7275 10.5005C19.7275 8.38367 19.1945 5.87802 17.7559 4.40869L17.71 4.36279C17.473 4.11348 17.477 3.71876 17.7217 3.47412ZM14.4336 6.76221C14.6782 6.51758 15.073 6.51351 15.3223 6.75049L15.3662 6.79443C16.0409 7.48997 16.6162 8.74804 16.6162 10.5005C16.6161 12.2804 16.0223 13.5494 15.334 14.2378L15.3223 14.2495C15.073 14.4865 14.6782 14.4824 14.4336 14.2378C14.1854 13.9894 14.1855 13.5869 14.4336 13.3384L14.4531 13.3188C14.857 12.9019 15.3436 11.9842 15.3438 10.5005C15.3437 9.01648 14.857 8.09816 14.4531 7.68115L14.4336 7.6626L14.4229 7.65088C14.1859 7.40161 14.1891 7.00685 14.4336 6.76221Z"></path>
                                    </svg>
                                </div>
                                <div class="btn-label">Screen Reader</div>
                            </button>
                            <button class="accessibility-btn btn-hide-images" data-feature="hide-images">
                                <div class="btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="black">
                                        <path d="m820-254-60-60v-433.69q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H314l-60-60h493.69Q778-820 799-799q21 21 21 51.31V-254ZM805.85-69.85 735.69-140H212.31Q182-140 161-161q-21-21-21-51.31v-523.38l-70.15-70.16L112-848l736 736-42.15 42.15ZM270-290l99.23-131.54 80 102.31L496.08-379 200-675.08v462.77q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h462.77l-90-90H270Zm267-247Zm-99.15 99.15Z"></path>
                                    </svg>
                                </div>
                                <div class="btn-label">Hide Images</div>
                            </button>
                            <button class="accessibility-btn btn-text-to-speech" data-feature="text-to-speech">
                                <div class="btn-icon fa fa-bullhorn ">

                                </div>
                                <div class="btn-label">Text to Speech</div>
                            </button>
                        </div>
                    </div>
                </div>
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
            <a href="helpline.php" class="mobile-nav-link">Helpline</a>
        </div>
        <div class="mobile-nav-item">
            <a href="tourism.php" class="mobile-nav-link" onclick="toggleMobileSubmenu('tourismSubmenu', this)">
                TOURISM
                <i class="fa fa-plus text-sm"></i>
            </a>
            <div id="tourismSubmenu" class="mobile-submenu">
                <a href="culture-heritage.php" class="mobile-submenu-item">& Heritage</a>

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
                <a href="helpline.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">Helpline</a>
            </li>

            <li class="relative group">
                <a href="tourism.php"
                    class="flex items-center gap-4 px-3 py-2 group-hover:bg-black/40 group-hover:text-white hover:bg-black/40 hover:text-white transition-colors duration-300">
                    TOURISM
                    <i class="fa fa-chevron-right transition-transform duration-300 group-hover:rotate-90"></i>
                </a>
                <ul class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-96 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-black/40 shadow-md">
                    <li><a href="culture-heritage.php" class="block px-3 py-2 hover:bg-black/40 hover:text-white">& Heritage</a></li>

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

    // Accessibility Tools Functionality
    class AccessibilityTools {
        constructor() {
            this.activeFeatures = new Set(['normal-contrast', 'normal-font']);
            this.fontSizeLevel = 0; // -3 to +3, 0 is normal
            this.init();
        }

        init() {
            // Add click event listeners to all accessibility buttons
            document.querySelectorAll('.accessibility-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.toggleFeature(btn.dataset.feature, btn);
                });
            });

            // Prevent panel from closing when clicking inside it
            const panel = document.getElementById('accessibilityPanel');
            if (panel) {
                panel.addEventListener('click', (e) => {
                    e.stopPropagation();
                });
            }

            // Load saved preferences
            this.loadPreferences();
        }

        toggleFeature(feature, buttonElement) {
            switch (feature) {
                case 'high-contrast':
                    this.toggleContrast('high-contrast');
                    break;
                case 'normal-contrast':
                    this.toggleContrast('normal-contrast');
                    break;
                case 'invert':
                    this.toggleBodyClass('invert');
                    break;
                case 'saturation':
                    this.toggleBodyClass('saturation');
                    break;
                case 'highlight-links':
                    this.toggleLinkHighlight();
                    break;
                case 'font-increase':
                    this.adjustFontSize('increase');
                    break;
                case 'font-decrease':
                    this.adjustFontSize('decrease');
                    break;
                case 'normal-font':
                    this.adjustFontSize('normal');
                    break;
                case 'text-spacing':
                    this.toggleBodyClass('wide-spacing');
                    break;
                case 'line-height':
                    this.toggleBodyClass('high-line-height');
                    break;
                case 'hide-images':
                    this.toggleBodyClass('hide-images');
                    break;
                case 'screen-reader':
                    this.toggleScreenReader();
                    break;
                case 'text-to-speech':
                    this.toggleTextToSpeech();
                    break;
            }

            this.updateButtonStates();
            this.savePreferences();
        }

        toggleContrast(type) {
            // Remove all contrast classes
            document.body.classList.remove('high-contrast');

            // Clear contrast features from active set
            this.activeFeatures.delete('high-contrast');
            this.activeFeatures.delete('normal-contrast');

            if (type === 'high-contrast') {
                document.body.classList.add('high-contrast');
                this.activeFeatures.add('high-contrast');
            } else {
                this.activeFeatures.add('normal-contrast');
            }
        }

        toggleBodyClass(className) {
            if (document.body.classList.contains(className)) {
                document.body.classList.remove(className);
                this.activeFeatures.delete(className);
            } else {
                document.body.classList.add(className);
                this.activeFeatures.add(className);
            }
        }

        toggleLinkHighlight() {
            if (this.activeFeatures.has('highlight-links')) {
                this.removeHighlightStyles();
                this.activeFeatures.delete('highlight-links');
            } else {
                this.addHighlightStyles();
                this.activeFeatures.add('highlight-links');
            }
        }

        addHighlightStyles() {
            const style = document.createElement('style');
            style.id = 'link-highlight-styles';
            style.textContent = `
                a { 
                    background: black !important; 
                    color: yellow !important;
                    fill: yellow !important;
                    stroke: yellow !important;
                    text-decoration: underline !important;
                }
            `;
            document.head.appendChild(style);
        }

        removeHighlightStyles() {
            const style = document.getElementById('link-highlight-styles');
            if (style) {
                style.remove();
            }
        }

        adjustFontSize(action) {
            // Remove all font size classes
            document.body.classList.remove('large-font', 'larger-font', 'largest-font',
                'small-font', 'smaller-font', 'smallest-font');

            // Clear font features from active set
            this.activeFeatures.delete('large-font');
            this.activeFeatures.delete('larger-font');
            this.activeFeatures.delete('largest-font');
            this.activeFeatures.delete('small-font');
            this.activeFeatures.delete('smaller-font');
            this.activeFeatures.delete('smallest-font');
            this.activeFeatures.delete('normal-font');

            switch (action) {
                case 'increase':
                    if (this.fontSizeLevel < 3) {
                        this.fontSizeLevel++;
                    }
                    break;
                case 'decrease':
                    if (this.fontSizeLevel > -3) {
                        this.fontSizeLevel--;
                    }
                    break;
                case 'normal':
                    this.fontSizeLevel = 0;
                    break;
            }

            // Apply the appropriate class based on level
            switch (this.fontSizeLevel) {
                case 3:
                    document.body.classList.add('largest-font');
                    this.activeFeatures.add('largest-font');
                    break;
                case 2:
                    document.body.classList.add('larger-font');
                    this.activeFeatures.add('larger-font');
                    break;
                case 1:
                    document.body.classList.add('large-font');
                    this.activeFeatures.add('large-font');
                    break;
                case -1:
                    document.body.classList.add('small-font');
                    this.activeFeatures.add('small-font');
                    break;
                case -2:
                    document.body.classList.add('smaller-font');
                    this.activeFeatures.add('smaller-font');
                    break;
                case -3:
                    document.body.classList.add('smallest-font');
                    this.activeFeatures.add('smallest-font');
                    break;
                case 0:
                default:
                    this.activeFeatures.add('normal-font');
                    break;
            }
        }
        toggleScreenReader() {
            if (this.activeFeatures.has('screen-reader')) {
                this.activeFeatures.delete('screen-reader');
                // Stop screen reader functionality
                console.log('Screen reader disabled');
            } else {
                this.activeFeatures.add('screen-reader');
                // Enable screen reader functionality
                console.log('Screen reader enabled');
                alert('Screen reader mode activated. This feature requires additional screen reader software.');
            }
        }

        toggleTextToSpeech() {
            if (this.activeFeatures.has('text-to-speech')) {
                this.activeFeatures.delete('text-to-speech');
                // Stop speech synthesis
                if (window.speechSynthesis) {
                    window.speechSynthesis.cancel();
                }
                console.log('Text to speech disabled');
            } else {
                this.activeFeatures.add('text-to-speech');
                console.log('Text to speech enabled');

                // Test text to speech
                if ('speechSynthesis' in window) {
                    const utterance = new SpeechSynthesisUtterance('Text to speech activated');
                    window.speechSynthesis.speak(utterance);

                    // Add click listeners to read text
                    this.addTextToSpeechListeners();
                } else {
                    alert('Text to speech is not supported in this browser.');
                    this.activeFeatures.delete('text-to-speech');
                }
            }
        }

        addTextToSpeechListeners() {
            document.addEventListener('click', (e) => {
                if (this.activeFeatures.has('text-to-speech') && e.target.textContent) {
                    const text = e.target.textContent.trim();
                    if (text && window.speechSynthesis) {
                        window.speechSynthesis.cancel();
                        const utterance = new SpeechSynthesisUtterance(text);
                        window.speechSynthesis.speak(utterance);
                    }
                }
            });
        }

        updateButtonStates() {
            document.querySelectorAll('.accessibility-btn').forEach(btn => {
                const feature = btn.dataset.feature;
                if (this.activeFeatures.has(feature)) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        }

        savePreferences() {
            localStorage.setItem('accessibility-features', JSON.stringify([...this.activeFeatures]));
        }

        loadPreferences() {
            const saved = localStorage.getItem('accessibility-features');
            if (saved) {
                try {
                    const features = JSON.parse(saved);
                    features.forEach(feature => {
                        this.activeFeatures.add(feature);

                        // Apply the feature
                        switch (feature) {
                            case 'high-contrast':
                                document.body.classList.add('high-contrast');
                                break;
                            case 'invert':
                                document.body.classList.add('invert');
                                break;
                            case 'saturation':
                                document.body.classList.add('saturation');
                                break;
                            case 'highlight-links':
                                this.addHighlightStyles();
                                break;
                            case 'large-font':
                                document.body.classList.add('large-font');
                                this.fontSizeLevel = 1;
                                break;
                            case 'larger-font':
                                document.body.classList.add('larger-font');
                                this.fontSizeLevel = 2;
                                break;
                            case 'largest-font':
                                document.body.classList.add('largest-font');
                                this.fontSizeLevel = 3;
                                break;
                            case 'small-font':
                                document.body.classList.add('small-font');
                                this.fontSizeLevel = -1;
                                break;
                            case 'smaller-font':
                                document.body.classList.add('smaller-font');
                                this.fontSizeLevel = -2;
                                break;
                            case 'smallest-font':
                                document.body.classList.add('smallest-font');
                                this.fontSizeLevel = -3;
                                break;
                            case 'normal-font':
                                this.fontSizeLevel = 0;
                                break;
                            case 'wide-spacing':
                                document.body.classList.add('wide-spacing');
                                break;
                            case 'high-line-height':
                                document.body.classList.add('high-line-height');
                                break;
                            case 'hide-images':
                                document.body.classList.add('hide-images');
                                break;
                            case 'text-to-speech':
                                this.addTextToSpeechListeners();
                                break;
                        }
                    });
                    this.updateButtonStates();
                } catch (e) {
                    console.error('Error loading accessibility preferences:', e);
                }
            } else {
                this.updateButtonStates();
            }
        }
    }

    // Initialize Accessibility Tools when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new AccessibilityTools();
    });
</script>