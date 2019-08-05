
<!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url('assets/');?>js/jquery-1.8.3.min.js"></script>
   <script src="<?php echo base_url('assets/');?>js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/');?>assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/');?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="<?php echo base_url('assets/');?>assets/bootstrap/js/bootstrap.min.js"></script>

   

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo base_url('assets/');?>js/excanvas.js"></script>
   <script src="<?php echo base_url('assets/');?>js/respond.js"></script>
   <![endif]-->

   <script src="<?php echo base_url('assets/');?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/');?>js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/');?>assets/chart-master/Chart.js"></script>

   <!--common script for all pages-->
   <script src="<?php echo base_url('assets/');?>js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="<?php echo base_url('assets/');?>js/easy-pie-chart.js"></script>
   <script src="<?php echo base_url('assets/');?>js/sparkline-chart.js"></script>
   <script src="<?php echo base_url('assets/');?>js/home-page-calender.js"></script>
   <script src="<?php echo base_url('assets/');?>js/chartjs.js"></script>

<script src="<?php echo base_url('assets/');?>js/jquery.blockui.js"></script>


<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/');?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo base_url('assets/');?>assets/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url("assets/");?>js/form-component.js"></script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {


        $(".btnSil").click(function () {
            var dataURL=$(this).attr("dataURL");
            var remove=confirm("Silmek İstiyormusunuz?\nDikkat Bu işlem Birden Çok Kaydı Etkileyecektir!","Sil","İptal");
            if (remove==true)
            {
                $.post(dataURL,{},function (response) {
                    if(response){
                        window.location.reload();
                    }

                })
            }


        });

    });

</script>

   
