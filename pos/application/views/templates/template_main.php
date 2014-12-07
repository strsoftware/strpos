<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>STRATTON-POS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/uniform.css" /><!-- tables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2.css" /><!-- tables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/maruti-style.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/maruti-media.css" class="skin-color" />



  


</head>
<body>

  <!-- HEADER BEGIN -->
  <?php $this->load->view($header)?>

  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!-- HEADER END -->


  <!-- NAV MENU BEGIN -->
  <?php $this->load->view($menu)?>
  <!-- NAV MENU END -->

  
  <!-- CONTENT BEGIN -->
  <?php $this->load->view($vista)?>
  <!-- CONTENT END -->


  <!-- FOOTER BEGIN -->
  <?php $this->load->view($footer)?>
  <!-- FOOTER END -->

  <script src="<?php echo base_url()?>assets/js/excanvas.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.ui.custom.js"></script> 
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.flot.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.flot.resize.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.peity.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/fullcalendar.min.js"></script> 
  <script src="<?php echo base_url()?>assets/js/jquery.uniform.js"></script> <!-- TABLES -->
  <script src="<?php echo base_url()?>assets/js/select2.min.js"></script> <!-- TABLES -->
  <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script> <!-- TABLES -->
  <script src="<?php echo base_url()?>assets/js/maruti.js"></script>
  <script src="<?php echo base_url()?>assets/js/maruti.tables.js"></script><!-- TABLES -->
  <script src="<?php echo base_url()?>assets/js/maruti.dashboard.js"></script> 
  <script src="<?php echo base_url()?>assets/js/maruti.chat.js"></script>




  

  <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {
      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

  // resets the menu selection upon entry to this page:
  function resetMenu() {
     document.gomenu.selector.selectedIndex = 2;
  }
  </script>
</body>
</html>
