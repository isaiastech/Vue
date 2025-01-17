const metodos = {
    el:'#atributos',
    data: {
        n1: 10,
        n2 : 5,
    },
    methods: {
        somar() { //funcão convencional
            return this.n1 + this.n2;
        },
        subtrair: function(){ // funcção anônima
            return this.n1 - this.n2 ;
        },

        multiplicar () { //funcão convencional
            return this.n1 * this.n2 ;
        },
        dividir(){
            return this.n1 / this.n2;

        }
       
    }
};

const vm = new Vue(metodos);
