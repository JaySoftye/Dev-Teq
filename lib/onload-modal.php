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
  <div class="modal-content">

    <a href="#load-modal-load" class="close-icon" data-toggle="collapse" aria-expanded="false" aria-controls="load-modal-load"><img src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-6 hidesmall">
          <h1 style="color: black;">Future Engineer?</h1>
        </div>
        <div class="col-lg-6 flex-md-middle">
          <h3><img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-logo-white_400px.png" alt="iBlocks" /></h3>
          <h2 class="white"><strong>Learning Redesigned.</strong></h2>
          <h6 class="white">Classroom environments are shifting towards learning experiences that are personalized, adaptive, hands-on, and collaborative. Schools that need a partner to help design curriculum to enrich student learning, and enable students to explore and invent, now have iBlocks.</h6>
          <h6><a href="/iblocks/"><button class="salmon hideItem">Learn more</button></a></h6>
        </div>
      </div>
    </div>

  </div>
</div>
