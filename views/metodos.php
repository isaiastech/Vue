<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../vue/vue.js"></script>
    <script src="https://kit.fontawesome.com/21a7183a5f.js" crossorigin="anonymous"></script>
    <title>Métodos</title>
</head>

<body>
    <main>
        <hr>
        <div class="container">
            <hr class="border border-primary border-3 opacity-75">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center display-5 fst-italic">Métodos</h1>                  
                    <span><a href="../index" class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-house"> Voltar</a></span></i>                   
                </div>
            </div>
            <hr class="border border-primary border-3 opacity-75">
            <!-- Colocar código abaixo -->
             <div class="metodos">
                    <!-- utilizando v-on exuta -->
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" @keyup="imprimirTexto()">
                <p></p>
                <button type="button" class="btn btn-warning" v-on:click="mesagemAlerta()">Alerta</button>
             </div>

        </div>
    </main>
    <div class="container d-flex justify-content-center">
        <footer class="d-flex flex-wrap justify-content-center  py-3 my-4 ">
            <p class="text-body-secondary fst-italic">&copy;<?php echo date('Y') . "IsaiasTech" ?></p>
        </footer>
    </div>
    <script src="../templates/metodos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>