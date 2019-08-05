<?php $this->load->view('includes/head');?>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php $this->load->view('includes/header');?>
   <!-- END HEADER -->

   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">

      <!-- BEGIN SIDEBAR -->

        <?php $this->load->view('includes/leftPanel');?>
      
      <!-- END SIDEBAR -->
      
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">

<!-- ######SAYFANIN DEĞİŞEN İÇERİĞİ###### -->  

            <!-- BEGIN PAGE HEADER-->   
            <?php $this->load->view('personel/breadcrumbs');?>
            <!-- END PAGE HEADER-->


            <!-- BEGIN PAGE CONTENT-->
         
                     <?php $this->load->view('personel/liste/liste');?>
                     
                  
            
            <!-- ######SAYFANIN DEĞİŞEN İÇERİĞİ###### --> 

            
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?php 

    $this->load->view('includes/footer');
    $this->load->view('personel/pageScript');
 ?>

</body>
<!-- END BODY -->
</html>