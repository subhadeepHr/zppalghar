<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schemes/Programmes</title>
    <?php include_once "include/header_script.php"; ?>
</head>

<body class="bg-[#f8f6f2]">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto">


        <!-- Title -->
        <div class="px-6">
            <h1 class="text-3xl font-medium mb-6">Schemes/Programmes</h1>
        </div>

        <!-- Container -->
        <div class="bg-white shadow-sm rounded-lg mx-6 p-4">
            <div id="departmentsGrid" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- JS will insert department cards here -->
            </div>
        </div>
    </div>
    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>
    <script>
        const departments = [{
                name: "District Rural Development Agency (DRDA)",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Gram Panchayat Department",
                color: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black"
            },
            {
                name: "Women and Child Development Department",
                color: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Social Welfare Department",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Finance Department",
                color: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black"
            },
            {
                name: "M. G. N. R. E. G. S. Department",
                color: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Agriculture Department",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Animal Husbandry Department",
                color: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black"
            },
            {
                name: "Rural Water Supply Department",
                color: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Works Department",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "District Water Conservation Department",
                color: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black"
            },
            {
                name: "Education Department (Primary)",
                color: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Education Department (Scheme)",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "Education Department (Secondary)",
                color: "border border-black",
                iconBg: "bg-[#1673b4]",
                iconColor: "text-black"
            },
            {
                name: "Health Department",
                color: "bg-green-800",
                iconBg: "bg-white",
                iconColor: "text-black"
            },
            {
                name: "District Water and Sanitation Department",
                color: "bg-orange-500",
                iconBg: "bg-white",
                iconColor: "text-black"
            }
        ];

        const grid = document.getElementById("departmentsGrid");

        departments.forEach(dep => {
            const card = document.createElement("a");
            card.href = "schemes_district-rural-development-agency.php";
            card.className = `flex items-center gap-4 rounded-md p-4 hover:opacity-90 ${dep.color.includes("border") ? dep.color + " hover:bg-gray-50" : dep.color + " text-white hover:text-black"}`;

            card.innerHTML = `
            <div class="${dep.iconBg} rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ${dep.iconColor}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 10a4 4 0 100-8 4 4 0 000 8zM2 18a8 8 0 0116 0H2z" />
            </svg>
            </div>
        ${dep.name}
      `;
            grid.appendChild(card);
        });
    </script>

</body>

</html>