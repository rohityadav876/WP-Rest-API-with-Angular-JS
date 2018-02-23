

      <footer class="content-region-3 footer pb40 pt30">
        <div class="container">
          <div class=" row">
            <div class="col-lg-4">
                
                <?php if(is_active_sidebar('footer-1')):?>
                    <?php dynamic_sidebar('footer-1')?>
                <?php endif;?>
            </div>
            <div class="col-lg-4">
               <?php if(is_active_sidebar('footer-2')):?>
                    <?php dynamic_sidebar('footer-2')?>
                <?php endif;?>
            </div>
            <div class="col-lg-4">
               <?php if(is_active_sidebar('footer-3')):?>
                    <?php dynamic_sidebar('footer-3')?>
                <?php endif;?>
            </div>
          </div>
        </div>
      </footer>
      <?php wp_footer()?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.js"></script>
  </body>
</html>
