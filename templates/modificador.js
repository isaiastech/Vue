new Vue({
    el: '#app',
    data: {
        msg: '',
        cliques: 0
    },
    methods: {
        previnirComportamentoPadrao(event) {
            event.preventDefault()
            this.msg = 'Comportamento padrão prevenido'
        },
        executarUmaVez() {
            this.cliques++
        }
    }
})