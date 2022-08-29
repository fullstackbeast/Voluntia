<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("content") ?>

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning <?= $user->first_name?>!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->

<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">

            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?=$stats['allvolunteers']?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Volunteers</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?=$stats['allTasks']?></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Tasks</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?=$stats['completed']?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Completed Tasks</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium"><?=$stats['pending']?></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pending Tasks</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Top Volunteers</h4>
                        <div class="ml-auto">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Volunteer</th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Total Assigned</th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Total Completed</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="mr-3"><img
                                                    src="../assets/images/users/widget-table-pic1.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                Gover</h5>
                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">10</td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">9</td>

                            </tr>

                            <tr>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="mr-3"><img
                                                    src="../assets/images/users/widget-table-pic1.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                Gover</h5>
                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">10</td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">9</td>

                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->




    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Sales</h4>
                    <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                    <ul class="list-style-none mb-0">
                        <li>
                            <i class="fas fa-circle text-primary font-10 mr-2"></i>
                            <span class="text-muted">Direct Sales</span>
                            <span class="text-dark float-right font-weight-medium">$2346</span>
                        </li>
                        <li class="mt-3">
                            <i class="fas fa-circle text-danger font-10 mr-2"></i>
                            <span class="text-muted">Referral Sales</span>
                            <span class="text-dark float-right font-weight-medium">$2108</span>
                        </li>
                        <li class="mt-3">
                            <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                            <span class="text-muted">Affiliate Sales</span>
                            <span class="text-dark float-right font-weight-medium">$1204</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <h4 class="card-title mb-0">Earning Statistics</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="#">Insert</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-4 mb-5">
                        <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                    </div>
                    <ul class="list-inline text-center mt-4 mb-0">
                        <li class="list-inline-item text-muted font-italic">Earnings for this month</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>



    <!-- End Top Leader Table -->
    <!-- *************************************************************** -->
</div>

<?= $this->endSection() ?>