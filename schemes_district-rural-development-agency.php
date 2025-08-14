<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>District Rural Development Agency (DRDA)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#faf8f4]">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <div class="max-w-7xl mx-auto py-6">
        <!-- Breadcrumb -->


        <!-- Title -->
        <div class="px-6">
            <h1 class="text-3xl font-medium mb-6">District Rural Development Agency (DRDA)</h1>
        </div>

        <!-- Main Container -->
        <div class="bg-white shadow-sm rounded-lg mx-6 p-4 flex flex-col md:flex-row gap-6">

            <!-- Sidebar Tabs -->
            <div class="flex flex-col w-full md:w-72 gap-1">
                <button class="tab-btn p-3 rounded-l-md flex items-center gap-2 bg-gray-100 text-gray-700 font-medium"
                    data-tab="central">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    Central Government Schemes
                </button>
                <button class="tab-btn p-3 rounded-l-md flex items-center gap-2 bg-[#2a2a2a] text-white font-medium"
                    data-tab="state">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    State Government Schemes
                </button>
                <button class="tab-btn p-3 rounded-l-md flex items-center gap-2 bg-[#2a2a2a] text-white font-medium"
                    data-tab="joint">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    Joint Schemes
                </button>
                <button class="tab-btn p-3 rounded-l-md flex items-center gap-2 bg-[#2a2a2a] text-white font-medium"
                    data-tab="zilla">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    Zilla Parishad Schemes
                </button>
            </div>

            <!-- Content Area -->
            <div id="schemeContent" class="flex-1 flex flex-wrap gap-4 items-start">
                <!-- Schemes will be dynamically inserted here -->
            </div>

        </div>
    </div>
    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
    <script>
        const schemesData = {
            central: [{
                    name: "Pradhan Mantri JANMAN Awaas Yojana",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                },
                {
                    name: "Pradhan Mantri Awaas Yojana – Rural",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                },
            ],
            state: [{
                    name: "Maharashtra Rural Housing Scheme",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                },
                {
                    name: "Maharashtra Employment Guarantee Scheme",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                }
            ],
            joint: [{
                    name: "Central-State Joint Drinking Water Scheme",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                },
                {
                    name: "Central-State Irrigation Project",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                }
            ],
            zilla: [{
                    name: "Zilla Parishad Rural Road Development",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                },
                {
                    name: "Zilla Parishad School Renovation",
                    link: "schemes_pradhan-mantri-awaas-yojana-rural.php"
                }
            ]
        };

        const contentDiv = document.getElementById("schemeContent");
        const buttons = document.querySelectorAll(".tab-btn");

        function loadSchemes(type) {
            contentDiv.innerHTML = "";
            schemesData[type].forEach(scheme => {
                const item = document.createElement("a");
                item.href = scheme.link;
                item.className = "bg-[#2a2a2a] text-white px-6 py-3 rounded-full shadow-md whitespace-nowrap cursor-pointer hover:bg-gray-700 block";
                item.textContent = scheme.name;
                contentDiv.appendChild(item);
            });
        }


        buttons.forEach(btn => {
            btn.addEventListener("click", () => {
                buttons.forEach(b => b.classList.remove("bg-gray-100", "text-gray-700"));
                buttons.forEach(b => b.classList.add("bg-[#2a2a2a]", "text-white"));

                btn.classList.remove("bg-[#2a2a2a]", "text-white");
                btn.classList.add("bg-gray-100", "text-gray-700");

                loadSchemes(btn.dataset.tab);
            });
        });

        // Load first tab initially
        loadSchemes("central");
    </script>

</body>

</html>