<div class="secondStagePage__wrapper">
    <a href="index.php?page=modele&etape=1" class ="previousButton"><i class="fa-solid fa-arrow-left-long"></i></a> 
    <div class="item">
        <p class="stageNumber">&Eacute;tape 2 / 4</p>
        
        <p>Indiquez les informations vous concernant</p>
        
        
    </div>   

    <div class="item">    
        <form method="post" class = "form">
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="tenantFirstname">Votre prénom</label>
                    <input type="text" id="tenantFirstname" name="tenantFirstname" 
                    <?php
                        if(isset($_SESSION['tenantFirstname'])):?>
                            value="<?= $_SESSION['tenantFirstname']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
                <div class="input__wrapper">
                    <label for="tenantLastname">Votre nom</label>
                    <input type="text" id="tenantLastname" name="tenantLastname"
                    <?php
                        if(isset($_SESSION['tenantLastname'])):?>
                            value="<?= $_SESSION['tenantLastname']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="tenantAddress">Votre addresse</label>
                    <input type="text" id="tenantAddress" name="tenantAddress"
                    <?php
                        if(isset($_SESSION['tenantAddress'])):?>
                            value="<?= $_SESSION['tenantAddress']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <label for="tenantPostalCode">Votre code postal</label>
                    <input type="text" id="tenantPostalCode" name="tenantPostalCode"
                    <?php
                        if(isset($_SESSION['tenantPostalCode'])):?>
                            value="<?= $_SESSION['tenantPostalCode']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
                <div class="input__wrapper">
                    <label for="tenantCity">Votre ville</label>
                    <input type="text" id="tenantCity" name="tenantCity"
                    <?php
                        if(isset($_SESSION['tenantCity'])):?>
                            value="<?= $_SESSION['tenantCity']; ?>"
                    <?php
                        endif;
                    ?>
                    >
                </div>
            </div>
    </div>
            <button type="submit" name="stage2" class="button submitButton active">Suivant</button>
        </form>
</div>

<script src="Public/scripts/stage2.js"></script>