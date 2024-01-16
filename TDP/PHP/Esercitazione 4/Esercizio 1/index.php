<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1 - Cavone Antonio</title>
</head>
<body>
    <h1>Frasi Celebri Casuali</h1>
    <?php
        $frasi = array("Tutti pensano a cambiare il mondo, ma nessuno pensa a cambiar se stesso.",
                       "È meglio tenere la bocca chiusa e lasciare che le persone pensino che sei uno sciocco piuttosto che aprirla e togliere ogni dubbio.",
                        "Le follie sono le uniche cose che non si rimpiangono mai.",
                        "Colui che chiede è stupido per un minuto, colui che non chiede è stupido per tutta la vita.",
                        "Un uomo che osa sprecare anche solo un ora del suo tempo non ha scoperto il valore della vita.",
                        "Se giudichi le persone, non avrai tempo per amarle.",
                        "Errare è umano, ma perseverare è diabolico.",
                        "Scegli un lavoro che ami, e non dovrai lavorare neppure un giorno in vita tua.",
                        "Qui siamo tutti matti.",
                        "Vincere non è importante, è l unica cosa che conta."
                    );
        
        $i = rand(0, 9);
        echo $frasi[$i];
    ?>
    
</body>
</html>