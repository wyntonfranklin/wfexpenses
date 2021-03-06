<?php ?>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form action="<?php echo $this->createUrl('/search/');?>" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input name="query" type="text" class="form-control bg-light border-0 small" placeholder="Search for transactions..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for transactions" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-wallet text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 25, 2019</div>
                        <span class="font-weight-bold">Welcome to PurDM. Your own expense tracker.</span>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0);">Show All Alerts</a>
            </div>
        </li>

        <li class="nav-item">
            <a title="Create Transaction" class="nav-link pdm-open-trans-modal" href="javascript:void(0);" role="button">
                <i class="fas fa-coins fa-fw"></i>
            </a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo Utils::getUserName();?></span>
                <img class="img-profile rounded-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/images/user-profile.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo $this->createUrl('/account/create');?>">
                    <i class="fas fa-folder fa-sm fa-fw mr-2 text-gray-400"></i>
                    New Account
                </a>
                <a class="dropdown-item" href="<?php echo $this->createUrl('/insights/');?>">
                    <i class="fas fa-chart-area fa-sm fa-fw mr-2 text-gray-400"></i>
                    View Insights
                </a>
                <a class="dropdown-item" href="<?php echo $this->createUrl('/settings/');?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="<?php echo $this->createUrl('/settings/updates');?>">
                    <i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>
                    Check for updates
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo Utils::createUrl('/site/logout');?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
