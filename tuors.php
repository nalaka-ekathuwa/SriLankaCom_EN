<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'head.php' ?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <?php
    $class_about = '';
    $class_dest = '';
    $class_tours = "class ='active'";
    $class_home = "";
    $class_contact = '';
    include 'header.php';
    ?>

    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Tour grid</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour grid, right side</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <?php include 'tour_segment.php'; ?>
    <!-- top Destination ends -->

    <!-- JavaScript Pagination Logic -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const itemsPerPage = 3;
            const tourContainer = document.getElementById("tour-container");
            const tours = Array.from(tourContainer.children); // Get all tour cards
            const totalPages = Math.ceil(tours.length / itemsPerPage);
            let currentPage = 1;

            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            const pageInfo = document.getElementById("page-info");

            function showPage(page) {
                // Hide all cards
                tours.forEach((tour, index) => {
                    tour.style.display =
                        index >= (page - 1) * itemsPerPage && index < page * itemsPerPage ? "block" : "none";
                });

                // Update page info and button states
                pageInfo.textContent = `Page ${page} of ${totalPages}`;
                prevBtn.disabled = page === 1;
                nextBtn.disabled = page === totalPages;
            }

            // Button event listeners
            prevBtn.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Initialize first page
            showPage(currentPage);
        });
    </script>

    <?php include 'footer.php'; ?>
    <?php include 'foot.php'; ?>
</body>

</html>