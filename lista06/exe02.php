<?php
$opcao = 1;

switch ($opcao) {
    case 1:
        echo "Iniciando o jogo... Prepare-se!<br>";
        break;

    case 2:
        echo "--- PERSONAGENS DISPONÍVEIS ---<br>";
        echo "1. Guerreiro Thorin - Especialista em combate corpo a corpo<br>";
        echo "2. Mago Eldrin - Mestre das artes arcanas<br>";
        echo "3. Arqueira Lyra - Agilidade e precisão à distância<br>";
        break;

    case 3:
        echo "--- RANKING DOS JOGADORES ---<br>";
        echo "1º Lugar: ShadowSlayer - 15.400 pts<br>";
        echo "2º Lugar: DragonMaster - 12.850 pts<br>";
        echo "3º Lugar: PixelQueen - 11.200 pts<br>";
        break;

    case 4:
        echo "--- CONFIGURAÇÕES ---<br>";
        echo "Volume do Som: 80%<br>";
        echo "Dificuldade: Normal<br>";
        echo "Resolução: 1920x1080<br>";
        break;

    case 5:
        echo "Saindo do jogo... Até logo!<br>";
        break;

    default:
        echo "Opção inválida!<br>";
        break;
}

?>