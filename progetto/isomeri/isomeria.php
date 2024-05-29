<?php
session_start();
if(!isset($_SESSION["nomemolecola"])&&!isset($_SESSION["codice"])){
    $_SESSION ["nomemolecola"]="";
    $_SESSION["codice"]="";
}
if(!isset($_SESSION["nomemolecola2"])&&!isset($_SESSION["codice2"])){
    $_SESSION ["nomemolecola2"]="";
    $_SESSION["codice2"]="";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stileis.css?v=2.3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <script src="https://3Dmol.org/build/3Dmol-min.js "></script>
    <title>Stereoisomeria</title>
</head>
<body>
    <nav>   
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../gioco delle rane + probabilità/rane.php">Matematica</a></li>
            <li><a href="#">Scienze</a></li>
            <li><a href="../palline entropia/entropia.php">Fisica</a></li>
            <li><a href="../pagina contatti/contatti.php">Contatti</a></li>
        </ul>
    </nav>
    <h1 id="titolo">Stereoisomeria: <p id="subtitle">Esplora con la matematica il magico mondo biomolecolare! </p></h1>

    <div id="descrizione">
        
        <div id="comandi">
        <p name="scelta_molecole" id="opzione1">Scegli la molecola da esaminare nel primo riquadro</p>

        <form action="isomeria.php" method="post" id="form1">
        <?php
        
        $conn=new mysqli("localhost", "root","","prova");
        if($conn->connect_error){
            die("Connessione al db fallita" .$conn->connect_error);
        }
        $query_sql="SELECT*FROM molecole;";
        $risultato=$conn->query($query_sql);

        if($risultato==FALSE){
            die("Errore nell'esecuzione della query: ".$query_sql);
        }
        echo "<select name='molecola_scelta'>";
        echo "<option value='' selected disabled>Seleziona una molecola</option>";
        while($riga=$risultato->fetch_assoc()){
            $cod_mol=$riga["cod_mol"];
            $nome=$riga["nome"];
            $_SESSION["selezione"]=$_POST["molecola_scelta"];
            if($_SESSION["selezione"]==$cod_mol){
                $s="selected";
            }else{
                $s="";
            }
            echo "<option value='$cod_mol' $s >
                $nome
                </option>";
            
        }
        
        echo "</select>";
      
        
        ?>
        
        <input class= "bott" type="submit" name="invia" value="Mostra Molecola">
        <?php
            if(isset($_POST["invia"])&&is_numeric($cod_mol)){
                
                $cod_mol=$_POST["molecola_scelta"];
                $query_sql="SELECT* FROM molecole WHERE cod_mol='$cod_mol';";
        
                $risultato=$conn->query($query_sql);
                if($risultato==FALSE){
                    die("Errore nell'esecuzione della query: $query_sql");
                }
                if($risultato->num_rows !=1){
                    die("Risultato inaspettato: la query ha prodotto un numero di risultati diverso da 1");
                }
                
                $codici=$risultato->fetch_assoc();
                $_SESSION["codice"]=$codici["cod_mol"];
                $_SESSION["nomemolecola"]=$codici["nome"];

            }
            $conn->close();
        ?>
    </form>



    <p name="scelta_molecole" id="opzione2">Scegli la molecola da esaminare nel secondo riquadro</p>
    
        
    <form action="isomeria.php" method="post" id="form2">
        <?php

        $conn=new mysqli("localhost", "root","","prova");
        if($conn->connect_error){
            die("Connessione al db fallita" .$conn->connect_error);
        }
        $query_sql="SELECT*FROM molecole;";
        $risultato=$conn->query($query_sql);

        if($risultato==FALSE){
            die("Errore nell'esecuzione della query: ".$query_sql);
        }
        echo "<select name='bagigio'>";
        echo "<option value='' selected disabled>Seleziona una molecola</option>";
        while($riga=$risultato->fetch_assoc()){
            $cod_mol=$riga["cod_mol"];
            $nome=$riga["nome"];
            $_SESSION["selezione2"]=$_POST["bagigio"];
            if($_SESSION["selezione2"]==$cod_mol){
                $r="selected";
            }else{
                $r="";
            }

            echo "<option value='$cod_mol' $r   >
                $nome
                </option>";
            
        }
        
        echo "</select>";
      
        
        ?>
        
        <input class="bott" type="submit" name="invia2" value="Mostra Molecola" >
        <?php
            if(isset($_POST["invia2"])&&is_numeric($cod_mol)){
                
                $cod_mol=$_POST["bagigio"];
                $query_sql="SELECT* FROM molecole WHERE cod_mol='$cod_mol';";
                $risultato=$conn->query($query_sql);
                if($risultato==FALSE){
                    die("Errore nell'esecuzione della query: $query_sql");
                }
                if($risultato->num_rows !=1){
                    die("Risultato inaspettato: la query ha prodotto un numero di risultati diverso da 1");
                }
                
                $codici=$risultato->fetch_assoc();
                $f=$codici["cod_mol"];
                $_SESSION["codice2"]=$f;
                $_SESSION["nomemolecola2"]=$codici["nome"];

            }
            $conn->close();
        ?>
    </form>
         


        </div>
    </div>

<script>
    


</script>




<div class="primapt" id="primo">
    <p class="spieg1"><?= $_SESSION["nomemolecola"]?></p>
    <div id="modello2" class='viewer_3Dmoljs' data-cid='<?= $_SESSION["codice"]?>' Data-style="stick:radius~0.2;sphere:scale~0.3" data-spin="axis:y;speed:0"></div>
</div>
<div class="secondapt">
    <p class="spieg1"><?= $_SESSION["nomemolecola2"]?></p>
    <div id="modello1"   class='viewer_3Dmoljs' data-cid='<?= $_SESSION["codice2"]?>' Data-style="stick:radius~0.2;sphere:scale~0.3" data-spin="axis:y;speed:0"></div> 
</div>

<div id="descrizione2">
    <h1 id="titdesc">In questo, cosa centra la matematica? </h1>
    <p id="sottotitolo">Entra in gioco la regola di Van't Hoff</p>
    <p id="descr1">
  La regola di Van 't Hoff afferma che una molecola con 
𝑛
centri chirali può avere un massimo di 2<sup>n</sup>
  stereoisomeri. Tra questi stereoisomeri, alcune coppie possono essere enantiomeri, che sono molecole speculari non sovrapponibili tra loro.</br></br>

  <b>Matematica della Chiralità</b></br><br>
--Centri Chirali:
Un centro chirale (o carbonio asimmetrico) è un atomo di carbonio legato a quattro gruppi differenti. La presenza di questi centri determina la possibilità di esistenza di stereoisomeri.</br></br>
--Combinatoria:
La combinatoria entra in gioco nel calcolare il numero di possibili stereoisomeri. Se una molecola ha 
𝑛
centri chirali, il numero massimo di stereoisomeri è dato da 2<sup>n</sup>
 . Questo perché ogni centro chirale può avere due configurazioni possibili (generalmente indicate come R e S). </br></br>

--Geometria Tridimensionale:
La geometria tridimensionale è fondamentale per comprendere come le molecole possono essere speculari. Gli enantiomeri sono come immagini speculari che non possono essere sovrapposte. Questo concetto si visualizza meglio con modelli tridimensionali dove, anche se due molecole sembrano simili, non possono essere allineate perfettamente l'una con l'altra se sono enantiomeri.
        </br></br></hr>
Il collegamento matematico principale della regola di Van 't Hoff si trova nel campo della combinatoria. Il calcolo dei 2<sup>n</sup>
  stereoisomeri è un problema combinatorio. La comprensione dei centri chirali e la distinzione tra enantiomeri e diastereoisomeri richiede anche una comprensione della simmetria e della geometria nello spazio tridimensionale.
</p>

</div>

<div id="descrizione3">
    <h3>Importanza della regola di Van't Hoff e della stereoisomeria</h3>
    <p id="importanza">La regola di Van 't Hoff è cruciale in chimica organica e farmaceutica poiché gli enantiomeri possono avere proprietà biologiche e chimiche molto diverse. Ad esempio, un enantiomero di un farmaco può essere terapeuticamente attivo mentre l'altro può essere inattivo o addirittura tossico. Un caso emblematico è quello della talidomide, che ti invitiamo ad approfondire ;)</p>
</div>



<footer>
    <p class="subtitle" id="footer">Created by Dalle Crode Enrico e Dotto Filippo</p>
</footer>
</body>
</html>
