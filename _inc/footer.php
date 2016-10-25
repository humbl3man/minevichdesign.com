
</div> <!-- end .content-wrapper -->
<?php if ($page != 'home') { ?>
<div id="main-footer">
    <div id="inner-footer" class="rel">
        <ul class="footer-nav">
            <li class="foot-nav-item"><a href="<?php echo BASE_URL; ?>" class="footer-link">Home</a></li>
            <li class="foot-nav-item"><a href="<?php echo BASE_URL; ?>about/" class="footer-link">About</a></li>
            <li class="foot-nav-item"><a href="<?php echo BASE_URL; ?>services/" class="footer-link">Services</a></li>
            <li class="foot-nav-item"><a href="<?php echo BASE_URL; ?>portfolio/" class="footer-link">Portfolio</a></li>
        </ul>
        <ul class="list-inline social">
            <li class="foot-nav-item"><a href="https://www.twitter.com/@humbl3man" title="@humbl3man twitter" class="social-link"><img src="<?php echo BASE_URL; ?>img/icons/twitter.png" height="32" width="32" alt="My twitter."></a></li>
            <li class="foot-nav-item"><a href="https://www.linkedin.com/pub/konstantin-minevich/14/85a/76" title="My Linkedin profile" class="social-link"><img src="<?php echo BASE_URL; ?>img/icons/linkedin.png" alt="My Linkedin profile."></a></li>
            <li class="foot-nav-item"><a href="https://github.com/humbl3man" title="Github" class="social-link"><img src="<?php echo BASE_URL; ?>img/icons/github.png" alt="My github repositories."></a></li>
        </ul>
    </div>
</div>
<?php } ?>
<a class="hidden" href="<?php echo BASE_URL;?>/sitemap.html">Sitemap</a>
<!-- Site JavasScript -->
<script src="<?php echo BASE_URL; ?>js/vendor/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>js/vendor/jquery.validate.js"></script>
<script src="<?php echo BASE_URL; ?>js/app.min.js"></script>
</body>
</html>
