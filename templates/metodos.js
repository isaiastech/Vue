const vm = new Vue({
    el:'.metodos',
    data: {
        usuario: 'Nome do usuário'
    },
    /**
     * 
     */
    methods:{ 
        imprimirTexto() {
        console.log('Teste')
    },
    mesagemAlerta(){
        alert('Mensagem de Alerta!!')
    }
}    
});