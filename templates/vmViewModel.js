options = {
    el: '#app',
    data: { // variaveis / atributos retivos
        mensagem: ['Primeiro template controlado pelo VUE',
                    'Template controlado: ',
                ],

        valorTotal: 150.47,
        logado: false,
        hobbies: [
            'Dormir',
            'correr',
            'trilhas'
        ],
        perfil: {
            nome: 'Isaias Batista',
            site: 'isaiastech.app.br',
            idade: 32,
            cursos: [
                { nome: 'Laravel', CagaHoraria: '50 horas' },
                { nome: 'Banco de Dados', CagaHoraria: '30 horas' },
            ]

        }

    }  // # para selecionar por id
    // . para selecionar por class
}

const vm = new Vue(options);  // vm=ViewModel