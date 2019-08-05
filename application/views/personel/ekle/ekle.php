<?php echo validation_errors();?>
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BLANK PAGE PORTLET-->
        <div class="widget green span6 offset3">
            <div class="widget-title">
                <h4><i class="icon-edit"></i> Üye Ekleme </h4>
                <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
            </div>
            <div class="widget-body form">
                <!-- BEGIN FORM-->
                <form class="cmxform form-horizontal" id="signupForm" method="post" action="<?php echo base_url("Personel/Add");?>">
                    <div class="control-group ">
                        <label for="firstname" class="control-label">Kullanıcı Adı</label>
                        <div class="controls">
                            <input class="span10" id="firstname" name="KullaniciAdi" type="text" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="email" class="control-label">Email</label>
                        <div class="controls">
                            <input class="span10 " id="email" name="Mail" type="email" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="lastname" class="control-label">İsim</label>
                        <div class="controls">
                            <input class="span10 " id="lastname" name="Ad" type="text" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="username" class="control-label">Soyisim</label>
                        <div class="controls">
                            <input class="span10 " id="username" name="Soyad" type="text" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="password" class="control-label">Şifre</label>
                        <div class="controls">
                            <input class="span10 " id="password" name="Sifre" type="password" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="confirm_password" class="control-label">Şifreyi Onayla</label>
                        <div class="controls">
                            <input class="span10 " id="confirm_password" name="SifreTekrar" type="password" />
                        </div>
                    </div>

                    <div class="control-group ">
                        <div class="span6">
                        <label for="agree" class="control-label">Agree to Our Policy</label>
                        <div class="controls">
                            <input  type="checkbox" class="checkbox" id="agree" name="agree" />
                        </div>
                        </div>
                        <div class="span6">
                        <label for="newsletter" class="control-label">Receive the Newsletter</label>
                        <div class="controls">
                            <input  type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
                        </div>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn" type="button">Cancel</button>
                    </div>

                </form>
                <!-- END FORM-->
            </div>
        </div>

        <!-- END BLANK PAGE PORTLET-->
    </div>
</div>

<!-- END PAGE CONTENT-->

<script src="js/form-validation-script.js"></script>