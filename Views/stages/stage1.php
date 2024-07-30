<div class="firstStagePage__wrapper"> 
    <div class="item">
        <p class="stageNumber">&Eacute;tape 1 / 4</p>
        
        <p>Indiquez le type de location que vous souhaitez quitter</p>
        
        
    </div>   

    <div class="item">  
        <p>Vous shouaitez quitter :</p>  
        <form method="post">
            <div class="inputs__wrapper">
                <div class="input__wrapper">
                    <input type="radio" id="housingType1" name="housingType" value="3" 
                    <?php
                        if(isset($_SESSION['deadLine'])): 
                            if($_SESSION['deadLine'] == 3):
                                echo "checked";
                            endif;
                        endif;
                    ?>
                    >
                    <label for="housingType1">un logement vide</label>
                </div>
                <div class="input__wrapper">
                    <input type="radio" id="housingType2" name="housingType" value="1"
                    <?php
                        if(isset($_SESSION['deadLine'])): 
                            if($_SESSION['deadLine'] == 1):
                                echo "checked";
                            endif;
                        endif;
                    ?>
                    >
                    <label for="housingType2">un logement meublé</label>
                </div>
            </div>
    </div>
            <button type="submit" name="stage1" class="button submitButton
            <?php
                if(isset($_SESSION['deadLine'])):
                    echo "active";
                endif;
            ?> 
            ">Suivant</button>
        </form>
</div>

<script src="Public/scripts/stage1.js"></script>