<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        /* --- Configuração Geral e Fonte --- */
        body {
            background-color: #000;
            color: #0dff00; /* Verde brilhante */
            font-family: 'Press Start 2P', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden; /* Esconde elementos que saem da tela */
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 50px; /* Espaço entre o texto e o botão */
            z-index: 2;
        }

        /* --- Estilo do Texto "Hello World" --- */
        .hello-world {
            position: relative;
            font-size: clamp(2.5rem, 10vw, 5rem); /* Tamanho de fonte responsivo */
            text-transform: lowercase;
            letter-spacing: 0.1em;
            color: #0dff00;
            /* Efeito de falha cromática (glitch) */
            text-shadow:
                3px 3px 0px rgba(255, 0, 255, 0.7), /* Sombra Magenta */
                -3px -3px 0px rgba(0, 255, 255, 0.7); /* Sombra Ciano */
            animation: glitch 2s infinite linear alternate;
            margin: 0;
        }

        /* Caixas de pixel aleatórias ao redor do texto */
        .pixel-box {
            position: absolute;
            background-color: transparent;
            border: 2px solid #0dff00;
            z-index: -1;
        }

        /* --- Gráficos do Circuito de Fundo --- */
        .circuit-bg {
            position: absolute;
            width: 90vw;
            height: 50vh;
            max-width: 850px;
            max-height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        /* Usando pseudo-elementos para as linhas principais do circuito */
        .circuit-bg::before,
        .circuit-bg::after {
            content: '';
            position: absolute;
            border-color: rgba(13, 255, 0, 0.4); /* Verde semi-transparente */
            border-style: solid;
        }

        /* Padrão do circuito no canto superior esquerdo */
        .circuit-bg::before {
            top: 0;
            left: 0;
            width: 25%;
            height: 60%;
            border-width: 3px 0 0 3px;
        }

        /* Barra do circuito no lado direito */
        .circuit-bg::after {
            top: 10%;
            right: 0;
            width: 15%;
            height: 80%;
            border-width: 3px 3px 3px 0;
        }

        /* --- Estilo do Botão (Fornecido por você) --- */
        #checkbox {
          display: none;
        }

        .switch {
          position: relative;
          width: 70px;
          height: 70px;
          background-color: rgb(99, 99, 99);
          border-radius: 50%;
          z-index: 1;
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: center;
          border: 2px solid rgb(126, 126, 126);
          box-shadow: 0px 0px 3px rgb(2, 2, 2) inset;
        }
        
        .switch svg {
          width: 1.2em;
        }
        
        .switch svg path {
          fill: rgb(48, 48, 48);
        }
        
        #checkbox:checked + .switch {
          box-shadow: 0px 0px 1px rgb(151, 243, 255) inset,
            0px 0px 2px rgb(151, 243, 255) inset, 0px 0px 10px rgb(151, 243, 255) inset,
            0px 0px 40px rgb(151, 243, 255), 0px 0px 100px rgb(151, 243, 255),
            0px 0px 5px rgb(151, 243, 255);
          border: 2px solid rgb(255, 255, 255);
          background-color: rgb(146, 180, 184);
        }
        
        #checkbox:checked + .switch svg {
          filter: drop-shadow(0px 0px 5px rgb(151, 243, 255));
        }
        
        #checkbox:checked + .switch svg path {
          fill: rgb(255, 255, 255);
        }

        /* Animação de Glitch Opcional */
        @keyframes glitch {
          0% {
            text-shadow:
                3px 3px 0px rgba(255, 0, 255, 0.7),
                -3px -3px 0px rgba(0, 255, 255, 0.7);
          }
          50% {
            text-shadow:
                -3px 3px 0px rgba(255, 0, 255, 0.7),
                3px -3px 0px rgba(0, 255, 255, 0.7);
          }
          100% {
            text-shadow:
                3px -3px 0px rgba(255, 0, 255, 0.7),
                -3px 3px 0px rgba(0, 255, 255, 0.7);
          }
        }
    </style>
</head>
<body>

    <div class="circuit-bg"></div>

    <div class="container">
        <h1 class="hello-world">hello world</h1>

        <input id="checkbox" type="checkbox" />
        <a  url = 'http://127.0.0.1:8000/paginateste'>
        <button class="switch" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="slider">
                <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"></path>
            </svg>
        </button>
      </a>
    </div>

    <script>
        const textContainer = document.querySelector('.hello-world');
        const numBoxes = 40;
        for (let i = 0; i < numBoxes; i++) {
            const box = document.createElement('div');
            box.classList.add('pixel-box');
         
            box.style.top = `${Math.random() * 140 - 20}%`;
            box.style.left = `${Math.random() * 120 - 10}%`;
           
            const size = Math.random() * 15 + 5;
            box.style.width = `${size}px`;
            box.style.height = `${size}px`;
            box.style.opacity = Math.random() * 0.6 + 0.1;
            textContainer.appendChild(box);
        }
    </script>

</body>
</html>
