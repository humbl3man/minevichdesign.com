<?php 
	$page = "contact";
	$page_title = "Contact";
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        require_once("../../config.php");    
    }
    else {
        require_once("../config.php");
    }
    include ROOT . "_inc/header.php";
?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <form action="<?php echo BASE_URL; ?>process/send_email.php" method="POST" id="contact-form" class="frm animated fadeIn">
                        <h1 class="t-left frm-heading">Let's get in touch.</h1>
                        <div class="form-block" id="name-input">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name...">
                            <div class="invalid"></div>
                        </div>
                        <div class="form-block" id="email-input">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email...">
                            <div class="invalid"></div>
                        </div>
                        <div class="form-block">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="8" placeholder="Message..."></textarea>
                            <div class="invalid"></div>
                            <button type="submit" class="frm-submit-btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php include ROOT . "_inc/footer.php" ?>