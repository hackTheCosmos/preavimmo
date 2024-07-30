<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préavis Pdf</title>
    <style>
        
        * {
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'courier';
        }

        body {
            padding : 2rem;
        }

        .tenant__wrapper, .recipient__wrapper p {
            text-transform: capitalize;
        }

        .recipient__wrapper {
            margin:2rem 0 2rem 50%;
        }

        .date {
            margin-left:50%;
        }

        .object {
            margin : 4rem 0;
            font-weight:bold;
        }

        .content__wrapper {
            margin : 3rem 0;
        }

        .content__wrapper p {
            margin : 1rem 0;
        }

        .content__wrapper .signature {
            margin : 2rem 0;
            text-transform:capitalize;
        }
        

    </style>
</head>
<body>
    <div class="tenant__wrapper">
        <p>
            <?php
            if(isset($_SESSION['tenantFirstname'])):
                echo $_SESSION['tenantFirstname'];
                echo ' ';
            endif;
            if(isset($_SESSION['tenantLastname'])):
                echo $_SESSION['tenantLastname'];
            endif;
            ?>
        </p>
        <p>
            <?php
            if(isset($_SESSION['tenantAddress'])):
                echo $_SESSION['tenantAddress'];
            endif;
            ?>
        </p>
        <p>
            <?php
            if(isset($_SESSION['tenantPostalCode'])):
                echo $_SESSION['tenantPostalCode'];
            endif;
                echo ' ';
            if(isset($_SESSION['tenantCity'])):
                echo $_SESSION['tenantCity'];
            endif;
            ?>
        </p>
    </div>

    <div class="recipient__wrapper">
        <p>
            <?php
            if(isset($_SESSION['recipientFirstname'])):
                echo $_SESSION['recipientFirstname'];
            endif;
                echo ' ';
            if(isset($_SESSION['recipientLaststname'])):
                echo $_SESSION['recipientLaststname'];
            endif;
            ?>
        </p>
        <p>
            <?php
            if(isset($_SESSION['recipientAddress'])):
                echo $_SESSION['recipientAddress'];
            endif;
            ?>
        </p>
        <p>
            <?php
            if(isset($_SESSION['recipientPostalCode'])):
                echo $_SESSION['recipientPostalCode'];
            endif;
                echo ' ';
            if(isset($_SESSION['recipientCity'])):
                echo $_SESSION['recipientCity'];
            endif;
            ?>
        </p>
    </div>

    <p class ="date">le <?= Date("d/m/Y") ?>,</p>

    <p class ="object">Objet : Notification de préavis de départ</p>

    <div class="content__wrapper">
        <p>
            <?php
            if(isset($_SESSION['recipientGender'])):
                echo $_SESSION['recipientGender'];
            endif;
            ?>,
        </p>
        <p>
            Actuellement locataire de l'appartement situé au 
            <?php
            if(isset($_SESSION['housingAddress'])):
                echo $_SESSION['housingAddress'];
                echo " ";
            endif;
            ?>
            <?php
            if(isset($_SESSION['housingPostalCode'])):
                echo $_SESSION['housingPostalCode'];
            endif;
                echo ' ';
            if(isset($_SESSION['housingCity'])):
                echo $_SESSION['housingCity'];
            endif;
            ?>, je vous informe par la présente de ma volonté de résilier le contrat de bail qui nous lie.
        </p>
        <p>
            Selon la loi, et conformément à l'accord passé lors de la signature du bail, le préavis de départ durera
            <?php
            if(isset($_SESSION['deadLine'])):
                echo $_SESSION['deadLine'];
            endif;
            ?>
            mois et débutera au moment où vous recevrez cette lettre.
        </p>

        <p>
            Je reste à votre disposition pour toute question, et pour organiser l'état des lieux de      sortie ainsi que la restitution des clés.
        </p>
        <p>
            Veuillez agréer,
            <?php
            if(isset($_SESSION['recipientGender'])):
                echo $_SESSION['recipientGender'];
            endif;
            ?>,
            l’expression de mes salutations distinguées.
        </p>
        <p class="signature">
            <?php
            if(isset($_SESSION['tenantFirstname'])):
                echo $_SESSION['tenantFirstname'];
            endif;
            echo ' ';
            if(isset($_SESSION['tenantLastname'])):
                echo $_SESSION['tenantLastname'];
            endif;
            ?>
        </p>
    </div>

</body>
</html>