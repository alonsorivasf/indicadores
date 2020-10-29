<template>
        <div class="row justify-content-center" v-if="mostrar==1">
            <md-button class="md-dense md-raised md-primary" @click="print"> <md-icon>print</md-icon> Imprimir Sección</md-button>
            <div class="col-xl-12" id="imprimir">
                <div class="card">
                    <div class="card-header"><b>VI. MATRÍCULA TOTAL DE LA CARRERA (HASTA EL 30 DE SEPTIEMBRE)</b> <br>
                        <b>Campus: </b>{{campus}} <br><b>Programa:</b> {{carrera}}
                    </div>

                    <div class="card-body">
                        1. Total de alumnos inscritos en la carrera al inicio del <b> ciclo escolar 2020-2021</b>,
                        por grado de avance en años (considerando las tablas de equivalencias según la duración de la carrera),
                        por sexo, con discapacidad, nacidos fuera de México y hablantes de lengua indígena.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-0lax"> </th>
                                <th class="tg-0lax">Hombres</th>
                                <th class="tg-0lax">Mujeres</th>
                                <th class="tg-0lax"><b>Total</b></th>
                                <th class="tg-0lax">Con<br>Discapacidad</th>
                                <th class="tg-0lax">Nacidos<br>fuera de<br>México</th>
                                <th class="tg-0lax">Hablantes de<br>Lenguas Indígenas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="tg-0lax">Primero</th>
                                <td class="tg-baqh">{{carreraVI1[0][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[0][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[0][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[0][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[0][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[0][0].Lenguas_Indigenas}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Segundo</th>
                                <td class="tg-baqh">{{carreraVI1[1][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[1][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[1][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[1][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[1][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[1][0].Lenguas_Indigenas}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Tercero</th>
                                <td class="tg-baqh">{{carreraVI1[2][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[2][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[2][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[2][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[2][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[2][0].Lenguas_Indigenas}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Cuarto</th>
                                <td class="tg-baqh">{{carreraVI1[3][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[3][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[3][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[3][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[3][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[3][0].Lenguas_Indigenas}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Quinto</th>
                                <td class="tg-baqh">{{carreraVI1[4][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[4][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[4][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[4][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[4][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[4][0].Lenguas_Indigenas}}</td>
                            </tr>
                            <br>
                            <tr>
                                <th class="tg-0lax"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraVI1[5][0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI1[5][0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI1[5][0].Total}}</td>
                                <td class="tg-baqh">{{carreraVI1[5][0].Con_Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraVI1[5][0].Nacidos_fuera_de_México}}</td>
                                <td class="tg-baqh">{{carreraVI1[5][0].Lenguas_Indigenas}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>

                        2. Total de alumnos inscritos en la carrera del <b>ciclo escolar 2020-2021</b>, según su lugar de residencia y lugar de nacimiento.
                        <table class="tg-rounded">
                            <th class="th-negro">Alumnos según su lugar de residencia</th>
                        </table>

                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-0lax">Aguascalientes</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Nayarit</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Baja California</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Nuevo León</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Baja California Sur</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Oaxaca</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Campeche</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Puebla</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Coahuila</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Querétaro</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Colima</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Quintana Roo</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Chiapas</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">San Luis Pototsí</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Chihuahua</th>
                                <td class="tg-baqh">{{carreraVI2[0].Total}}</td>
                                <th class="tg-0lax">Sinaloa</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Ciudad de México</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Sonora</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Durango</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Tabasco</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Guanajuato</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Tamaulipas</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Guerrero</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Tlaxcala</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Hidalgo</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Veracruz</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Jalisco</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Yucatán</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">México</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Zacatecas</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Michoacán</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax">Fuera del País</th>
                                <td class="tg-baqh">0</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Morelos</th>
                                <td class="tg-baqh">0</td>
                                <th class="tg-0lax"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraVI2[0].Total}}</td>
                            </tr>
                            </tbody>
                        </table>

                        <br>
                        <table class="tg-rounded">
                            <th class="th-negro">Alumnos según su lugar de nacimiento</th>
                        </table>
                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-0lax">En la entidad</th>
                                <td class="tg-baqh">{{carreraVI2[0].En_la_entidad}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">En otra entidad federativa</th>
                                <td class="tg-baqh">{{carreraVI2[0].Otra_entidad}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Estados Unidos</th>
                                <td class="tg-baqh">{{carreraVI2[0].Estados_Unidos}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Canadá</th>
                                <td class="tg-baqh">{{carreraVI2[0].Canadá}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Centro América</th>
                                <td class="tg-baqh">{{carreraVI2[0].Centro_América}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Sudamérica</th>
                                <td class="tg-baqh">{{carreraVI2[0].Sudamérica}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">África</th>
                                <td class="tg-baqh">{{carreraVI2[0].África}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Asia</th>
                                <td class="tg-baqh">{{carreraVI2[0].Asia}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Europa</th>
                                <td class="tg-baqh">{{carreraVI2[0].Europa}}</td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Oceanía</th>
                                <td class="tg-baqh">{{carreraVI2[0].Oceanía}}</td>
                            </tr>
                            <br>
                            <tr>
                                <th class="tg-0lax"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraVI2[0].Total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>

                        <br>
                        3. Total de alumnos inscritos en la carrera al inicio del ciclo <b>2020-2021</b>; desglóselos por <b>sexo, edad y grado de avance.</b>
                        Considere por separado a los alumnos primer ingreso y a los de reingreso a primer grado.
                       <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax" colspan="2">1er. Ingreso a<br>primer grado</th>
                                <th class="tg-0lax" colspan="2">Reingreso a<br> primer grado</th>
                                <th class="tg-0lax" colspan="2">Segundo</th>
                                <th class="tg-0lax" colspan="2">Tercero</th>
                                <th class="tg-0lax" colspan="2">Cuarto</th>
                                <th class="tg-0lax" colspan="2">Quinto</th>
                                <th class="tg-0lax" colspan="2">Sexto</th>
                                <th class="tg-0lax" colspan="2"><b>Total</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="tg-0lax"></th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                                <th class="tg-0lax">Hombre</th>
                                <th class="tg-0lax">Mujer</th>
                            </tr>
                            <tr v-for="n in 17" :key="n">
                                <td class="tg-baql">{{carreraVI3[0][n-1].rangoEdad}}</td>
                                <td class="tg-baqh">{{carreraVI3[0][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[0][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[1][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[1][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[2][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[2][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[3][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[3][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[4][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[4][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[5][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[5][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[6][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[6][n-1].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraVI3[7][n-1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI3[7][n-1].Mujeres}}</td>
                            </tr>
                            </tbody>
                            </table>
                            <br>
                        4. Total de alumnos inscritos al inicio del ciclo escolar <b>2020-2021</b> por <b>tipo de discapacidad</b> y sexo.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-baql"><b>Tipo de discapacidad</b></th>
                                <th class="tg-0lax">Hombres</th>
                                <th class="tg-0lax">Mujeres</th>
                                <th class="tg-0lax"><b>Total</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="tg-baql">Discapacidad física / motriz</th>
                                <td class="tg-baqh">{{carreraVI4[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[0].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[0].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-baql">Discapacidad intelectual</th>
                                <td class="tg-baqh">{{carreraVI4[1].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[1].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[1].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-baql">Discapacidad múltiple</th>
                                <td class="tg-baqh">{{carreraVI4[2].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[2].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[2].Total}}</b></td>
                            </tr>

                            <tr>
                                <th class="tg-baql" colspan="4">Discapacidad auditiva:</th>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Hipoacusia</th>
                                <td class="tg-baqh">{{carreraVI4[3].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[3].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[3].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Sordera</th>
                                <td class="tg-baqh">{{carreraVI4[4].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[4].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[4].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-baql" colspan="4">Discapacidad visual:</th>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Baja visión</th>
                                <td class="tg-baqh">{{carreraVI4[5].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[5].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[5].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-0lax">Ceguera</th>
                                <td class="tg-baqh">{{carreraVI4[6].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[6].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[6].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-baql">Discapacidad psicosocial</th>
                                <td class="tg-baqh">{{carreraVI4[7].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[7].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[7].Total}}</b></td>
                            </tr>
                            <tr>
                                <th class="tg-baql"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraVI4[8].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI4[8].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI4[8].Total}}</b></td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        5. Total de alumnos inscritos al inicio del ciclo escolar <b>2020-2021</b> que son <b>hablantes de lengua indígena</b>, desglóselos por sexo e indique cuántos de ellos presentan discapacidad.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-0lax">Hombres</th>
                                <th class="tg-0lax">Mujeres</th>
                                <th class="tg-0lax"><b>Total</b></th>
                                <th class="tg-0lax">Con <br>discapacidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraVI5[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraVI5[0].Mujeres}}</td>
                                <td class="tg-baqh"><b>{{carreraVI5[0].Total}}</b></td>
                                <td class="tg-baqh">{{carreraVI5[0].conDiscapacidad}}</td>
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
        props: ['campus','carrera'],

        data() {
            return{
                mostrar: 0,
                carreraVI1: [],
                carreraVI2: [],
                carreraVI3: [],
                carreraVI4: [],
                carreraVI5: [],
            }
        },
        mounted() {
            this.mostrar = 0
            this.$emit('update:progress', 1)
            let ruta1 = 'carreraVI1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraVI1 = response.data;
                        console.log(this.carreraVI1)
                        });
            let ruta2 = 'carreraVI2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraVI2 = response.data;
                        console.log(this.carreraVI2)
                        });

            let ruta3 = 'carreraVI3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraVI3 = response.data;
                        console.log(this.carreraVI3)
                        this.$emit('update:progress', 0)
                        this.mostrar = 1

                        });
            let ruta4 = 'carreraVI4/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta4).then((response) => {
                        this.carreraVI4 = response.data;
                        console.log(this.carreraVI4)
                        });
            let ruta5 = 'carreraVI5/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta5).then((response) => {
                        this.carreraVI5 = response.data;
                        console.log(this.carreraVI5)
                        });

        },
        watch: {
            carrera: function(event) {
                this.mostrar = 0
                this.$emit('update:progress', 1)
                console.log("CAMBIO CARRERA")
                    let ruta1 = 'carreraVI1/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta1).then((response) => {
                        this.carreraVI1 = response.data;
                        console.log(this.carreraVI1)
                        });
                    let ruta2 = 'carreraVI2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraVI2 = response.data;
                        console.log(this.carreraVI2)
                        });

                    let ruta3 = 'carreraVI3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraVI3 = response.data;
                        this.$emit('update:progress', 0)
                        this.mostrar = 1

                        });
                    let ruta4 = 'carreraVI4/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta4).then((response) => {
                        this.carreraVI4 = response.data;
                        console.log(this.carreraVI4)
                        });
                    let ruta5 = 'carreraVI5/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta5).then((response) => {
                        this.carreraVI5 = response.data;
                        console.log(this.carreraVI5)
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
    font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{background-color:#f0f0f0;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
    font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:center;}
    .tg .tg-baql{background-color:#005eac;color:#ffffff;text-align:left;vertical-align:center;}
    .tg .tg-0lax{background-color:#005eac;color:#ffffff;text-align:center;vertical-align:center}


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
