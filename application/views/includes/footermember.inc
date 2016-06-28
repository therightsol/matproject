
<!-- Footer Start -->


<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/jquery.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/bootstrap.min.js"></script>
<script type="text/javascript" src='<?php echo $root."assets/";?>member/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/caroufredsel.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/plugins.js"></script>

<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="<?php echo $root."assets/";?>member/js/theme.js"></script>
<script type="text/javascript" src="<?php echo $root."assets/";?>member/custom/custom.js"></script>

<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="<?php echo $root."assets/";?>member/plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        "use strict";

        // init Isotope
        var $container = $('.isotope').isotope({
            itemSelector: '.gallery-item',
            layoutMode: 'fitRows'
        });


        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $container.isotope('layout');
        });

        // bind filter button click
        $('#filters').on( 'click', 'a', function() {
            var filterValue = $( this ).attr('data-filter');
            $('#filters li').removeClass('active');
            $(this).parent().addClass('active');
            $container.isotope({ filter: filterValue });
        });


    });
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43329142-3']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>
</html>
