require('./bootstrap');


import {createApp} from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';

import router from './router';


import App from './components/App.vue';

createApp({

    components: {
        App,
    }

}).use(VueAxios, axios).use(router).mount('#app');