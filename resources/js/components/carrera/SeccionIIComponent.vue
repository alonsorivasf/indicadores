<template>
        <div class="row justify-content-center" v-if="mostrar==1">
            <md-button class="md-dense md-raised md-primary" @click="print"> <md-icon>print</md-icon> Imprimir Sección</md-button>
            <div class="col-xl-12" id="imprimir">
                <div class="card">
                    <div class="card-header"><b>II. ALUMNOS DE PRIMER INGRESO DEL CICLO ANTERIOR</b> <br>
                        <b>Campus: </b>{{campus}} <br><b>Programa:</b> {{carrera}}
                    </div>

                    <div class="card-body">
                        1. Número de periodos de inscripción a primer ingreso que ofreció la facultad o escuela durante el<b> ciclo escolar 2019-2020</b>.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-1x4j">Periodos</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraII1}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        2. Número de alumnos de <b>primer ingreso</b> a la carrera, del <b>ciclo escolar 2019-2020</b> por sexo.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-1x4j">Hombres</th>
                                <th class="tg-1x4j">Mujeres</th>
                                <th class="tg-1x4j">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraII2[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraII2[0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraII2[0].Total}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        props: ['campus','carrera', 'progress'],

        data() {
            return{
                mostrar: 0,
                carreraII1: null,
                carreraII2: [],
            }
        },
        mounted() {
            console.log(this.progress)
            this.mostrar = 0
            this.$emit('update:progress', 1)
            console.log(this.progress)
            let ruta1 = 'carreraII1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraII1 = response.data;
                        console.log(this.carreraII1)
                        });
            let ruta2 = 'carreraII2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraII2 = response.data;
                        console.log(this.carreraII2)
                        this.$emit('update:progress', 0)
                        this.mostrar = 1
                        });

        },
        watch: {
            carrera: function(event) {
                console.log("CAMBIO CARRERA")
                this.mostrar = 0
                this.$emit('update:progress', 1)
                    let ruta1 = 'carreraII1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraII1 = response.data;
                        console.log(this.carreraII1)
                        });
                    let ruta2 = 'carreraII2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraII2 = response.data;
                        console.log(this.carreraII2)
                        this.$emit('update:progress', 0)
                        this.mostrar = 1
                        });

            },
        },
        methods: {
            print(){
                 this.$htmlToPaper('imprimir');
            }

        },
    }
</script>

<style type="text/css">
    .tg .th-negro{ text-align:center;vertical-align:center;border-radius: 5px;padding: 20px;width: 600px;height: auto;background-color:#252323;border-color:#252323;border-style:solid;border-width:1px;color:rgb(238, 229, 229);}
    .tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
    .tg .tg-rounded  {border-radius: 5px;padding: 20px;border-style:solid;border-width:1px;color:#333}
    .tg td{background-color:#fff;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
    font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;width: 200px}
    .tg th{background-color:#f0f0f0;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
    font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:center;}
    .tg .tg-1x4j{background-color:#005eac;color:#ffffff;text-align:center;vertical-align:center}


    .wellin {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #ffffff;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
</style>
