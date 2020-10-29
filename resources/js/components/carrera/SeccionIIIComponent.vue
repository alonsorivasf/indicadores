<template>
        <div class="row justify-content-center" v-if="mostrar==1">
            <md-button class="md-dense md-raised md-primary" @click="print"> <md-icon>print</md-icon> Imprimir Sección</md-button>
            <div class="col-xl-12" id="imprimir">
                <div class="card">
                    <div class="card-header"><b>III. EGRESADOS Y TITULADOS DEL CICLO ANTERIOR</b> <br>
                        <b>Campus: </b>{{campus}} <br><b>Programa:</b> {{carrera}}
                    </div>

                    <div class="card-body">
                        1. Número de <b>Egresados</b> en el<b> ciclo escolar 2019-2020</b> por sexo, con discapacidad y hablantes de lengua indígena.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-1x4j">Hombres</th>
                                <th class="tg-1x4j">Mujeres</th>
                                <th class="tg-1x4j"><b>Total</b></th>
                                <th class="tg-1x4j">Con <br> discapacidad</th>
                                <th class="tg-1x4j">Hablantes de <br> lenguas indígenas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraIII1[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraIII1[0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraIII1[0].Total}}</td>
                                <td class="tg-baqh">{{carreraIII1[0].Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraIII1[0].Etnia}}</td>
                            </tr>
                            </tbody>
                        </table>

                        <br>
                        2. Número de <b>titulados</b> en el <b>ciclo escolar 2019-2020</b> independientemente del año de egreso. Desglóselos por sexo, con discapacidad y hablantes de lengua indígena.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-1x4j">Hombres</th>
                                <th class="tg-1x4j">Mujeres</th>
                                <th class="tg-1x4j"><b>Total</b></th>
                                <th class="tg-1x4j">Con <br> discapacidad</th>
                                <th class="tg-1x4j">Hablantes de <br> lenguas indígenas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraIII2[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraIII2[0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraIII2[0].Total}}</td>
                                <td class="tg-baqh">{{carreraIII2[0].Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraIII2[0].Etnia}}</td>
                            </tr>
                            </tbody>
                        </table>

                        <br>
                        3. Número de egresados y titulados en el <b>ciclo escolar 2019-2020</b>, por sexo y edad.
                       <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax" colspan="3"><b>Egresados</b></th>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax" colspan="3"><b>Titulados</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax">Hombres</th>
                                <th class="tg-0lax">Mujeres</th>
                                <th class="tg-0lax"><b>Total</b></th>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax">Hombres</th>
                                <th class="tg-0lax">Mujeres</th>
                                <th class="tg-0lax"><b>Total</b></th>

                            </tr>
                            <tr v-for="n in 7" :key="n">
                                <td class="tg-baql">{{carreraIII3[0][n-1].rangoEdad}}</td>
                                <td class="tg-baqh">{{carreraIII3[0][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraIII3[0][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraIII3[0][n-1].Total}}</td>
                                <th class="tg-0lax"></th>
                                <td class="tg-baqh">{{carreraIII3[1][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraIII3[1][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraIII3[1][n-1].Total}}</td>
                            </tr>
                            <tr>

                                <td class="tg-0lax"><b>{{carreraIII3[0][7].rangoEdad}}</b></td>
                                <td class="tg-baqh"><b>{{carreraIII3[0][7].Hombres}}</b></td>
                                <td class="tg-baqh"><b>{{carreraIII3[0][7].Mujeres}}</b></td>
                                <td class="tg-baqh"><b>{{carreraIII3[0][7].Total}}</b></td>
                                <th class="tg-0lax"></th>
                                <td class="tg-baqh"><b>{{carreraIII3[1][7].Hombres}}</b></td>
                                <td class="tg-baqh"><b>{{carreraIII3[1][7].Mujeres}}</b></td>
                                <td class="tg-baqh"><b>{{carreraIII3[1][7].Total}}</b></td>
                            </tr>

                            </tbody>
                            </table>
                            <br>
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
                carreraIII1: [],
                carreraIII2: [],
                carreraIII3: [],
            }
        },
        mounted() {
            console.log(this.progress)
            this.mostrar = 0
            this.$emit('update:progress', 1)
            console.log(this.progress)
            let ruta1 = 'carreraIII1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraIII1 = response.data;
                        console.log(this.carreraIII1)
                        });
            let ruta2 = 'carreraIII2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraIII2 = response.data;
                        console.log(this.carreraIII2)
                        });

            let ruta3 = 'carreraIII3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraIII3 = response.data;
                        console.log(this.carreraIII3)
                        this.$emit('update:progress', 0)
                        this.mostrar = 1
                        });

        },
        watch: {
            carrera: function(event) {
                console.log("CAMBIO CARRERA")
                this.mostrar = 0
                this.$emit('update:progress', 1)
                    let ruta1 = 'carreraIII1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraIII1 = response.data;
                        console.log(this.carreraIII1)
                        });
                    let ruta2 = 'carreraIII2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraIII2 = response.data;
                        console.log(this.carreraIII2)
                        });

                    let ruta3 = 'carreraIII3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraIII3 = response.data;
                        console.log(this.carreraIII3)
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
