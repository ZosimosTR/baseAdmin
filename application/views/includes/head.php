<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php
if($this->session->has_userdata("oturum",'login') != TRUE)
{
    msg('Önce Giriş Yapmalısınız','Login','danger','solid');
}
?>
<head>
   <meta charset="utf-8" />
   <title>Metro Lab</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <?php 
    $this->load->view('includes/include_style');
     ?>
   
</head>


