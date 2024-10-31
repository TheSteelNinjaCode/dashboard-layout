<?php

use Lib\MainLayout; ?>

<div class="flex flex-col min-h-screen">
    <!-- Top Head -->
    <?php include 'src/app/_components/top-head.php'; ?>

    <!-- Main Content Wrapper -->
    <div class="flex flex-1">
        <!-- Left Sidebar -->
        <?php include 'src/app/_components/left-sidebar.php'; ?>

        <!-- Page Content -->
        <div class="flex flex-col flex-1">
            <!-- Main Content -->
            <main class="flex-1 bg-white p-4">
                <?= MainLayout::$childLayoutChildren; ?>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white p-4">
                Footer
            </footer>
        </div>

        <!-- Right Sidebar -->
        <?php include 'src/app/_components/right-sidebar.php'; ?>
    </div>
</div>