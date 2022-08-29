<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <!-- Logo icon -->
                <a href="/">
                    <b class="logo-text">
                        <!-- Light Logo icon -->
                       VOLUNTEER
                    </b>

                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="
    display: grid;
    justify-content: space-between;
">

            <ul class="navbar-nav float-left" >

            </ul>
            <ul class="navbar-nav float-right" >

                <?php $user = service('auth')->getCurrentUser()?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                             width="40">
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                class="text-dark"><?=$user->first_name.' '.$user->last_name?></span> <i data-feather="chevron-down"
                                                                      class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                        <a class="dropdown-item" href="/logout"><i data-feather="power"
                                                                              class="svg-icon mr-2 ml-1"></i>
                            Logout</a>

                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>