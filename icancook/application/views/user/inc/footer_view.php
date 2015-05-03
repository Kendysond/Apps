
        <footer class="main-footer">
            <!-- Footer widgets -->
           <!--  <div class="big-footer">
                <div class="paralax paralax-content paralax-background" data-stellar-background-ratio="0.1">
                    <div class="container">

                        <div class="logo aligncenter margin-top-80">
                            <div class="identity relative">
                                <a rel="home" title="home" href="index.html">
                                    <img alt="Downtown theme logo" src="<?= base_url(); ?>assets/images/downtown-white-logo.png" />
                                </a>
                            </div>
                        </div>
                        <div class="socials center-me margin-top-60">
                            <ul class="clean-list social-links clearfix">
                                <li class="i-facebook"><a title="facebook" target="_blank" href="https://www.facebook.com/TeslaThemes"><i class="facebook"></i></a></li>
                                <li class="i-twitter"><a title="twitter" target="_blank" href="https://twitter.com/teslathemes"><i class="twitter"></i></a></li>
                                <li class="i-pinterest"><a title="pinterest" target="_blank" href="http://www.pinterest.com/teslathemes/"><i class="pinterest"></i></a></li>
                                <li class="i-gplus"><a title="gplus" target="_blank" href="https://plus.google.com/u/0/103868954833393210572/"><i class="gplus"></i></a></li>
                                <li class="i-instagram"><a title="instagram" target="_blank" href="#"><i class="instagram"></i></a></li>
                                <li class="i-dribbble"><a title="dribbble" target="_blank" href="http://dribbble.com/TeslaThemes"><i class="dribbble"></i></a></li>
                                <li class="i-vimeo"><a title="vimeo" href="#" target="_blank"><i class="vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.container -->
           <!--  </div> -->  <!-- /.big-footer -->
            <!-- Copyright section -->
            <div class="small-footer">
               <div class="copyright background-blue">
                    <p class="aligncenter no-margin">Copyright &copy; 2014 Kendyson.  <a href="http://kendyson.com/" target="_blank">Developed By Kendyson</a> |  <a href="http://kendyson.com/icancook/changelog" target="_blank">Changelog</a></p>
                </div>
            </div><!-- / small footer -->
        </footer><!-- /.main-footer -->
    </div>
    
    <!-- Scripts 
    <script src="<?= base_url(); ?>assets/js/plugins.js"></script> 
    <script src="<?= base_url(); ?>assets/js/options.js"></script>  -->
</body>
</html>
<script type="text/javascript">
   var mylist = $('#lga');
   var listitems = mylist.children().get();
   listitems.sort(function(a, b) {
    var compA = $(a).text().toUpperCase();
    var compB = $(b).text().toUpperCase();
    return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
 })
 $.each(listitems, function(idx, itm) { mylist.append(itm); });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61899932-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=831836953514766";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>