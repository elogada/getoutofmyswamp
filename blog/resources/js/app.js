require('./bootstrap');
window.Vue = require('vue').default;

Vue.component('main-title', require('./components/MainTitle.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);

const app = new Vue({
    el: '#app',
});
