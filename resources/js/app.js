require('./bootstrap');

import {createApp} from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import InstantSearch from 'vue-instantsearch/vue3/es';
// import InstantSearch from 'vue-instantsearch/vue3/es/src/components/InstantSearch';

import router from './router';


import App from './components/App.vue';

const vueApp = createApp(App);

vueApp.use(VueAxios, axios);
vueApp.use(router);

vueApp.use(InstantSearch);


vueApp.mount('#app');

