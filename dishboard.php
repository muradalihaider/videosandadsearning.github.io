<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Videos & Ads Earning</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="register_acc.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Watch Videos</span>
          </a>
        </li>
        <li>
          <a href="register_acc.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Link Ads</span>
          </a>
        </li>
        <li>
          <a href="deposit.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Deposit Balance</span>
          </a>
        </li>
        <li>
          <a href="register_acc.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Withdraw</span>
          </a>
        </li>
        <li>
          
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div >
          <div >
            <div><h1 style="color:#000066">Videos And Ads Marketing With VAE Earning</h1></div>
            <br>
            <div><h3>We Are Workinh on Different Social Media Platform like Youtube , Facebook <br> Instagram ,
               Twitter , TikTok , Etc</h3></div>
          </div>
            <br>
            <br>
          <div >
            <div><h1 style="color:#000066">Marketing With VAE Earning</h1></div>
            <br>
            <div><h3>VAE Earning Provied Best Platform For You . That Help You To Boost Your <br> bussines 
              and Sales With Right Audience and Make Money Online Easily
            </h3></div>
          </div>
          
         
        <!-- </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          -->


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

