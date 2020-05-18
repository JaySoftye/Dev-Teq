<script type="text/javascript">
$(document).ready(function(){
    $(window).on('load',function(){
      $('#load-modal-load').modal('show');
    });
    $('a.close-icon').click(function() {
      $('.modal-backdrop.in').hide();
      $('.modal').hide();
      $('body').removeClass('modal-open');
    });
  });
</script>


<div class="modal hide fade" id="load-modal-load">
  <div class="modal-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/nyscate-home-header-bg.jpg');">

    <a href="#load-modal-load" class="close-icon" data-toggle="collapse" aria-expanded="false" aria-controls="load-modal-load"><img src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
    <div class="modal-body">
      <div class="row">
        <div class="col-md flex-md-middle">
          <h2 class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/nyscate-navigating-the-future-icon_11-2018.png" alt="NYSCATE 2018 Conference Navigating the Future" /></h2>
          <h1 class="white text-center"><strong>Ahoy, matey!</strong></h2>
          <h3 class="white text-center">Ready for the plunge into STEM? Visit us at booth 407/409<br />to learn how to bring STEM learning to life!</h6>
          <h4 class="white text-center"><a href="https://nyscate.teq.com/"><button class="salmon hideItem">Let's Schedule Some Talk Time</button></a></h6>
        </div>
      </div>
    </div>

  </div>
</div>
