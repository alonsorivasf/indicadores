<template>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header"><b>V. ALUMNOS DE PRIMER INGRESO</b> <br>
                        <b>Campus: </b>{{campus}} <br><b>Programa:</b> {{carrera}}
                    </div>

                    <div class="card-body">
                        1. Fecha de inicio de cursos del <b> ciclo escolar 2020-2021</b>
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-baqh">Año</th>
                                <th class="tg-baqh">Mes</th>
                                <th class="tg-baqh">Día</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraV1[0].ano}}</td>
                                <td class="tg-baqh">{{carreraV1[0].mes}}</td>
                                <td class="tg-baqh">{{carreraV1[0].dia}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        2. Número de <b>lugares ofertados</b> para primer ingreso del <b>ciclo escolar 2020-2021</b>
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-baqh">Lugares Ofertados</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraV2[0].Lugares}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        3. Número de <b> solicitudes recibidas</b> para ingresar a la carrera. Desglóselos por sexo, con discapacidad y hablantes de lengua indígena.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-baqh">Hombres</th>
                                <th class="tg-baqh">Mujeres</th>
                                <th class="tg-baqh">Total</th>
                                <th class="tg-baqh">Con <br> Discapacidad</th>
                                <th class="tg-baqh">Hablantes de <br> Lenguas Indígenas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraV3[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraV3[0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraV3[0].Total}}</td>
                                <td class="tg-baqh">{{carreraV3[0].Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraV3[0].LenguasIndigenas}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        4. Número de alumnos de <b> primer ingreso </b> a la carrera en el <b>ciclo escolar 2020-2021</b>.Desglóselos por sexo, con discapacidad y hablantes de lengua indígena.
                        <table class="tg">
                            <thead>
                            <tr>
                                <th class="tg-baqh">Hombres</th>
                                <th class="tg-baqh">Mujeres</th>
                                <th class="tg-baqh">Total</th>
                                <th class="tg-baqh">Con <br> Discapacidad</th>
                                <th class="tg-baqh">Hablantes de <br> Lenguas Indígenas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-baqh">{{carreraV4[0].Hombres}}</td>
                                <td class="tg-baqh">{{carreraV4[0].Mujeres}}</td>
                                <td class="tg-baqh">{{carreraV4[0].Total}}</td>
                                <td class="tg-baqh">{{carreraV4[0].Discapacidad}}</td>
                                <td class="tg-baqh">{{carreraV4[0].LenguasIndigenas}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        5. Número de alumnos de <b>primer ingreso</b> de la carrera del <b>ciclo escolar 2020-2021</b>, según el lugar donde realizaron los estudios de bachillerato.
                        <b> Alumnos de primer ingreso según el lugar donde estudiaron el bachillerato</b>
                        <table class="tg-rounded">
                            <th class="th-negro">En el País</th>
                        </table>

                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-baqh">Aguascalientes</th>
                                <td class="tg-baqh">{{carreraV5[0].AGUASCALIENTES}}</td>
                                <th class="tg-baqh">Morelos</th>
                                <td class="tg-baqh">{{carreraV5[0].MORELOS}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Baja California</th>
                                <td class="tg-baqh">{{carreraV5[0].BAJA_CALIFORNIA}}</td>
                                <th class="tg-baqh">Nayarit</th>
                                <td class="tg-baqh">{{carreraV5[0].NAYARIT}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Baja California Sur</th>
                                <td class="tg-baqh">{{carreraV5[0].BAJA_CALIFORNIA_SUR}}</td>
                                <th class="tg-baqh">Nuevo León</th>
                                <td class="tg-baqh">{{carreraV5[0].NUEVO_LEÓN}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Coahuila</th>
                                <td class="tg-baqh">{{carreraV5[0].COAHUILA}}</td>
                                <th class="tg-baqh">Puebla</th>
                                <td class="tg-baqh">{{carreraV5[0].PUEBLA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Colima</th>
                                <td class="tg-baqh">{{carreraV5[0].COLIMA}}</td>
                                <th class="tg-baqh">Querétaro</th>
                                <td class="tg-baqh">{{carreraV5[0].QUERÉTARO}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Chiapas</th>
                                <td class="tg-baqh">{{carreraV5[0].CHIAPAS}}</td>
                                <th class="tg-baqh">Quintana Roo</th>
                                <td class="tg-baqh">{{carreraV5[0].QUINTANA_ROO}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Chihuahua</th>
                                <td class="tg-baqh">{{carreraV5[0].CHIHUAHUA}}</td>
                                <th class="tg-baqh">San Luis Potosí</th>
                                <td class="tg-baqh">{{carreraV5[0].SAN_LUIS_POTOSÍ}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Ciudad de México</th>
                                <td class="tg-baqh">{{carreraV5[0].CIUDAD_DE_MÉXICO}}</td>
                                <th class="tg-baqh">Sinaloa</th>
                                <td class="tg-baqh">{{carreraV5[0].SINALOA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Durango</th>
                                <td class="tg-baqh">{{carreraV5[0].DURANGO}}</td>
                                <th class="tg-baqh">Sonora</th>
                                <td class="tg-baqh">{{carreraV5[0].SONORA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Guanajuato</th>
                                <td class="tg-baqh">{{carreraV5[0].GUANAJUATO}}</td>
                                <th class="tg-baqh">Tabasco</th>
                                <td class="tg-baqh">{{carreraV5[0].TABASCO}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Guerrero</th>
                                <td class="tg-baqh">{{carreraV5[0].GUERRERO}}</td>
                                <th class="tg-baqh">Tamaulipas</th>
                                <td class="tg-baqh">{{carreraV5[0].TAMAULIPAS}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Hidalgo</th>
                                <td class="tg-baqh">{{carreraV5[0].HIDALGO}}</td>
                                <th class="tg-baqh">Tlaxcala</th>
                                <td class="tg-baqh">{{carreraV5[0].TLAXCALA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Jalisco</th>
                                <td class="tg-baqh">{{carreraV5[0].JALISCO}}</td>
                                <th class="tg-baqh">Veracruz</th>
                                <td class="tg-baqh">{{carreraV5[0].VERACRUZ}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">México</th>
                                <td class="tg-baqh">{{carreraV5[0].MÉXICO}}</td>
                                <th class="tg-baqh">Yucatán</th>
                                <td class="tg-baqh">{{carreraV5[0].YUCATÁN}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Michoacán</th>
                                <td class="tg-baqh">{{carreraV5[0].MICHOACÁN}}</td>
                                <th class="tg-baqh">Zacatecas</th>
                                <td class="tg-baqh">{{carreraV5[0].ZACATECAS}}</td>
                            </tr>
                            </tbody>
                        </table>

                        <br>
                        <table class="tg-rounded">
                            <th class="th-negro">Fuera de México</th>
                        </table>
                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-baqh">Estados Unidos</th>
                                <td class="tg-baqh">{{carreraV5[0].ESTADOS_UNIDOS}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Canadá</th>
                                <td class="tg-baqh">{{carreraV5[0].CANADÁ}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Centro América y el Caribe</th>
                                <td class="tg-baqh">{{carreraV5[0].CENTRO_AMÉRICA_Y_EL_CARIBE}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Sudamérica</th>
                                <td class="tg-baqh">{{carreraV5[0].SUDAMÉRICA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">África</th>
                                <td class="tg-baqh">{{carreraV5[0].ÁFRICA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Asia</th>
                                <td class="tg-baqh">{{carreraV5[0].ASIA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Europa</th>
                                <td class="tg-baqh">{{carreraV5[0].EUROPA}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Oceanía</th>
                                <td class="tg-baqh">{{carreraV5[0].OCEANÍA}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-baqh"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraV5[0].Total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        6. Número de alumnos de <b>primer ingreso</b> a la carrera del <b>ciclo escolar 2020-2021</b>, según su lugar de nacimiento.
                        <br><b>Alumnos de primer ingreso, según su lugar de nacimiento</b>
                        <table class="tg">
                            <tbody>
                            <tr>
                                <th class="tg-baqh">En la entidad</th>
                                <td class="tg-baqh">{{carreraV6[0].En_la_entidad}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">En otra entidad federativa</th>
                                <td class="tg-baqh">{{carreraV6[0].En_otra_entidad_federativa}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Estados Unidos</th>
                                <td class="tg-baqh">{{carreraV6[0].Estados_Unidos}}</td>
                            </tr>
                            <tr>
                                <th class="tg-baqh">Otro País</th>
                                <td class="tg-baqh">{{carreraV6[0].Otro_país}}</td>
                            </tr>
                            <br>
                            <tr>
                                <th class="tg-baqh"><b>Total</b></th>
                                <td class="tg-baqh">{{carreraV6[0].Total}}</td>
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
                carreraV1:[],
                carreraV2: [],
                carreraV3: [],
                carreraV4: [],
                carreraV5: [],
                carreraV6: [],
            }
        },
        mounted() {
            let ruta1 = 'carreraV1/'
                        axios.get(ruta1).then((response) => {
                        this.carreraV1 = response.data;
                        console.log(this.carreraV1)
                        });
            let ruta2 = 'carreraV2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraV2 = response.data;
                        console.log(this.carreraV2)
                        });

            let ruta3 = 'carreraV3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraV3 = response.data;
                        console.log(this.carreraV3)
                        });
            let ruta4 = 'carreraV4/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta4).then((response) => {
                        this.carreraV4 = response.data;
                        console.log(this.carreraV4)
                        });
            let ruta5 = 'carreraV5/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta5).then((response) => {
                        this.carreraV5 = response.data;
                        console.log(this.carreraV5)
                        });
            let ruta6 = 'carreraV6/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta6).then((response) => {
                        this.carreraV6 = response.data;
                        console.log(this.carreraV5)
                        });


        },
        watch: {
            carrera: function(event) {
                console.log("CAMBIO CARRERA")
                     let ruta1 = 'carreraV1/'
                        axios.get(ruta1).then((response) => {
                        this.carreraV1 = response.data;
                        console.log(this.carreraV1)
                        });
                    let ruta2 = 'carreraV2/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta2).then((response) => {
                        this.carreraV2 = response.data;
                        console.log(this.carreraV2)
                        });

                    let ruta3 = 'carreraV3/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta3).then((response) => {
                        this.carreraV3 = response.data;
                        console.log(this.carreraV3)
                        });
                    let ruta4 = 'carreraV4/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta4).then((response) => {
                        this.carreraV4 = response.data;
                        console.log(this.carreraV4)
                        });
                    let ruta5 = 'carreraV5/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta5).then((response) => {
                        this.carreraV5 = response.data;
                        console.log(this.carreraV5)
                        });
                    let ruta6 = 'carreraV6/'.concat(this.campus).concat('/').concat(this.carrera)
                        axios.get(ruta6).then((response) => {
                        this.carreraV6 = response.data;
                        console.log(this.carreraV5)
                        });

            },
        },
        methods: {

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
