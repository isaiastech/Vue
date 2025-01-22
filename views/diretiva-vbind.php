<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/21a7183a5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../vue/vue.js"></script>
   
    <title>Diretiva V-bind</title>
</head>

<body>
    <main>
        <hr>
        <div class="container">
            <hr class="border border-primary border-3 opacity-75">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center display-5 fst-italic">Diretiva V-bind</h1>                  
                    <span><a href="../index" class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-house"> Voltar</a></span></i>                   
                </div>
            </div>
            <hr class="border border-primary border-3 opacity-75">
            <!-- Colocar código abaixo -->
             <div id="bind">
                <a :href="site">Site</a>
                <p :class="cor">Entendendo a diretiva V-bind</p>
                <input type="text" :placeholder="prenchimento">
                <input type="checkbox" name="Checar informação" id="btn-enviar" :checked='check'>

             </div>
            
        </div>
    </main>
    <div class="container d-flex justify-content-center">
        <footer class="d-flex flex-wrap justify-content-center  py-3 my-4 ">
            <p class="text-body-secondary fst-italic">&copy;<?php echo date('Y') . "IsaiasTech" ?></p>
        </footer>
    </div>
    <script src="../templates/vbind.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>