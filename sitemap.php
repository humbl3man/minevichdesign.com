<?php
$page = "sitemap";
$page_title = "sitemap";
  if ($_SERVER['SERVER_NAME'] === 'localhost') {
      require_once("../config.php");
  }
  else {
      require_once("config.php");
  }
  include ROOT . '_inc/header.php';
?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <ul>
          <li><a href="http://minevichdesign.com/" title="home page">Home</a></li>
          <li><a href="http://minevichdesign.com/about/" title="about page">About</a></li>
          <li><a href="http://minevichdesign.com/services/" title="services page">Services</a></li>
          <li><a href="http://minevichdesign.com/portfolio" title="portfolio page">Portfolio</a></li>
          <li><a href="http://minevichdesign.com/contact" title="contact page">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php
  include ROOT . '_inc/footer.php';
?>
