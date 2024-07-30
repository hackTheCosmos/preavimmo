<?php

use Dompdf\Dompdf;
use Dompdf\Options;

class ModeleController {
    public static function getEtape1() {
        if(isset($_POST['stage1'])) {
            $_SESSION["deadLine"] = $_POST['housingType'];
            
            header("Location:index.php?page=modele&etape=2");
            die;
         
        }

       
        $title = "PréavImmo - &Eacute;tape 1";
        
        Renderer::render("Views/stages/stage1.php", [
            "title" => $title
        ]);
    }

    public static function getEtape2() {
         
        if(isset($_POST['stage2'])) {
            if(
                isset($_POST['tenantFirstname']) && !empty(trim($_POST['tenantFirstname']))
                && isset($_POST['tenantLastname']) && !empty(trim($_POST['tenantLastname']))
                && isset($_POST['tenantAddress']) && !empty(trim($_POST['tenantAddress']))
                && isset($_POST['tenantPostalCode']) && !empty(trim($_POST['tenantPostalCode']))
                && isset($_POST['tenantCity']) && !empty(trim($_POST['tenantCity']))
            ) {
                $_SESSION["tenantFirstname"] = trim($_POST['tenantFirstname']);
                $_SESSION["tenantLastname"] = trim($_POST['tenantLastname']);
                $_SESSION["tenantAddress"] = trim($_POST['tenantAddress']);
                $_SESSION["tenantPostalCode"] = trim($_POST['tenantPostalCode']);
                $_SESSION["tenantCity"] = trim($_POST['tenantCity']);
                
                header("Location:index.php?page=modele&etape=3");
                die;
            }
        }

       
        $title = "PréavImmo - &Eacute;tape 2";
        
        Renderer::render("Views/stages/stage2.php", [
            "title" => $title
        ]);
    }

    public static function getEtape3() {
        if(isset($_POST['stage3'])) {
            if(
                isset($_POST['recipientGender'])
                && isset($_POST['recipientFirstname']) && !empty(trim($_POST['recipientFirstname']))
                && isset($_POST['recipientLaststname']) && !empty(trim($_POST['recipientLaststname']))
                && isset($_POST['recipientAddress']) && !empty(trim($_POST['recipientAddress']))
                && isset($_POST['recipientPostalCode']) && !empty(trim($_POST['recipientPostalCode']))
                && isset($_POST['recipientCity']) && !empty(trim($_POST['recipientCity']))
            ) {
                if($_POST['recipientGender'] == 0) {
                    $_SESSION["recipientGender"] = "Madame";
                } else if ($_POST['recipientGender'] == 1) {
                    $_SESSION["recipientGender"] = "Monsieur";
                }
              
                $_SESSION["recipientFirstname"] = trim($_POST['recipientFirstname']);
                $_SESSION["recipientLaststname"] = trim($_POST['recipientLaststname']);
                $_SESSION["recipientAddress"] = trim($_POST['recipientAddress']);
                $_SESSION["recipientPostalCode"] = trim($_POST['recipientPostalCode']);
                $_SESSION["recipientCity"] = trim($_POST['recipientCity']);
                
                header("Location:index.php?page=modele&etape=4");
                die;
            }
        }

       
        $title = "PréavImmo - &Eacute;tape 3";
        
        Renderer::render("Views/stages/stage3.php", [
            "title" => $title
        ]);
    }

    public static function getEtape4() {
        if(isset($_POST['stage4'])) {
            if(
                isset($_POST['housingAddress']) && !empty(trim($_POST['housingAddress']))
                && isset($_POST['housingPostalCode']) && !empty(trim($_POST['housingPostalCode']))
                && isset($_POST['housingCity']) && !empty(trim($_POST['housingCity']))
            ) {
                $_SESSION["housingAddress"] = trim($_POST['housingAddress']);
                $_SESSION["housingPostalCode"] = trim($_POST['housingPostalCode']);
                $_SESSION["housingCity"] = trim($_POST['housingCity']);
                
                //génération du pdf
                ob_start();
                require_once 'Pdf/preavisPdf.php';
                $html = ob_get_contents();
                ob_end_clean();

                require_once 'Includes/dompdf/autoload.inc.php';

                $options = new Options();
                $options->set('defaultFont', 'Courier');

                $dompdf =  new Dompdf($options);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();

                $fichier = "preavis.pdf";
                $dompdf->stream($fichier);

                // header("Location:index.php?page=modele&etape=4");
                // die;
            }
        }

       
        $title = "PréavImmo - &Eacute;tape 4";
        
        Renderer::render("Views/stages/stage4.php", [
            "title" => $title
        ]);
    }

}