require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');
Vue.config.devtools = false;
Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');

Vue.component('todo', require('./components/Todo.vue').default);
const app = new Vue({
el: '#app'
});
