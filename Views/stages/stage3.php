<div class="secondStagePage__wrapper">
    <a href="index.php?page=modele&etape=2" class ="previousButton"><i class="fa-solid fa-arrow-left-long"></i></a> 
    <div class="item">
        <p class="stageNumber">&Eacute;tape 3 / 4</p>
        
        <p>Indiquez les informations concernant le destinataire de la lettre</p>
        
        
    </div>   

    <div class="item">    
        <form method="post" class = "form">
        <div class="inputs__wrapper genders">
                <div class="input__wrapper gender">
                    <input type="radio" id="recipientGender1" name="recipientGender" value="0" 
                    <?php
                        if(isset($_SESSION['recipientGender'])): 
                            if($_SESSION['recipientGender'] == "Madame"):
                                echo "checked";
                            endif;
                        else : echo "checked";
                        endif;
                    ?>
                    >
                    <label for="recipientGender1">Madame</label>
                </div>
                <div class="input__wrapper gender">
                    <input type="radio" id="recipientGender2" name="recipientGender" value="1"
                    <?php
                        if(isset($_SESSION['recipientGender'])): 
                            if($_SESSION['recipientGender'] == "Monsieur"):
                                echo "checked";
                            endif;
                        endif;
                    ?>
                    >
                    <label for="housingType2">Monsieur</label>
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="recipientFirstname">Prénom du destinataire</label>
                    <input type="text" id="recipientFirstname" name="recipientFirstname" 
                    <?php
                        if(isset($_SESSION['recipientFirstname'])):?>
                            value="<?= $_SESSION['recipientFirstname']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
                <div class="input__wrapper">
                    <label for="recipientLaststname">Nom du destinataire</label>
                    <input type="text" id="recipientLaststname" name="recipientLaststname"
                    <?php
                        if(isset($_SESSION['recipientLaststname'])):?>
                            value="<?= $_SESSION['recipientLaststname']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="recipientAddress">Adresse du destinataire</label>
                    <input type="text" id="recipientAddress" name="recipientAddress"
                    <?php
                        if(isset($_SESSION['recipientAddress'])):?>
                            value="<?= $_SESSION['recipientAddress']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="recipientPostalCode">Code postal du destinataire</label>
                    <input type="text" id="recipientPostalCode" name="recipientPostalCode"
                    <?php
                        if(isset($_SESSION['recipientPostalCode'])):?>
                            value="<?= $_SESSION['recipientPostalCode']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
                <div class="input__wrapper">
                    <label for="recipientCity">Ville du destinataire</label>
                    <input type="text" id="recipientCity" name="recipientCity"
                    <?php
                        if(isset($_SESSION['recipientCity'])):?>
                            value="<?= $_SESSION['recipientCity']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
    </div>
            <button type="submit" name="stage3" class="button submitButton active">Suivant</button>
        </form>
</div>

<script src="Public/scripts/stage3.js"></script>