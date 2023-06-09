<?php
session_start();
if($_SESSION['logado'] == true){
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <link rel="shortcut icon" href="./images/infinity.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <audio class="correct" src="audio/correct.mp3"></audio>
    <audio class="wrong" src="audio/wrong.mp3"></audio>
    <h1 class="title">Fase 01</h1>

    <div class="textoCombo">COMBO: 
        <span class="resultadoCombo">0</span>
        <p class="fraseCombo"></p>
    </div>

    <section class="container">
        <div class="block">
            <div class="images"></div>
            <div class="answers">
                <button class="button option-1"></button>
                <button class="button option-2"></button>
                <button class="button option-3"></button>
            </div>
        </div>
        <div class="textoContador">
            Pontuação: 
            <span class="pontos">0</span>
        </div>
    </section>
    
    <div class="comboDecoration">
        <div class="dinossaurDecoration comboOff">
            <img class="dinossaurCombo" src="images/dinossauro2.png" alt="dinossauro" draggable="false">
            <div class="dinossaurShadow"></div>
        </div>
        <div class="comboBackgroundDecoration comboOff">
            <div class="comboFigure"></div>
            <div class="comboFigureShadow-1"></div>
            <div class="comboFigureShadow-2"></div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>
</html>

<?php
}else{
    header('Location: ../index.html');
}
?>