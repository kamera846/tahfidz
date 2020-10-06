<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html>
<?php echo $__env->make('component.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
  <!-- Sidenav -->
  <?php echo $__env->make('component.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php echo $__env->make('component.navbar.navbar_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Page content -->
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <?php echo $__env->make('component.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
