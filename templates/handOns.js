const vm = new Vue({ 
    // Cria uma nova instância do Vue, que será usada para manipular o DOM e gerenciar dados.
    el: '#app', 
    // Define o elemento DOM onde o Vue será montado (um elemento com o id="app").
    data: { 
        // Declara os dados reativos que podem ser utilizados no template HTML ou pelos métodos.
        cor: 'branco', 
        // Propriedade inicial para armazenar a cor (valor padrão: "branco").
        posicaoX: 0, 
        // Propriedade para armazenar a posição X do mouse (valor padrão: 0).
        posicaoY: 0, 
        // Propriedade para armazenar a posição Y do mouse (valor padrão: 0).
    },
    methods: { 
        // Define os métodos que podem ser chamados dentro do template HTML ou pelo próprio JavaScript.
        mudarCor(c) { 
            // Método para alterar a propriedade `cor`.
            // Recebe um argumento `c` que será atribuído ao valor de `cor`.
            this.cor = c; 
            // Atualiza o valor da cor reativa (o `this` referencia o objeto Vue atual).
        },
        coordenadas(e) { 
            // Método para capturar as coordenadas do mouse.
            // Recebe um evento `e` como argumento, que contém informações do evento DOM.
            this.posicaoX = e.clientX; 
            // Atualiza a propriedade `posicaoX` com a posição horizontal do mouse.
            this.posicaoY = e.clientY; 
            // Atualiza a propriedade `posicaoY` com a posição vertical do mouse.
        }
    }
});

