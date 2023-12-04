<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            background-color: #181920;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 400px;
        }

        h1 {
            color: #A88D1F;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #A88D1F;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Esperando Aprovação</h1>
        <p>Por favor, aguarde enquanto seu pedido está sendo processado pelo administrador.</p>
        <div class="loader"></div>
    </div>

    <script>
        // Defina o tempo em milissegundos (5 segundos neste exemplo)
        var tempoAtraso = 5000;

        // Função que retorna para a página anterior
        function retornarParaPaginaAnterior() {
            window.history.back();
        }

        // Inicie o temporizador de atraso
        setTimeout(retornarParaPaginaAnterior, tempoAtraso);

        // Atualize o contador de tempo
        var elementoTempo = document.getElementById('tempo');
        elementoTempo.textContent = (tempoAtraso / 1000); // Exibe em segundos
    </script>
    