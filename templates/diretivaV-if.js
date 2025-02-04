const vm = new Vue({
    el:'.app',
    data:{
        saldo:4570.17,
        exibirSaldo:false,
        idade: 0,
        nota:0
    },
    methods:{
        setIdade(){
            this.idade = inputIdade.value
        },
        setNota(){
            this.nota = nota.value
        }

    }
});