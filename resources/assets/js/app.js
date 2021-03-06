
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('topo', require('./components/Topo.vue').default);
Vue.component('painel', require('./components/Painel.vue').default);
Vue.component('caixa', require('./components/Caixa.vue').default);
Vue.component('pagina', require('./components/Pagina.vue').default);
Vue.component('tabela-lista', require('./components/TabelaLista.vue').default);
const app = new Vue({
    el: '#app'
});
