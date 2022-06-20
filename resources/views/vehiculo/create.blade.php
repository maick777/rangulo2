<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>

<body>

    <div id="app">
        <label>Departamento:</label>
        <select>
            <option value='0'>--Seleccione--</option>
            <option v-for='departamento in departamentos' :value='departamento.id'>@{{departamento.nombre }}</option>
        </select>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        let url = 'http://localhost:8000/api/departamentos/';

        new Vue({
            el: '#app',
            data() {
                return {
                    departamentos: [],
                    departamento: {
                        id: '',
                        nombre: ''
                    }
                }
            },
            created() {
                this.mostrar()
            },
            methods: {
                mostrar: function() {
                    axios.get(url)
                        .then(response => {
                            this.departamentos = response.data;
                        })
                },
            }
        });
    </script>


</body>

</html>