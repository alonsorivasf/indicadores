<template>
    <div class="container">
        <div class="md-layout md-gutter">
        <div class="md-layout-item">
            <md-field>
            <label for="movie">Campus</label>
            <md-select v-model="campus" name="campus" id="campus">
                <md-option value="DMNCG">DMNCG</md-option>
                <md-option value="DMC">DMC</md-option>
                <md-option value="DMCU">DMCU</md-option>
                <md-option value="IADA">IADA</md-option>
                <md-option value="ICB">ICB</md-option>
                <md-option value="ICSA">ICSA</md-option>
                <md-option value="IIT">IIT</md-option>

            </md-select>
            </md-field>
        </div>
        </div>
        <div class="md-layout md-gutter">
        <div class="md-layout-item">
            <md-field>
            <label for="movie">Carrera</label>
            <md-select v-model="carrera" name="carrera" id="carrera">
                <md-option v-for="item in carreras" :key="item.descPrograma" :value="item.descPrograma">{{item.descPrograma}}</md-option>
            </md-select>
            </md-field>
        </div>
        </div>

        <div class="md-layout md-gutter">
        <div class="md-layout-item">
            <md-field>
            <label for="movie">Sección</label>
            <md-select v-model="seccion" name="seccion" id="seccion">
                <md-option v-for="item in secciones" :key="item.id" :value="item.id">{{item.desc}}</md-option>
            </md-select>
            </md-field>
        </div>
        </div>
        <progress-component v-if="progress==1"/>
        <carrera-seccionII v-if="seccion==2 " :campus="campus" :carrera="carrera" :progress.sync="progress"/>
        <carrera-seccionIII v-if="seccion==3 " :campus="campus" :carrera="carrera" :progress.sync="progress"/>
        <carrera-seccionV v-if="seccion==5 " :campus="campus" :carrera="carrera" :progress.sync="progress"/>
        <carrera-seccionVI v-if="seccion==6 " :campus="campus" :carrera="carrera" :progress.sync="progress"/>

        <div v-if="seccion==1 ">
            <h4> Información pre-capturada en el sistema de la SEP.</h4>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                progress:0,
                campus: null,
                carrera: '',
                country: null,
                font: null,
                carreras: [],
                seccion: '',
                secciones:[
                    {
                        id: 1,
                        desc: 'I. CARACTERÍSTICAS DE LA CARRERA'
                    },
                    {
                        id: 2,
                        desc: 'II. ALUMNOS DE PRIMER INGRESO DEL CICLO ANTERIOR'
                    },
                    {
                        id: 3,
                        desc: 'III. EGRESADOS Y TITULADOS'
                    },
                    {
                        id: 4,
                        desc: 'IV. MOVILIDAD DE ALUMNOS'
                    },
                    {
                        id: 5,
                        desc: 'V. ALUMNOS DE PRIMER INGRESO'
                    },
                    {
                        id: 6,
                        desc: 'VI. MATRÍCULA TOTAL DE LA CARRERA'
                    },
                    {
                        id: 7,
                        desc: 'VII. GASTO POR ALUMNO EN EDUCACIÓN'
                    }

                ],
            }
        },

        mounted() {
            console.log('Component mounted.')

        },
        watch: {
            campus: function(event) {
                console.log("CAMBIO CAMPUS")
                    let ruta2 = 'carrera/'.concat(this.campus).concat('/LICENCIATURA')
                        axios.get(ruta2).then((response) => {
                        this.carreras = response.data;
                        });
                    console.log(this.carreras)
                    this.carrera= ''
                    this.seccion= ''

            },

        },

        methods: {

        },



    }
</script>

<style>

    .md-menu-content.md-select-menu {
    width: auto;
    max-width: none;
    }
</style>
