<?php 
	$page = "services";
	$page_title = "Services";
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        require_once("../../config.php");
    } else {
        require_once("../config.php");
    }
	include ROOT . "_inc/header.php";
?>
        <div class="section">
            <div class="container">
                    <p>I offer web design/development services in Greater Los Angeles, but I can also work remotely. If your site needs a complete overhaul or you need a website to better reach out to your customers, I am the man for the job. <strong>Use contact info/form below to get in touch with me and discuss pricing.</strong></p>

                <div class="row">
                    <div class="col-4">
                        <h3 class="heading">Website Design</h3>
                        <p>UX/UI is one of the most importants parts of a website or app. Before I even start coding, I do wireframes(sketches) of a website to work on the most critical parts first before adding any new features.</p>
                    </div>
                    <div class="col-4">
                        <h3 class="heading">Development</h3>
                        <p>HTML,CSS,JavaScript are my strongest skills when developing engaging and interactive websites. I can code from scratch or use a framework depending on your needs as a client.</p>
                    </div>
                    <div class="col-4">
                        <h3 class="heading">Testing &amp; Optimization</h3>
                        <p>My work is not over until your website is properly tested and optimized for different browsers and platforms. Good performance is a crucial part of any website.</p>
                    </div>
                </div>

            </div>
        </div>
<?php include ROOT . "_inc/footer.php" ?>