<footer>
    <div class="footer-top">
        <div class="container">
            <div class="contacts py-3">
                <div><i class="fa fa-map-marker" aria-hidden="true"></i>г. Саратов, ул. Брянская, 1</div>
                <div><i class="fa fa-phone" aria-hidden="true"></i><span>Тел.: <a href="">(8452) 47-30-60</a></span></div>
                <div><i class="fa fa-envelope-o" aria-hidden="true"></i>uc_sarnpz@mail.ru</div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="py-2">© 2020 Copyright:<a href="#"> Роснефть</a>. Все права защищены.</div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/mdb.min.js"></script>
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/swiper-bundle.min.js"></script>

<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.category-trigger').on('click', function(e) {
            $('.category-nav').toggleClass('show');
            e.stopPropagation();
        })

        var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 3000,
            },
            autoHeight: true,
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: true,
            },
        });
    });
</script>
</body>
</html>