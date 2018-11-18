import Vue from 'vue';
import Example from './components/Example'
import Login from './components/Login'

/**
 * Create a fresh Vue Application instance
 *  yarn encore dev --watch
 */
new Vue({
    el: '#app',
    components: {Example, Login}
});