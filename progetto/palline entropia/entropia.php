<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stile.css">
    <title>Entropia e probabilità</title>
    
    <script src="https://unpkg.com/pixi.js@7.x/dist/pixi.min.js"></script>
    
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../gioco delle rane + probabilità/rane.php">Matematica</a></li>
            <li><a href="../isomeri/isomeria.php">Scienze</a></li>
            <li><a href="entropia.php">Fisica</a></li>
            <li><a href="../pagina contatti/contatti.php">Contatti</a></li>
        </ul>
    </nav>

    <h1 id="titolo">Entropia e Probabilità: <p id="subtitle">Un Viaggio Interattivo nel Caos Statistico</p></h1>

  <div class="primapt" id="primo" >
    
    <img id="img_macrostati" src="spiegazione_entr_ordine.png">
    
    <h2>L'entropia di un sistema isolato aumenta sempre o, al più, rimane costante.</h2>
    
    <p id="descr1">
        
        Così afferma il secondo principio della termodinamica. L'entropia misura il grado di disordine di un sistema. <br>
        A lato è presentato un sistema di 6 particelle nei suoi 7 macrostati possibili. Quali sono quelli più in ordine? Il primo è l'ultimo;
        quello più in disordine invece? E' il quarto. (Se questo può sembrare controintuitivo, si prenda l'esempio di una pila di libri
        e di quegli stessi libri sparsi per una stanza). <br>
        Se il sistema non si trovasse nel quarto macrostato, vi tenderebbe quasi per certo, perdendo così l'ordine
        iniziale. Questo avviene perché il quarto macrostato è il più probabile, avendo il numero maggiore di microstati possibili, cioè di
        possibili configurazioni delle particelle.<br>
        Di conseguenza, nelle reazioni spontanee l'entropia di un sistema aumenterà con ogni probabilità, e con essa il disordine.
        
    </p>

</div>
  
    <div class="primapt" id="secondo">
        <h1>Simulazione: entropia di un sistema di particelle</h1>

        <p id="descr2">
            Come detto, l'entropia è legata alla probabilità che si raggiunga una determinata configurazione particellare, in quanto il sistema tende
            allo stato più disordinato, cioè quello più probabile.
            Man mano che le particelle di un sistema aumentano, le probabilità che si esse si configurino in modo ordinato precipitano drasticamente:
            per questo l'entropia aumenterà. Stessa cosa avviene con l'aumento della temperatura del sistema, poiché le particelle avranno più 
            energia per esplorare uno spazio di configurazione più ampio. La simulazione accanto permette di modificare la temperatura di un 
            sistema di particelle, con un conseguente aumento di velocità e di entropia.
    
        </p>
    
        <div id="particles-container"></div>
        <input type="range" id="speedSlider" min="0" max="200" step="1" value="0">
        <span id="speedLabel">Temperatura: 0 K</span> 
  
        <br>
        
    </div>

    <div class="primapt" id="terzo" >
    
      
      <h1>Probabilità ed Entropia</h1>

      <img id="ragno" src="ragno.png"oncontextmenu="return false;">
      
      <p id="descr3">
          
          I concetti di probabilità ed entropia sono interconnessi. Se pensiamo ad una stanza piena di particelle fluttuanti, è molto
          probabile che esse si dispongano omogeneamente piuttosto che accumularsi in un angolo. Se ci pensiamo, tutta l'aria della 
          nostra camera da letto potrebbe casualmente migrare verso il soffitto impedendoci di respirare, ma ciò non avviene perché la 
          probabilità è troppo bassa. Si ritorna al concetto di ordine e disordine di un sistema di particelle.
          <br><br>
          La simulazione sotto permette di calcolare la probabilità che, in una stanza con 10 mosche svolazzanti, in un certo momento esse
          si trovino tutte simultaneamente nel rettangolo scelto. A fianco un grafico che mostra l'andamento della probabilità (ordinate) 
          rispetto a quello dell'area scelta (ascisse).
          
          
      </p>
  
      <div id="container2">
        <div id="rectangle"></div>
    </div>
    <div id="divimg">
      <img id="imgprob" src="imgprob.png" alt="grafico probabilità">
    </div>

      <br><br>
    <button id="btProb" onclick="calcolaProb()">Calcola Probabilità</button>
    
    Probabilità: <span id="prob">0%</span>


  </div>
  <footer>
    <p class="subtitle" id="footer">Created by Dalle Crode Enrico e Dotto Filippo</p>
</footer>


  <script src="funzioni.js"></script>
</body>


</html>
