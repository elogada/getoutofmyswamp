require('./bootstrap');
window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-title', require('./components/MainTitle.vue').default);


const app = new Vue({
    el: '#app',
});
