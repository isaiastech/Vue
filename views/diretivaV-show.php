<?php
?>
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
    <title>Diretiva v-show</title>
</head>

<body>
    <main>
        <hr>
        <div class="container">
            <hr class="border border-primary border-3 opacity-75">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center display-5 fst-italic">Diretiva v-show</h1>                  
                    <span><a href="../index" class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-house"> Voltar</a></span></i>                   
                </div>
            </div>
            <hr class="border border-primary border-3 opacity-75">

            <!-- Colocar código abaixo -->
             <div id="app">
                <p @mouseover="exibirTextoAjuda = true" @mouseout= "exibirTextoAjuda = false">Exemplo tooltip</p>
                <div v-show="exibirTextoAjuda">
                    <h3>Título texto ajuda</h3>
                    <p>Conteúdo texto ajuda</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur modi eos in vero accusamus, nemo recusandae exercitationem? Sapiente, tempora iusto, fugiat, commodi labore amet et architecto quas accusantium eius sint.
                    Sunt quos expedita nostrum? Quas, dicta illum. Molestias culpa velit obcaecati corporis? Amet officia, sunt repellendus, cum ea animi quia itaque laboriosam nemo laudantium tempore voluptatem ad doloribus ab neque!
                    Obcaecati, dolor! Rerum est atque voluptates porro optio similique fuga recusandae doloribus dolore ex explicabo commodi consequuntur suscipit, veritatis nemo nihil unde nisi voluptatibus labore impedit ipsum, nostrum architecto! Autem?
                    Molestias vero aut, deserunt rem quo voluptates adipisci sunt at ut neque eos modi obcaecati nostrum fugiat nemo quidem a asperiores? Quaerat, voluptates cumque aspernatur autem minus iure quod assumenda!
                    Similique iusto maiores earum ab asperiores, quas, laudantium ea repellendus obcaecati molestias eligendi nesciunt nulla ullam deserunt assumenda, fuga nihil voluptatem totam tempore rem recusandae! Quos obcaecati voluptas hic ipsa.</p>
                </div>

             </div>
            
        </div>
    </main>
    <div class="container d-flex justify-content-center">
        <footer class="d-flex flex-wrap justify-content-center  py-3 my-4 ">
            <p class="text-body-secondary fst-italic">&copy;<?php echo date('Y') . "IsaiasTech" ?></p>
        </footer>
    </div>
    <script src="../templates/diretivaVShow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>