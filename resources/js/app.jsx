import './bootstrap'
import Vue from 'vue'
import Sample from './components/Sample'

Vue.component('draggable',require('./components/Draggable.vue').default);

const app = new Vue({
    el: '#app',
    components: {
        Sample
    }
});
