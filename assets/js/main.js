// Government Website JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu toggle functionality
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const mobileMenu = document.querySelector(".mobile-menu");

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
    });
  }

  // Dropdown menu functionality for mobile
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const dropdown = this.nextElementSibling;
        if (dropdown) {
          dropdown.classList.toggle("hidden");
        }
      }
    });
  });

  // Smooth scrolling for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href === "#") return;

      e.preventDefault();
      const target = document.querySelector(href);

      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // News ticker functionality
  function initTicker() {
    const ticker = document.querySelector(".ticker-content");
    if (ticker) {
      // Reset animation
      ticker.style.animation = "none";
      ticker.offsetHeight; // Trigger reflow
      ticker.style.animation = "ticker 10s linear infinite";
    }
  }

  // Initialize ticker
  initTicker();

  // Accessibility improvements

  // Keyboard navigation for dropdowns
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      // Close all open dropdowns
      const openDropdowns = document.querySelectorAll(
        ".dropdown-menu:not(.hidden)"
      );
      openDropdowns.forEach((dropdown) => {
        dropdown.classList.add("hidden");
      });
    }
  });

  // Handle dropdown keyboard navigation
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach((dropdown) => {
    const trigger = dropdown.querySelector(".nav-link");
    const menu = dropdown.querySelector(".dropdown-menu");
    const items = menu ? menu.querySelectorAll(".dropdown-item") : [];

    if (trigger && menu) {
      trigger.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          menu.classList.toggle("hidden");
          if (!menu.classList.contains("hidden") && items.length > 0) {
            items[0].focus();
          }
        }
      });

      items.forEach((item, index) => {
        item.addEventListener("keydown", function (e) {
          switch (e.key) {
            case "ArrowDown":
              e.preventDefault();
              const nextItem = items[index + 1];
              if (nextItem) nextItem.focus();
              break;
            case "ArrowUp":
              e.preventDefault();
              const prevItem = items[index - 1];
              if (prevItem) {
                prevItem.focus();
              } else {
                trigger.focus();
              }
              break;
            case "Escape":
              e.preventDefault();
              menu.classList.add("hidden");
              trigger.focus();
              break;
          }
        });
      });
    }
  });

  // Image lazy loading (if needed in future)
  function lazyLoadImages() {
    const images = document.querySelectorAll("img[data-src]");

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute("data-src");
          imageObserver.unobserve(img);
        }
      });
    });

    images.forEach((img) => imageObserver.observe(img));
  }

  // Initialize lazy loading if images exist
  if (document.querySelectorAll("img[data-src]").length > 0) {
    lazyLoadImages();
  }

  // Form validation (if forms are added later)
  function validateForm(form) {
    const inputs = form.querySelectorAll(
      "input[required], select[required], textarea[required]"
    );
    let isValid = true;

    inputs.forEach((input) => {
      if (!input.value.trim()) {
        isValid = false;
        input.classList.add("border-red-500");

        // Remove error styling on input
        input.addEventListener("input", function () {
          this.classList.remove("border-red-500");
        });
      }
    });

    return isValid;
  }

  // Handle form submissions
  const forms = document.querySelectorAll("form");
  forms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      if (!validateForm(this)) {
        e.preventDefault();
        alert("कृपया सर्व आवश्यक फील्ड भरा");
      }
    });
  });

  // Print functionality
  function printPage() {
    window.print();
  }

  // Add print button if needed
  const printBtn = document.querySelector(".print-btn");
  if (printBtn) {
    printBtn.addEventListener("click", printPage);
  }

  // Search functionality (basic)
  const searchInput = document.querySelector(".search-input");
  const searchBtn = document.querySelector(".search-btn");

  if (searchInput && searchBtn) {
    searchBtn.addEventListener("click", function () {
      const query = searchInput.value.trim();
      if (query) {
        // Implement search functionality
        console.log("Searching for:", query);
        // This would typically redirect to a search results page
        // window.location.href = `/search?q=${encodeURIComponent(query)}`;
      }
    });

    searchInput.addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        searchBtn.click();
      }
    });
  }

  // Back to top button
  function createBackToTopButton() {
    const button = document.createElement("button");
    button.innerHTML = "↑";
    button.className =
      "fixed bottom-4 right-4 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 opacity-0 invisible";
    button.setAttribute("aria-label", "Back to top");

    document.body.appendChild(button);

    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 300) {
        button.classList.remove("opacity-0", "invisible");
      } else {
        button.classList.add("opacity-0", "invisible");
      }
    });

    button.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }

  // Initialize back to top button
  createBackToTopButton();

  // Console log for debugging
  console.log("Government website JavaScript loaded successfully");
});

