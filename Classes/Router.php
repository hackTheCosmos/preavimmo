<?php

class Router {
    
    public static function route(): void {
        if (isset($_GET['page'])) {
            
            
            // --------------------------------- FRONT OFFICE--------------------------------------------------
            
            //page d'acceuil
            if ($_GET['page'] == "accueil") {
                    IndexController::getIndex();
            }

            //modele
            if($_GET['page'] == "modele") {
                //étape 1
                if($_GET['etape'] == 1) {
                    ModeleController::getEtape1();
                }
                //étape 2
                if($_GET['etape'] == 2) {
                    ModeleController::getEtape2();
                }
                //étape 3
                if($_GET['etape'] == 3) {
                    ModeleController::getEtape3();
                }
                //étape 4
                if($_GET['etape'] == 4) {
                    ModeleController::getEtape4();
                }
            }

            if($_GET['page'] == "cgu") {
                IndexController::getCgu();
            }
            
            
            // -----------------------------------------------------------------------------------------------------------

        } else {
            // Défaut
            IndexController::getIndex();
        }
    }
}
