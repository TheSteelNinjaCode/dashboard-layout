<?php

use Lib\MainLayout; ?>

<div class="flex flex-col min-h-screen">
    <!-- Top Head -->
    <?php include 'src/app/_components/top-head.php'; ?>

    <!-- Main Content Wrapper -->
    <div class="flex flex-1">
        <!-- Sidebar -->
        <?php include 'src/app/_components/left-sidebar.php'; ?>

        <!-- Page Content -->
        <div class="flex flex-col flex-1">
            <!-- Main Content -->
            <main class="flex-1 bg-white p-4">
                <?= MainLayout::$childLayoutChildren; ?>
            </main>

            <!-- Footer -->
            <?php include 'src/app/_components/footer.php'; ?>
        </div>
    </div>
</div>