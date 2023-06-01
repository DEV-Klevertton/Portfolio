<?php 

$url = $_SERVER['REQUEST_URI'];

?>
<div id="sidebar" class="sidebar">
    <a class="exemplo d-flex align-items-center" data-bs-toggle="dropdown">
        <div class="avatar me-3">
            <img src="assets/images/user_01.png" class="rounded-circle" alt="image">
        </div>
        <div>
            <div class="fw-bold">Klevertton
            <i class="bi bi-caret-down-fill"></i>
            </div>
            <small class="text-muted">Developer</small>
            <!-- <small class="text-muted">Last login: 20:00</small> -->
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <a href="<?= $url ?>/users/edit.php" class="dropdown-item d-flex align-items-center">
            <i class="bi bi-person dropdown-item-icon"></i> Basic Information
        </a>
        <a href="<?= $url ?>/users/resume.php" class="dropdown-item d-flex align-items-center">
            <i class="bi bi-bar-chart-steps dropdown-item-icon"></i> Dashboard
        </a>
        <a href="docs/TaskTrackerProcessEN.pdf" class="dropdown-item d-flex align-items-center" target="_blank">
            <i class="bi bi-info-circle dropdown-item-icon"></i> Task Tracker Process EN
        </a>
        <a href="docs/TaskTrackerProcessPT.pdf" class="dropdown-item d-flex align-items-center" target="_blank">
            <i class="bi bi-info-circle dropdown-item-icon"></i> Task Tracker Process PT
        </a>
        <a href="<?= $url ?>/auth/logout.php" class="dropdown-item d-flex align-items-center text-danger">
            <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
        </a>
    </div>

    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">To do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">In progress</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Done</a>
      </li>
    </ul>
</div>





<script>
    function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
    }
</script>