jQuery(document).ready(function ($) {
  let controls = false;
  $(".hero-section").flexslider({
    animation: $("body").hasClass("rtl") ? "fade" : "slide",
    directionNav: controls,
    pausePlay: controls,
    controlNav: controls,
    start: function (slider) {
      $("body").find(".flexslider").resize();
      $(".flexslider ul.slides li.clone a").each(function () {
        $(this).replaceWith($(this).html());
      });
      $(".flex-direction-nav").attr("role", "presentation");
    },
  });
});
// jQuery(document).ready(function ($) {
//   jQuery(".newsticker").flexslider({
//     animation: "slide",
//     directionNav: true,
//     pausePlay: true,
//     maxItems: 1,
//     controlNav: false,
//     slideshowSpeed: 5000,
//     prevText: "<span class='hide'>Previous</span>",
//     nextText: "<span class='hide'>Next</span>",
//     pauseText: "<span class='hide'>Pause</span>",
//     playText: "<span class='hide'>PlayPlay</span>",
//     start: function () {
//       $(".newsticker ul.slides li.clone a").each(function () {
//         $(this).replaceWith($(this).html());
//       });
//     },
//   });
// });
// jQuery(document).ready(function ($) {
//   $(".newsticker.flexslider > .flex-direction-nav a.flex-prev").attr({
//     "aria-label": "Previous latest news",
//     role: "button",
//   });
//   $(".newsticker.flexslider > .flex-direction-nav a.flex-next").attr({
//     "aria-label": "Next latest news",
//     role: "button",
//   });
//   $(".newsticker.flexslider > .flex-pauseplay a").attr({
//     "aria-label": "Pause latest news",
//     role: "button",
//   });

//   $(".newsticker.flexslider > .flex-pauseplay a").on("click", function () {
//     const $playPauseBtn = $(this);
//     setTimeout(function () {
//       if ($playPauseBtn.hasClass("flex-pause")) {
//         $playPauseBtn.attr("aria-label", "Pause latest news");
//       } else if ($playPauseBtn.hasClass("flex-play")) {
//         $playPauseBtn.attr("aria-label", "Play latest news");
//       }
//     }, 0);
//   });
// });
jQuery(document).ready(function ($) {
  // Init FlexSlider
  var ticker = $(".newsticker")
    .flexslider({
      animation: "slide",
      directionNav: false,
      pausePlay: false,
      maxItems: 1,
      controlNav: false,
      slideshowSpeed: 5000,
      prevText: "",
      nextText: "",
      start: function () {
        $(".newsticker ul.slides li.clone a").each(function () {
          $(this).replaceWith($(this).html());
        });
      },
    })
    .data("flexslider");

  // Custom controls
  $("#news-prev").on("click", function () {
    ticker.flexslider("prev");
  });

  $("#news-next").on("click", function () {
    ticker.flexslider("next");
  });

  $("#news-pause").on("click", function () {
    if (ticker.playing) {
      ticker.flexslider("pause");
      $(this).text("▶");
    } else {
      ticker.flexslider("play");
      $(this).text("⏸");
    }
  });
});
document.querySelectorAll(".tab-item").forEach((tab) => {
  tab.addEventListener("click", () => {
    // Remove active styles from all tabs
    document.querySelectorAll(".tab-item").forEach((t) => {
      t.classList.remove("bg-white", "font-semibold");
      t.classList.add("bg-[#ebebeb]", "border-1", "border-[#e3e3e3]");
    });

    // Hide all panels
    document
      .querySelectorAll(".tab-panel")
      .forEach((panel) => panel.classList.add("hidden"));

    // Activate the clicked tab
    tab.classList.add("bg-white", "font-semibold");
    tab.classList.remove("bg-[#ebebeb]", "border-1", "border-[#e3e3e3]");

    // Show the matching panel
    const panelId = tab.getAttribute("data-tab");
    document.getElementById(panelId).classList.remove("hidden");
  });
});

jQuery(document).ready(function (e) {
  //=========================
  //js for photo gallery component design 2

  var itemWidth = 350;

  jQuery(".HomeGalleryCarasole").flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: itemWidth,
  });
  jQuery("#HomeVideoCarasole").flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 200,
  });
});
jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() >= 300) {
    jQuery(" .menuWrapper").addClass("is-sticky");
  } else {
    jQuery(".menuWrapper").removeClass("is-sticky");
  }
});
const openBtn = document.getElementById("openSidebar");
const closeBtn = document.getElementById("closeSidebar");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("sidebarOverlay");

openBtn.addEventListener("click", () => {
  sidebar.classList.remove("translate-x-full");
  overlay.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
  sidebar.classList.add("translate-x-full");
  overlay.classList.add("hidden");
});

overlay.addEventListener("click", () => {
  sidebar.classList.add("translate-x-full");
  overlay.classList.add("hidden");
});
