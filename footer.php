<?php wp_footer(); ?>



<div class="contact-area" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="contact-content text-center">
                                <a href="#"><?php echo get_custom_logo();?></a>
                                <p><?php echo get_bloginfo('description');?></p>
                                <div class="hr"></div>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'menu' => 'footer',
                                            'container' => '',
                                            'theme_location' => 'footer'
                                        )
                                    );
                                ?>
                                
                                <div class="contact-social">
                                    <ul>
                                        <li><a class="hover-target" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="hover-target" href="http://linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a class="hover-target" href="http://github.com"><i class="fab fa-github"></i></a></li>
                                        <li><a class="hover-target" href="http://pintrest.com"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =============== 1.9 Contact Area End ====================-->
            <!-- =============== 1.9 Footer Area Start ====================-->
            <footer id="foot">
                <p>Copyright &copy; 2020 All Rights Reserved. Developed by <a href="http://nullpointerexception.space"> Sushino </a> under <a href="http://creativecommons.org/licenses/by-sa/4.0/"> CC </a></p>
            </footer>
            <script>
      $('.nav-toggle').on('click', function() {
        $(this).toggleClass('open');
        $('.menu-left').toggleClass('collapse');
      });
      // REMOVE X & COLLAPSE NAV ON ON CLICK
      $('.menu-left a').on('click', function() {
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
      });

      </script>

      <script>
      function searchToggle(obj, evt){
          var container = $(obj).closest('.search-wrapper');
              if(!container.hasClass('active')){
                  container.addClass('active');
                  evt.preventDefault();
              }
              else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                  container.removeClass('active');
                  // clear input
                  container.find('.search-input').val('');
              }
      }
      </script>
  <script defer src="<?php echo get_template_directory_uri();?>/faws/js/all.js"></script> <!--load all styles -->
</body>
</html>