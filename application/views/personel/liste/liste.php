<a href="<?php echo base_url("Personel/YeniPersonel"); ?>" class="btn btn-success"><i class="icon-plus"></i> Yeni Ekle</a>
<br><br>
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
                     <div class="span12">
                     <!-- BEGIN BLANK PAGE PORTLET-->
<div class="widget red">
    <div class="widget-title">
                             <h4><i class="icon-edit"></i> Personel Listesi </h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
        </div>
        <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th>Kullanıcı Adı</th>
                                <th class="hidden-phone">E-Posta</th>
                                <th class="hidden-phone">Ad</th>
                                <th class="hidden-phone">Soyad</th>
                                <th class="hidden-phone">Kayıt Tarihi</th>
                                <th class="hidden-phone">Aktif</th>
                                <th class="hidden-phone">Rütbe</th>
                                <th class="hidden-phone">Yönetim</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($personeller as $personel) { ?>

                            <tr class="odd gradeX">
                                <td><?php echo $personel->KullaniciAdi;?></td>
                                <td><?php echo $personel->Mail;?></td>
                                <td><?php echo $personel->Ad;?></td>
                                <td><?php echo $personel->Soyad;?></td>
                                <td><?php echo $personel->Tarih;?></td>
                                <td>
                                    <?php echo($personel->Aktif == 1) ?
                                        "<button type=\"button\" class=\"btn btn-success\" name='Aktif' onclick=isActiveProduct(0,".$personel->Id.");>Aktif</button>" :
                                        "<button type=\"button\" class=\"btn btn-danger\" name='Pasif' onclick=isActiveProduct(1,".$personel->Id.");>Pasif</button>";  ?>
                                </td>
                                <td><?php echo $personel->Rutbe;?></td>
                                <td class="hidden-phone"> <a href="<?php echo base_url("Personel/Duzelt/$personel->Id");?>" class="btn btn-xs btn-circle btn-primary">
                                        <i class="icon-pencil"></i>
                                    </a>
                                <a dataURL="<?php echo base_url("Personel/Sil/$personel->Id");?>" class="btn btn-xs btn-circle btn-danger btnSil">
                                    <i class="icon-trash"></i>
                                </a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
        </div>
</div>
                       <!-- END BLANK PAGE PORTLET-->
                 </div>
             </div>

            <!-- END PAGE CONTENT-->
