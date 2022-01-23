import {createApp} from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import InstantSearch from 'vue-instantsearch/vue3/es';
import router from './router';
import MeilisearchComponent from './components/MeilisearchComponent.vue';

const vueApp = createApp(MeilisearchComponent);

vueApp.use(VueAxios, axios);
vueApp.use(InstantSearch);
vueApp.use(router);

vueApp.mount('#searchJob');

