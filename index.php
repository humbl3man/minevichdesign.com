<?php
    $page = "home";
    $page_title = "Home";
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        require_once("../config.php");
    }
    else {
        require_once("config.php");
    }
    include ROOT . '_inc/header.php';
?>

            <div id="jumbotron">
                <div class="container">
                <meta itemscope itemtype="https://schema.org/Person" />
                      <h1 class="jmb--title animated fadeInDown">
                        Konstantin Minevich
                      </h1>
                    <h3 class="jmb--subtitle"><span class="typed-script"></span></h3>
                    <p class="lead">
                        Konstantin is a web designer and front end developer with several years of experience. He has been professionally designing and building websites since 2013. He has a strong knowledge of client side programming (JavaScript) and a proven expertise in HTML5 and CSS3.
                    </p>
                  </div>
            </div>
            <?php include ROOT . "_inc/footer.php";  ?>
