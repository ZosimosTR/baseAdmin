<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IMULGER.
 * Coder: Murat
 * Date: 2.08.2019
 * Time: 17:58
 */

function msg($mesaj, $yonlendirme = NULL, $renk='info',$tip = NULL, $flashName='msg')
{
    $cikti =
        '<div class="alert alert-' . $tip . ' alert-' . $renk . '" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong>Uyarı!</strong> ' . $mesaj . '
          </div>';

    get_instance()->session->set_flashdata($flashName, $cikti);

    if ($yonlendirme != NULL) redirect(base_url($yonlendirme));
}