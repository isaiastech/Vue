options = {
    el: '#app',
    data: { // variaveis / atributos retivos
        mensagem: 'Primeiro template controlado pelo " VUE "'
    }  // # para selecionar por id
    // . para selecionar por class
}

const vm = new Vue(options);  // vm=ViewModel