const vm = new Vue({
    el:'#app', // Define o elemento DOM onde o Vue será montado (um elemento com id="app").
    data: { 
        xyz:true, // Variável reativa `xyz`, que pode ser usada na interface ou nos métodos.
    },
    methods:{
        imprimirTexto(t, n){ 
            console.log(t); // Imprime o primeiro argumento passado para o método.
            console.log(n); // Imprime o segundo argumento passado para o método.
            console.log(this.xyz); // Imprime o valor atual da propriedade `xyz` no `data`.
        },
        mensagemAlerta(evento){ 
            console.log(evento); // Imprime o evento que acionou este método.
        }
    }
})
