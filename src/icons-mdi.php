<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Material Design Icons";
    include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php
                    $sub_title = "Icons";
                    $page_title = "Material Design Icons";
                    include 'partials/page-title.php'; ?>

                    <div class="row icons-list-demo">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">New Icons</h4>
                                    <p class="card-title-desc mb-2">Use <code>&lt;i class="mdi mdi-*-*"&gt;&lt;/i&gt;</code> class.<span class="badge bg-success">v 6.5.95</span>.</p>
                                    <div class="row icons-list-demo" id="newIcons"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">All Icons</h4>
                                    <div class="row icons-list-demo" id="icons"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Size</h4>
                                    <div class="row icons-list-demo">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-18px mdi-account"></i> mdi-18px
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-24px mdi-account"></i> mdi-24px
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-36px mdi-account"></i> mdi-36px
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-48px mdi-account"></i> mdi-48px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Rotate</h4>
                                    <div class="row icons-list-demo">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-45 mdi-account"></i> mdi-rotate-45
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-90 mdi-account"></i> mdi-rotate-90
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-135 mdi-account"></i> mdi-rotate-135
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-180 mdi-account"></i> mdi-rotate-180
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-225 mdi-account"></i> mdi-rotate-225
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-270 mdi-account"></i> mdi-rotate-270
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-rotate-315 mdi-account"></i> mdi-rotate-315
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Spin</h4>
                                    <div class="row icons-list-demo">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-spin mdi-loading"></i> mdi-spin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="mdi mdi-spin mdi-star"></i> mdi-spin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <?php include 'partials/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/right-sidebar.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

    <!-- Remixicons Icons Demo js -->
    <script src="assets/js/pages/icons-mdi.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>