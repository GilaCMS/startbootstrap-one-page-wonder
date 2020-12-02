<!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="copyright footer-text m-0 text-center text-white small">
        <?=Config::option('theme.footer-text','Copyright &copy; Your Website '.date('Y'));?>
        <span style="float:right"><a href="http://gilacms.com" target="_blank">Gila CMS</a></span>
      </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <?=View::script('themes/one-page-wonder/vendor/jquery/jquery.min.js')?>
  <?=View::script('themes/one-page-wonder/vendor/bootstrap/js/bootstrap.bundle.min.js')?>

</body>

</html>