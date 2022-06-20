
let url_departamento = 'http://localhost:8000/api/departamentos/';
let url_provincia = 'http://localhost:8000/api/provincias/';
let url_distrito = 'http://localhost:8000/api/distritos/';

new Vue({
    el: '#app',
    data() {
        return {
            departamentos: [],
            provincias: [],
            distritos: [],
            departamento: {
                id: '',
                nombre: ''
            },
            provincia: {
                id: '',
                nombre: ''
            },
            distrito: {
                id: '',
                nombre: ''
            },
        }
    },
    created() {
        this.getDepartamento()
        this.getProvincia()
        this.getDistrito()
    },
    methods: {
        getDepartamento: function () {
            axios.get(url_departamento)
                .then(response => {
                    this.departamentos = response.data;
                })
        },
        getProvincia: function () {
            axios.get(url_provincia)
                .then(response => {
                    this.provincias = response.data;
                })
        },
        getDistrito: function () {
            axios.get(url_distrito, {
                params: { hospital: this.optHospital }
            }).then(response => {
                this.distritos = response.data;
            })
        },

    }
});

