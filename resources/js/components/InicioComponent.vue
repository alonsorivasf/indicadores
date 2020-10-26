<template>
    <center>
        <div class="container-degradado">

            <p id="direccion" class="text-white" style="background-color:#003CA6;font-family:inherit;font-size:4px;"> &nbsp; &nbsp;</p>
            <p id="direccion" class="text-white" style="background-color:#003CA6;font-family:inherit;font-size:16px;">E S T A D Í S T I C A  &nbsp; &nbsp; D E &nbsp; &nbsp; E D U C A C I Ó N &nbsp; &nbsp; S U P E R I O R &nbsp; &nbsp; 9 1 1 </p>
            <p id="direccion" class="text-white" style="background-color:#003CA6;font-family:inherit;font-size:14px;">&nbsp;</p>

            <md-tabs class="md-primary" md-alignment="centered">
                <md-tab v-on:click="modulo=0" id="tab-Institución" md-label="911.10 | Institución" md-icon="home"></md-tab>
                <md-tab v-on:click="modulo=1" id="tab-Escuela" md-label="911.9 | Escuela" md-icon="business"></md-tab>
                <md-tab v-on:click="modulo=2" id="tab-Carrera" md-label="911.9A | Carrera" md-icon="local_library"></md-tab>
                <md-tab v-on:click="modulo=3" id="tab-Posgrado" md-label="911.9B | Posgrado" md-icon="follow_the_signs"></md-tab>
                <!--
                <md-tab v-on:click="modulo=4" id="tab-Infraestructura" md-label="911.9I | Infraestructura" md-icon="leaderboard"></md-tab>
                <md-tab v-on:click="modulo=5" id="tab-Tecnologías" md-label="Anexo de Tecnologías" md-icon="cast_for_education"></md-tab>
                -->
            </md-tabs>


            <p id="direccion" class="text-white" style="background-color:#003CA6;font-family:inherit;font-size:14px;">&nbsp;</p>
            <br><br>

            <div style="width:90%">
                <institucion-component v-if="modulo==0"/>
                <escuela-component v-if="modulo==1"/>
                <carrera-component v-if="modulo==2"/>
                <posgrado-component v-if="modulo==3"/>
                <br><br>
            </div>

        </div>
    </center>
</template>

<script>

    export default {
       data() {
            return{
                opcion: 0,
                modulo: 0,
                contador: 0,
                banner: [],
            }
        },

        mounted() {
           // let ruta2 = 'coordinadores/contador'
           // axios.get(ruta2).then((response) => {
          //    this.contador = response.data;
          //  });

         //   let ruta = 'coordinadores/banner'
         //   axios.get(ruta).then((response) => {
         //     this.banner = response.data;
         //   });
        },
         methods: {
            opciones(param){
                this.opcion = param
                console.log(param)
            },
            modulos(param){
                this.modulo = param
                console.log(param)
            },
        }

    }

</script>


<style lang="scss" scoped>
    .well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
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
    .well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, .15);
    }
    .well-lg {
    padding: 24px;
    border-radius: 6px;
    }
    .well-sm {
    padding: 9px;
    border-radius: 3px;
    }
    .label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
    }
    .legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
    }
  .md-content {
    width: 60%;
    //height: 60%px;
    margin: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .md-tabs + .md-tabs {
    margin-top: 24px;
  }

    /* Import Google Font */
    @import url(https://fonts.googleapis.com/css?family=Nunito+Sans);

    /* RESET */
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }

    /* STYLING */
    .container {
        max-width: 100%;
        min-width: 420px;
        margin: 40px auto;
        font-family: "Nunito Sans", Arial, Helvetica, sans-serif;
        color: #888;
        //height: 100vh;

    }
    .container-degradado {
        max-width: 100%;
        min-width: 420px;
        margin: 40px auto;
        font-family: "Nunito Sans", Arial, Helvetica, sans-serif;
        color: rgb(44, 44, 44);
        //height: 100vh;
       // background-color: #53565A; /* For browsers that do not support gradients */
        //background-image: linear-gradient(rgb(56, 56, 56), #53565A); /* Standard syntax (must be last) */

    }

    /* Style the tabs */
    .tabs {
        overflow: hidden;
        margin-left: 20px;
        margin-top: 1px; // hide bottom border
        margin-bottom: 0px; // hide bottom border

    }

    .tabs ul {
        list-style-type: none;
        margin-left: 20px;
    }

    .tabs a{
        float: left;
        cursor: pointer;
        padding: 12px 24px;
        transition: background-color 0.2s;
        border: 1px solid #ccc;
        border-right: none;
        background-color: #ffffff;
        border-radius: 15px 15px 0px 0;
        font-weight: bold;
    }
    .tabs a:last-child {
        border-right: 1px solid #ccc;
    }

    /* Change background color of tabs on hover */
    .tabs a:hover {
        background-color: rgb(31, 60, 187);
        color: #fff;
    }

    /* Styling for active tab */
    .tabs a.active {
        background-color: rgb(31, 60, 187);
        color: #fff;
        //border-bottom: 2px solid #fff;
        cursor: default;
    }

    /* Style the tab content */
    .tabcontent {
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 3px 3px 6px #e1e1e1
    }
    .md-card {
        width: 260px;
        //height: 150px;
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }

</style>
