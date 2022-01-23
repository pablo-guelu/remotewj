import {createApp} from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import router from './router';
import FormComponent from './components/FormComponent.vue';

const vueApp = createApp(FormComponent);

vueApp.use(VueAxios, axios);
vueApp.use(router);

vueApp.mount('#postJob');
