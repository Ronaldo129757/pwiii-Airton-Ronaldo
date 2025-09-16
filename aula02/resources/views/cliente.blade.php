<!DOCTYPE html>
<html>
<head>
    <title>Cliente</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        /* --- Configuração Geral e Fonte --- */
        :root {
            --primary-color: #0dff00; /* Verde brilhante */
            --background-color: #000000;
            --dark-grey: #1a1a1a;
            --glow-color: rgba(13, 255, 0, 0.7);
        }

        * {
            box-sizing: border-box;
        }

        body {
            background-color: var(--background-color);
            color: var(--primary-color);
            font-family: 'Press Start 2P', cursive;
            padding: 20px;
            margin: 0;
            font-size: 14px; /* Tamanho base para fonte pixelada */
        }

        /* --- Fundo de Circuito (adicionado para o estilo) --- */
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: -1;
            background-image:
                linear-gradient(to right, rgba(13, 255, 0, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(13, 255, 0, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.5;
        }

        /* --- Estilização dos Elementos Originais --- */
        
        /* Navegação */
        nav {
            text-align: center;
            padding: 20px;
            margin-bottom: 40px;
            border-bottom: 2px solid var(--primary-color);
        }

        nav a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 1.2rem;
            text-shadow: 0 0 5px var(--glow-color);
            transition: all 0.3s ease;
        }

        nav a:hover {
            text-shadow: 0 0 15px var(--glow-color);
        }
        
        /* Seção do Formulário e Tabela */
        section, .foreach {
            max-width: 800px;
            margin: 0 auto 50px auto; /* Centraliza e adiciona espaço */
        }

        /* Formulário */
        form fieldset {
            border: 2px solid var(--primary-color);
            padding: 20px 30px 30px 30px;
            box-shadow: 0 0 15px var(--glow-color) inset;
        }

        form legend {
            padding: 0 10px;
            font-size: 1.1rem;
        }

        /* Inputs e Labels */
        form input[type="text"] {
            width: 100%;
            background: var(--dark-grey);
            border: 2px solid var(--primary-color);
            outline: none;
            color: var(--primary-color);
            font-family: 'Press Start 2P', cursive;
            font-size: 1rem;
            padding: 12px;
            margin-bottom: 8px; /* Espaço entre o input e o label abaixo */
        }
        
        form input[type="text"]:focus {
             box-shadow: 0 0 15px var(--glow-color);
        }

        form label {
            display: block; /* Garante que o label fique na sua própria linha */
            font-size: 0.8rem;
        }
        
        /* Botão Salvar */
        #submit {
            background-color: var(--primary-color);
            color: var(--background-color);
            border: none;
            padding: 15px 30px;
            font-family: 'Press Start 2P', cursive;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-top: 20px;
            box-shadow: 0 0 10px var(--glow-color);
        }

        #submit:hover {
            box-shadow: 0 0 25px var(--glow-color), 0 0 40px var(--glow-color);
        }

        /* Tabela */
        .foreach table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid var(--primary-color);
            box-shadow: 0 0 15px var(--glow-color);
        }

        .foreach th, .foreach td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid rgba(13, 255, 0, 0.3);
        }

        .foreach thead {
            background-color: var(--dark-grey);
            font-size: 0.9rem;
        }

        .foreach tbody tr:hover {
            background-color: var(--dark-grey);
        }
        
    </style>
</head>
<body>

    <nav>
        <div>
            <div>
                <a href="/cliente">Cliente</a>
            </div>
        </div>
    </nav>
    
    <section>
        <div>
            <div>
                <form action="/cliente" method="post">
                    @csrf

                    <fieldset>
                        <legend><b>Cadastro de Cliente</b></legend>
                        <br>

                        <div>
                            <input type="text" name="txNomeCliente" id="nome" required>
                            <label>Primeiro Nome</label>
                        </div>
                        <br><br>

                        <div>
                            <input type="text" name="txSobrenome" id="sobrenome" required>
                            <label>Sobrenome</label>
                        </div>
                        <br><br>

                        <button onclick id="submit">Salvar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    <div class="foreach">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Primeiro Nome</th>
                    <th>Sobrenome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->primeiroNome}}</td>
                        <td>{{ $c->sobrenome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>