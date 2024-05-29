<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioco delle rane</title>
    <link rel="stylesheet" href="stile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="rane.php">Matematica</a></li>
            <li><a href="../isomeri/isomeria.php">Scienze</a></li>
            <li><a href="../palline entropia/entropia.php">Fisica</a></li>
            <li><a href="../pagina contatti/contatti.php">Contatti</a></li>
        </ul>
    </nav>
    
    <h1 id="title">LE RANE PROBABILISTICHE</h1>
    <div id="zonapunt">
        <p id="importo">1000.00 $</p>
        <img id="soldi"src="soldi.png" alt="soldi">
        <button id="apriPopup">Regole del gioco</button>
        
        <button id="scommetti" class="lampeggiante">Scommetti</button>
        <div id="popup" class="popup-container">
            <div class="popup-header">
                <span id="chiudiPopup" class="popup-close-button">&times;</span>
            </div>
            <div class="popup-content">
                <h2 id="titregole">Regole del gioco</h2>
                <p id="regole"><br>
                    1) Se sei nella posizione 1:<br>
                    - Se esce 1,2 vai nella posizione 2<br>
                    - Se esce 3,6 vai nella posizione 3<br>
                    - Se esce 4,5 vai nella posizione 4<br>
                    <hr>
                    2) Se sei nella pozione 2:<br>
                    - Se esce 1,2,5 vai nella posizione 1<br>
                    - Se esce 3,6 vai nella posizione 3<br>
                    - Se esce 4 vai nella posizione 4
                    <br><hr>
                    3) Se sei nella pozione 3:<br>
                    - Se esce 1,4 vai nella posizione 1<br>
                    - Se esce 2 vai nella posizione 2<br>
                    - Se esce 5 vai nella posizione 4<br>
                    - Se esce 3,6 resti nella posizione 3
                    <br><hr>
                    4) Se sei nella posizione 4:<br>
                    - Se esce 1,2 vai nella posizione 1<br>
                    - Se esce 4 vai nella posizione 2<br>
                    - Se esce 3 vai nella posizione 3<br>
                    - Se esce 5,6 vai nella posizione 5
                    <br><hr>
                    5) Se sei nella posizione 5:<br>
                    - Se esce 1 vai nella posizione 1<br>
                    - Se esce 2,3 vai nella posizione 3 <br>
                    - Se esce 4,6 vai nela posizione 4 <br>
                    - Se esce 5 vai nella posizione 5
                <br>  </p>
            </div>
        </div>
    </div>
    <div id="zonascommessa">
        <button id="puntata1" class="botscom">+50.00 $</button>
        <button id="puntata2" class="botscom">-50.00 $</button>
        <p id="titsom">Denaro scomesso: </p>
        <p id="sommascommessa">0.00$</p>
        <img id="soldi2"src="soldi.png" alt="soldi">

        <p id="titpunta">Scegli una posizione su cui puntare:</p>
    <div id="scelte" class="opzioni">
        <label for="posizione1">
            <input type="radio" id="posizione1" name="posizione" value="1100" checked="true"> Posizione 1
        </label>
        <label for="posizione2">
            <input type="radio" id="posizione2" name="posizione" value="950"> Posizione 2
        </label>
        <label for="posizione3">
            <input type="radio" id="posizione3" name="posizione" value="790"> Posizione 3
        </label>
        <label for="posizione4">
            <input type="radio" id="posizione4" name="posizione" value="630"> Posizione 4
        </label>
        <label for="posizione5">
            <input type="radio" id="posizione5" name="posizione" value="480"> Posizione 5
        </label>
    </div>
    <button id="partita" class="bottone-avvia">Avvia Partita</button>
    <div id="messaggioErrore" class="popup-errore"></div>

    </div>

    <div id="primapt">
        <div id="die">
            <div class="face front">1</div>
            <div class="face back">6</div>
            <div class="face left">3</div>
            <div class="face right">4</div>
            <div class="face top">2</div>
            <div class="face bottom">5</div>
        </div>
    <div><p id="nlanci">Numero lanci:<p id="contalanci"></p></p>
    </div>
    <button id="rollButton">Lancia il dado</button>
    <div id="textresult">
        <textarea id="resultTextArea" rows="10" cols="30" disabled></textarea>
    </div>
    
    <div class="image-container" id="imageContainer">
        <img src="ninfe.png" alt="Immagine 1">
        <img src="ninfe.png" alt="Immagine 2">
        <img src="ninfe.png" alt="Immagine 3">
        <img src="ninfe.png" alt="Immagine 4">
        <img src="ninfe.png" alt="Immagine 5">
    </div>
    <div id="posrana">
        <img id="rana" src="rana.png" alt="rana">
    </div>
    <div id="finepartita" style="display: none;"></div>
    <button id="riprova"><b>Riprova</b></button>
    <button id="aiutomate">Aiuto da parte della matematica</button>
    
    </div>


    <div id="secondapt">
        <p id="partemat">La Matematica può aiutarci?</p>
        <p class="spiegazione">Certo!, analizzare le probabilità di uscita di un determinato numero dal dado è semplice se conosciamo la definizione classica di probabilità 
            ( casi favorevoli diviso casi totali ). </p>
            <img id="defclassica" src="defclassica.JPG" alt="defclassica">

        <p class="spiegazione">Tuttavia il problema in questo gioco non finisce qui, infatti la probabilità di finire in una posizione non dipende solo dal lancio del dado,
              ma anche dalla posizione stessa in cui si trova la rana!!! Queste si chiamano probabilità condizionate ( la probabilità della posizione successiva dipende da quella del dado, ma essa dipende anche dalla posizione in cui si trova la rana)</p>
              <img id="probabilitacondizionata" src="probabilitacondizionata.JPG" alt="pcond">
     
              <p class="spiegazione">Questo per solo un salto, ma dopo 10 il problema si complica ulteriormente, diventando impossibile svolgere tutti i calcoli a mano. 
        Ed ecco che entrano in gioco le <i>MATRICI</i>. Creiamo una matrice le cui righe rappresentano le posizioni di partenza, mentre le colonne le posizioni di arrivo, inserendo la probabilità della posizione i
        di andare nella posizione j.
         </p>
         <img id="simbmatrice" src="matrices.JPG" alt="matrice"><img id="matricein" src="matricein.JPG" alt="matrice">

        <p class="spiegazione">Attraverso quella che si chiama "matrice di transizione della catena di Markov", riesco a ottenere le diverse
            probabilità delle varie posizioni dopo 10 salti, ( il numero di salti coinciderà con il valore a cui eleveremo la matrice)</p>
            <img id="simbmatrice2" src="matrices.JPG" alt="matrice"><img id="matriceele" src="matriceelevata.JPG" alt="matrice">
        <p class="spiegazione">
            Il risultato ci torna estremamente utile!!!, infatti, come si può notare, la probabilità che la rana dopo 10 salti capiti sulla terza posizione è la più alta di tutte,
            mentre la probabilità che capiti sulla quinta posizione è bassisima, quindi... grazie al potere della Matematica, è bene puntare sulla terza posizione!!! 
        </p><br>
        <p class="spiegazione">
            Grazie al potere della Matematica, è bene puntare sulla terza posizione!!!
        </p>
    </div>
    <footer>
        <p class="subtitle" id="footer">Created by Dalle Crode Enrico e Dotto Filippo</p>
    </footer>

    <script src="script.js"></script>
    <script src="listener.js"></script>
</body>
</html>
