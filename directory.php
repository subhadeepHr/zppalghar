<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schemes/Programmes</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f6f3ee] ">
    <?php include_once "include/header.php"; ?>

    <div class="max-w-7xl mx-auto my-5">
        <!-- Title -->
        <div class="">
            <h1 class="text-3xl font-medium mb-6">Directory</h1>
        </div>

        <!-- Container -->
        <div class="">
            <div id="departmentsGrid" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- JS will insert department cards here -->
            </div>
        </div>

    </div>
    <script>
        const departments = [{
                name: "General Administration Department",
                bg: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black",
                link: "./directory/blank.php"
            },
            {
                name: "Gram Panchayat Department",
                bg: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black",
                link: "./directory/zp-palghar-contact-of-hod.php"
            },
            {
                name: "District Rural Development Agency (DRDA)",
                bg: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black",
                link: "./directory/contact-details-of-panchayat-samiti.php"

            }
        ];

        const grid = document.getElementById("departmentsGrid");

        departments.forEach(dep => {
            const card = document.createElement("a");
            card.href = dep.link;
            card.className = `flex items-center gap-4 rounded-md p-2 hover:opacity-90 ${dep.bg.includes("border") ? dep.bg + " hover:bg-gray-50" : dep.bg + " text-white hover:opacity-80"}`;

            card.innerHTML = `
                <div class="${dep.iconBg} rounded-full w-12 h-12 flex items-center justify-center">
                    <i class="fa-solid fa-chevron-right ${dep.iconColor}"></i>
                </div>
                <span class="flex-1">${dep.name}</span>
            `;
            grid.appendChild(card);
        });
    </script>
    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
</body>

</html>