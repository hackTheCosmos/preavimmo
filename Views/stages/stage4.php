<div class="secondStagePage__wrapper">
    <a href="index.php?page=modele&etape=3" class ="previousButton"><i class="fa-solid fa-arrow-left-long"></i></a> 
    <div class="item">
        <p class="stageNumber">&Eacute;tape 4 / 4</p>
        
        <p>Indiquez l'adresse du logement faisant l'objet du préavis de départ</p>
        
        
    </div>   

    <div class="item">    
        <form method="post" class = "form">
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="housingAddress">Adresse du logement</label>
                    <input type="text" id="housingAddress" name="housingAddress"
                    <?php
                        if(isset($_SESSION['housingAddress'])):?>
                            value="<?= $_SESSION['housingAddress']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="housingPostalCode">Code postal du logement</label>
                    <input type="text" id="housingPostalCode" name="housingPostalCode"
                    <?php
                        if(isset($_SESSION['housingPostalCode'])):?>
                            value="<?= $_SESSION['housingPostalCode']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
                <div class="input__wrapper">
                    <label for="housingCity">Ville du logement</label>
                    <input type="text" id="housingCity" name="housingCity"
                    <?php
                        if(isset($_SESSION['housingCity'])):?>
                            value="<?= $_SESSION['housingCity']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
    </div>
            <button type="submit" name="stage4" class="button submitButton active">Télécharger la lettre</button>
        </form>
</div>

<script src="Public/scripts/stage4.js"></script>