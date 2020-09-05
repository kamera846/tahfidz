  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header align-items-center mt-4">
        <a href="/">
          <img src="<?php echo e(asset('argon/assets/img/brand/logo.png')); ?>" height="80" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <?php if($user->level == 'admin'): ?>
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="fas fa-users text-orange"></i>
                <span class="nav-link-text">Wali Santri</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/manage/santri">
                <i class="ni ni-chart-bar-32 text-primary"></i>
                <span class="nav-link-text">Santri</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="fas fa-quran text-green"></i>
                <span class="nav-link-text">Murojaah</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-purple"></i>
                <span class="nav-link-text">Juz</span>
              </a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-money-coins text-yellow"></i>
                <span class="nav-link-text">SPP</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="/manage/santri">
                <i class="ni ni-archive-2 text-yellow"></i>
                <span class="nav-link-text">Santri</span>
              </a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="/register/user">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register User</span>
              </a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li> -->
            <?php endif; ?>
          </ul>
          
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="/logout">
                <i class="ni ni-user-run"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>