const vm = new Vue({
    el: '#app',
    data: {
       saldo: 1200,
    },
    methods: {
       creditar(){
        this.saldo += parseFloat(valor.value) ;
       },
       debitar(){
        this.saldo -= parseFloat(valor.value) ;
       },
       zerar(){
        this.saldo = 0;
       }
    }
})