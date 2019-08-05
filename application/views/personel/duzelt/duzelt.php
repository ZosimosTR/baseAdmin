<?php echo validation_errors();?>
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BLANK PAGE PORTLET-->
        <div class="widget green span6 offset3">
            <div class="widget-title">
                <h4><i class="icon-edit"></i> Üye Düzenleme </h4>
                <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
            </div>
            <div class="widget-body form">
                <!-- BEGIN FORM-->
                <form class="cmxform form-horizontal" id="signupForm" method="post" action="<?php echo base_url("Personel/Guncelle/$personel->Id");?>">
                    <div class="control-group ">
                        <label for="firstname" class="control-label">Kullanıcı Adı</label>
                        <div class="controls">
                            <input class="span10" id="firstname" name="KullaniciAdi" type="text" value="<?php echo $personel->KullaniciAdi;?>"/>
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="email" class="control-label">Email</label>
                        <div class="controls">
                            <input class="span10 " id="email" name="Mail" type="email" value="<?php echo $personel->Mail;?>" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="lastname" class="control-label">İsim</label>
                        <div class="controls">
                            <input class="span10 " id="lastname" name="Ad" type="text" value="<?php echo $personel->Ad;?>" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="username" class="control-label">Soyisim</label>
                        <div class="controls">
                            <input class="span10 " id="username" name="Soyad" type="text" value="<?php echo $personel->Soyad;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Görev Seçiniz</label>
                        <div class="controls">
                            <select class="span6 " data-placeholder="Görev Seçiniz" name="Rutbe">
                                <option value="">Seçiniz...</option>
                                <option value="0" <?php echo $personel->Rutbe==0?"selected":"";?>>Kullanıcı</option>
                                <option value="1" <?php echo $personel->Rutbe==1?"selected":"";?>>Editör</option>
                                <option value="2" <?php echo $personel->Rutbe==2?"selected":"";?>>Moderasyon</option>
                                <option value="3" <?php echo $personel->Rutbe==3?"selected":"";?>>Yönetici</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group span6">
                        <label for="agree" class="control-label">Şifre "Tc1923" Olsun mu?</label>
                        <div class="controls">
                            <input  type="checkbox" class="checkbox" id="agree" name="Sifre" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="agree" class="control-label">Aktif ?</label>
                        <div class="controls">
                            <input  type="checkbox" class="checkbox" id="agree" name="Aktif" checked="checked" />
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-success" type="submit">Kaydet</button>
                        <button type="button" class="btn btn-default" onclick="window.history.back();">İptal
                        </button>
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