/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


//import Vuetify from 'vuetify';
import Vue from 'vue'

//import 'vuetify/dist/vuetify.min.css'

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'


//Vue.use(Vuetify);
Vue.use(VueMaterial)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('progress-component', require('./components/ProgressComponent.vue').default);
Vue.component('inicio-component', require('./components/InicioComponent.vue').default);

//Componentes Carrera
Vue.component('carrera-component', require('./components/carrera/CarreraComponent.vue').default);
Vue.component('carrera-seccionII', require('./components/carrera/SeccionIIComponent.vue').default);
Vue.component('carrera-seccionIII', require('./components/carrera/SeccionIIIComponent.vue').default);
Vue.component('carrera-seccionV', require('./components/carrera/SeccionVComponent.vue').default);
Vue.component('carrera-seccionVI', require('./components/carrera/SeccionVIComponent.vue').default);

//Componentes Posgrado
Vue.component('posgrado-component', require('./components/posgrado/PosgradoComponent.vue').default);

//Componentes Instituto
Vue.component('institucion-component', require('./components/institucion/InstitucionComponent.vue').default);

//Componentes Escuela
Vue.component('escuela-component', require('./components/escuela/EscuelaComponent.vue').default);

//Para imprimir en PDF
import VueHtmlToPaper from 'vue-html-to-paper';
const options = {
  name: '_blank',
  specs: [
    'fullscreen=yes',
    'titlebar=yes',
    'scrollbars=yes'
  ],
  styles: [
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://unpkg.com/kidlat-css/css/kidlat.css'
  ]
}
Vue.use(VueHtmlToPaper, options);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//const vuetify = new Vuetify();

const app = new Vue({
    el: '#app',
  //  vuetify
});
