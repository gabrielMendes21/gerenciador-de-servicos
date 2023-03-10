<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de serviços</title>

    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'   
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #d1d1d1;
        }

        input, select, textarea {
            width: 100%;
            border-radius: 2px;
            border: 1px solid grey;
            padding: 5px;
        }
    </style>
</head>
<body class="container">
    <div class="bg-white">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Sistema WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="bg-white px-4 py-3">
            <form action="">
                <h2 class="h4 mt-3">Cadastrar - Agendamento de potenciais clientes</h2>
                <p>Sistema utilizado para agendamento de serviços</p>
                
                <label for="name" class="d-block mb-2">Nome:</label>
                <input type="text" id="name" placeholder="Digite seu nome" class="mb-3 form-control">

                <label for="phone" class="d-block mb-2">Telefone:</label>
                <input type="text" id="phone" placeholder="(xx)xxxxx-xxxx" class="mb-3 form-control">

                <label for="origin" class="d-block mb-2">Origem:</label>
                <select name="origin" id="origin" class="mb-3 form-control">
                    <option value="">Celular</option>
                    <option value="">Telefone</option>
                </select>

                <label for="contact" class="d-block mb-2">Data do contato:</label>
                <input type="date" id="contact" class="mb-3 form-control">

                <label for="obs" class="d-block mb-2">Observação:</label>
                <textarea name="" id="obs" rows="5" class="form-control"></textarea>

                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </form>
        </main>
    </div>
</body>
</html>