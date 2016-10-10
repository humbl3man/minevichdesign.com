<?php
    $page = "about";
    $page_title = "About";
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        require_once('../../config.php');
    } else {
        require_once('../config.php');
    }
    include ROOT . '_inc/header.php';
?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    
                    <div class="row">
                        <div class="col-3">
                            <img src="<?php echo BASE_URL; ?>img/me.jpg" class="profile-illustration pull-left" alt="Stan Minevich" />
                        </div>
                        <div class="col-9">
                            <h2 class="heading">Short Bio</h2>
                            <p>My name is Konstantin Minevich. I am a <strong>Front end/UX/UI developer</strong>. I have command over <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>JavaScript</strong>, and JavaScript popular library - <strong>jQuery</strong>. I am very passionate about web technology and excited to learn new things every day. It is a fascinating feeling when creating something beautiful.
                                <br>I live in sunny Los Angeles. I love my wife, my family, and good food. </p>
                        </div>
                    </div>

                    <h2 class='heading'>Current Projects</h2>
                    <p>I have had a privilege working with great companies. Currently I am working with a startup company and it has been a very exciting experience.</p>
                    <h2 class='heading'>Side Projects</h2>
                    <p>When I am not working on a project, I do a lot of demo coding online or my computer. This gives me a chance to be creative and practice newly learned skills. Most of my HTML,CSS and JavaScript can be seen on my <a href="http://codepen.io/humbl3man">Codepen page</a></p>
                    <h2 class='heading'>Future Plans</h2>
                    <p>My next step is to take my front end development skills to the next level. I want to master JavaScript and CSS. Get comfortable with JS frameworks like AngularJS. Next, I want to transition to a full-stack web developer and learn Ruby and/or PHP. Then I want to become an iOS developer. Next...well, technologies change often...so, who knows?</p>
                </div>
                <div class="col-4 callout t-center">
                    <h3>Skilled in:</h3>
                    <ul>
                        <li class="wrp wrp--blue">CSS</li>
                        <li class="wrp wrp--blue">HTML</li>
                        <li class="wrp wrp--blue">JS</li>
                        <li class="wrp wrp--blue">PHP</li>
                        <li class="wrp wrp--red">Photoshop</li>
                        <li class="wrp wrp--red">Illustrator</li>
                    </ul>
                    <h3>Know my way around:</h3>
                    <ul>
                        <li class="wrp wrp--dark">Angular</li>
                        <li class="wrp wrp--dark">SASS</li>
                        <li class="wrp wrp--dark">SQL</li>
                    </ul>
                    <a href="http://referrals.trhou.se/konstantinminevich" target="_blank"><img src="https://static.teamtreehouse.com/assets/content/referral-badge-grn.png"/></a>
                </div>
            </div>
        </div>
    </div>




    <?php
    include ROOT . '_inc/footer.php';
?>