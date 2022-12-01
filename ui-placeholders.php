<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Placeholders | Skote - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Placeholders</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Placeholders</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Examples</h4>
                                <p class="card-title-desc">In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.</p>

                                <div class="row gap-4">
                                    <div class="col-lg-5">
                                        <div class="card shadow-none border mb-0">
                                            <img src="assets/images/small/img-1.jpg" class="card-img-top" alt="...">

                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="card shadow-none border mb-0" aria-hidden="true">
                                            <img src="assets/images/small/img-1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title placeholder-glow">
                                                    <span class="placeholder col-6"></span>
                                                </h5>
                                                <p class="card-text placeholder-glow">
                                                    <span class="placeholder col-7"></span>
                                                    <span class="placeholder col-4"></span>
                                                    <span class="placeholder col-4"></span>
                                                    <span class="placeholder col-6"></span>
                                                    <span class="placeholder col-8"></span>
                                                </p>
                                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placeholders with Grid column</h4>
                                <p class="card-title-desc">Create placeholders with the <code>.placeholder</code> class and a grid column class (e.g., <code>.col-6</code>) to set the <code>width</code>. They can replace the text inside an element or be added as a modifier class to an existing component.</p>

                                <div>
                                    <p aria-hidden="true">
                                        <span class="placeholder col-6"></span>
                                    </p>

                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placeholders Width</h4>
                                <p class="card-title-desc">You can change the <code>width</code> through grid column classes, width utilities, or inline styles.</p>

                                <div>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder w-75"></span>
                                    <span class="placeholder" style="width: 25%;"></span>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placeholders Color</h4>
                                <p class="card-title-desc">By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be overridden with a custom color or utility class.</p>

                                <div>
                                    <span class="placeholder col-12"></span>
                                    <span class="placeholder col-12 bg-primary"></span>
                                    <span class="placeholder col-12 bg-secondary"></span>
                                    <span class="placeholder col-12 bg-success"></span>
                                    <span class="placeholder col-12 bg-danger"></span>
                                    <span class="placeholder col-12 bg-warning"></span>
                                    <span class="placeholder col-12 bg-info"></span>
                                    <span class="placeholder col-12 bg-light"></span>
                                    <span class="placeholder col-12 bg-dark"></span>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placeholders Sizing</h4>
                                <p class="card-title-desc">The size of <code>.placeholder</code>s are based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.</p>

                                <div>
                                    <span class="placeholder col-12 placeholder-lg"></span>
                                    <span class="placeholder col-12"></span>
                                    <span class="placeholder col-12 placeholder-sm"></span>
                                    <span class="placeholder col-12 placeholder-xs"></span>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animation in Placeholders</h4>
                                <p class="card-title-desc">Animate placeholders with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better convey the perception of something being <em>actively</em> loaded.</p>

                                <div class="">
                                    <p class="placeholder-glow">
                                        <span class="placeholder col-12"></span>
                                    </p>

                                    <p class="placeholder-wave mb-0">
                                        <span class="placeholder col-12"></span>
                                    </p>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>