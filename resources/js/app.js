require('./bootstrap');
import Vue from 'vue';
import ContactForm from './components/ContactForm.vue';
var app = new Vue({
    el: '#app',
    components: {
        ContactForm: ContactForm
    },
});
