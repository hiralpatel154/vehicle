<?php
include('../header.php');
?>
<div class="sidebar">
  <div class="logo-details">
    <i class="fa-solid fa-square-parking"></i>
    <span class="logo_name">Parking Management</span>
  </div>
  <hr class="hr-css m-0">
  <div class="logged-in-user">
    <a href="#">
      <img src="../images/user2.jpg" alt="" class="user-img">
      <span class="link-name">Name</span>
    </a>

    <hr class="hr-css m-0">
  </div>
  <ul class="nav-links p-0">
    <li>
      <a href="dashboard.php" class="link-item">
        <i class="fa-solid fa-gauge"></i>
        <span class="link-name">Dashboard</span>
      </a>
      <ul class="sub-menu hidden-link blank">
        <li><a href="dashboard.php" class="link_name"></i>Dashboard</a></li>
      </ul>
    </li>
    <li>
      <a href="booking.php" class="link-item">
        <i class="fa-solid fa-book"></i>
        <span class="link-name">Booking</span>
      </a>
      <ul class="sub-menu hidden-link blank">
        <li><a href="booking.php" class="link_name"></i>Booking</a></li>
      </ul>
    </li>
    <li>
      <div class="icon-link d-flex justify-content-between">
        <a href="#">
          <i class="fa-solid fa-car"></i>
          <span class="link-name">Vehicle</span>
        </a>
        <i class="fa-solid fa-angle-up me-4 arrow"></i>
      </div>
      <ul class="sub-menu">
        <li><a href="#" class="link_name"></i>Vehicle</a></li>
        <li><a href="owner-management.php" class="sub-item"><i class="fa-solid fa-bars-progress"></i>Owner Management Form</a></li>
        <li><a href="category.php" class="sub-item"><i class="fa-solid fa-list-ol"></i>Category</a></li>
        <li><a href="info-management.php" class="sub-item"><i class="fa-solid fa-sitemap"></i>Information Management</a></li>
      </ul>
    </li>
    <li>
      <a href="parking-slot.php" class="link-item">
        <i class="fa-solid fa-check-to-slot"></i>
        <span class="link-name">Parking Slot</span>
      </a>
      <ul class="sub-menu hidden-link blank">
        <li><a href="parking-slot.php" class="link_name"></i>Parking Slot</a></li>
      </ul>
    </li>
    <li>
      <a href="payment.php" class="link-item">
        <i class="fa-solid fa-money-bill"></i>
        <span class="link-name">Payment</span>
      </a>
      <ul class="sub-menu hidden-link blank">
        <li><a href="payment.php" class="link_name"></i>Payment</a></li>
      </ul>
    </li>
    <li>
      <a href="user-management.php" class="link-item">
        <i class="fa-solid fa-users-gear"></i>
        <span class="link-name">User Management</span>
      </a>
      <ul class="sub-menu hidden-link blank">
        <li><a href="user-management.php" class="link_name"></i>User Management</a></li>
      </ul>
    </li>
    <li>
      <div class="icon-link d-flex justify-content-between">
        <a href="user-group.php" class="link-item">
          <i class="fa-solid fa-users"></i>
          <span class="link-name">User Group</span>
        </a>
      </div>
      <ul class="sub-menu hidden-link">
        <li><a href="user-group.php" class="link_name"></i>User Group</a></li>
      </ul>
    </li>
    <li>
      <a href="logout.php" class="link-item">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span class="link-name">Logout</span>
      </a>
    </li>
  </ul>
</div>

<!-- Main Content -->
<section class="home-section">
  <div class="home-content">
    <i class="fa-solid fa-bars menu-bar"></i>
  </div>
  <div class="content-box">
    <div class="title-box d-flex align-items-center justify-content-between">
      <h2>Dashboard</h2>
    </div>
    <div class="card-box d-flex">
      <div class="card booking">
        <div class="card-body">
          <h3 class="card-title fw-bold">150</h3>
          <p class="card-text">Total Booking</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">More Info<i class="fa-solid fa-arrow-right"></i></li>
        </ul>
        <div class="icon-box">
          <i class="fa-solid fa-book"></i>
        </div>
      </div>
      <div class="card parking">
        <div class="card-body">
          <h5 class="card-title">53</h5>
          <p class="card-text">Total Parking Slot</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">More Info<i class="fa-solid fa-arrow-right"></i></li>
        </ul>
        <div class="icon-box">
        <i class="fa-solid fa-check-to-slot"></i>
        </div>
      </div>
      <div class="card vehicle">
        <div class="card-body">
          <h5 class="card-title">150</h5>
          <p class="card-text">Total Booking</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">More Info<i class="fa-solid fa-arrow-right"></i></li>
        </ul>
        <div class="icon-box">
        <i class="fa-solid fa-book"></i>
        </div>
      </div>
      <div class="card owner">
        <div class="card-body">
          <h5 class="card-title">150</h5>
          <p class="card-text">Total Booking</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">More Info<i class="fa-solid fa-arrow-right"></i></li>
        </ul>
        <div class="icon-box">
        <i class="fa-solid fa-book"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('../footer.php');
?>