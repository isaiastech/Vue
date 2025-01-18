const metodos = {
    el:'#metodos',
    data: {
        msg: 'testando código',
    },
    methods: {
        somar() { //funcão convencional
            return 4 + 6;
        },
        subtrair: function(){ // funcção anônima
            return 4- 2;
        },

        multiplicar: () => { // arrow function
            return 4 * 2 ;
        },
        numeroAleatorio: () => {
            return Math.random();
        }


    }
};

const vm = new Vue(metodos);
