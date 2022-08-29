<aside class="left-sidebar" data-sidebarbg="skin6">

    <?php $user = service('auth')->getCurrentUser()?>

    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <?php if($user->role=='admin'):?>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="/admindashboard">
                        <i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <?php endif;?>

                <li class="nav-small-cap"><span class="hide-menu">Manage</span></li>

                <?php if($user->role=='admin'):?>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/volunteers">
                        <i data-feather="tag" class="feather-icon"></i>
                        <span class="hide-menu">Volunteers</span>
                    </a>
                </li>
                <?php endif;?>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/tasks">
                        <i data-feather="tag" class="feather-icon"></i>
                        <span class="hide-menu">Tasks</span>
                    </a>
                </li>




                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
    