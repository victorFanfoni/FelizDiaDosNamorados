<?php
$data_inicio = new DateTime("2021-03-27");
$hoje = new DateTime();
$intervalo = $data_inicio->diff($hoje);

$anos = $intervalo->y;
$meses = $intervalo->m;
$dias = $intervalo->d;
$totalDias = $data_inicio->diff($hoje)->days;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nosso Amor 💘</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 50px;
            color: #fff;
            overflow: hidden;
        }

        h1 {
            font-family: 'Pacifico', cursive;
            font-size: 3em;
            margin-bottom: 0.3em;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.2);
        }

        .contador {
            font-size: 1.6em;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            display: inline-block;
            margin-top: 20px;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
        }

        .cora {
            font-size: 2.2em;
            animation: pulse 2.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }

        .footer {
            margin-top: 50px;
            font-size: 0.95em;
            opacity: 0.85;
            position: relative;
            z-index: 1;
        }

        /* Corações flutuantes */
        .heart {
            position: fixed;
            font-size: calc(14px + 10 * (random()));
            animation: floatUp 6s linear infinite;
            pointer-events: none;
            opacity: 0.7;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg) scale(1.3);
                opacity: 0;
            }
        }

        @media (max-width: 600px) {
            h1 { font-size: 2.2em; }
            .contador { font-size: 1.2em; padding: 20px; }
        }
    </style>
</head>
<body>

    <h1>❤️ Nosso Amor ❤️</h1>

    <div class="contador">
        <p>Estamos juntos há:</p>
        <p><strong><?= $anos ?> anos, <?= $meses ?> meses e <?= $dias ?> dias</strong></p>
        <p class="cora">💗 <?= $totalDias ?> dias de amor 💗</p>
        <p>Desde: <?= $data_inicio->format('d/m/Y') ?></p>
    </div>

    <div class="footer">
        Feito com muito amor 💕 para o Dia dos Namorados
    </div>

    <!-- Script dos corações flutuantes -->
    <script>
        function criarCoracao() {
            const coracao = document.createElement("div");
            coracao.classList.add("heart");
            coracao.innerText = "💖";

            const tamanho = Math.random() * 20 + 20;
            coracao.style.left = Math.random() * 100 + "vw";
            coracao.style.fontSize = `${tamanho}px`;
            coracao.style.animationDuration = `${Math.random() * 3 + 4}s`;

            document.body.appendChild(coracao);
            setTimeout(() => coracao.remove(), 7000);
        }

        setInterval(criarCoracao, 300);
    </script>

</body>
</html>
