import { createRouter, createWebHistory } from 'vue-router';

import DisplaylistComponent from './components/DisplaylistComponent';
import FormComponent from './components/FormComponent';
import JobDetailComponent from './components/JobDetailComponent';
import SearchComponent from './components/SearchComponent';
import MeilisearchComponent from './components/MeilisearchComponent';

const routes = [
    {
        path: '/',
        name: 'list',
        component: DisplaylistComponent,
    },
    {
        path: '/postJob',
        name: 'postJob',
        component: FormComponent,
    },
    {
        path: '/job/:id',
        name: 'jobDetail',
        component: JobDetailComponent,
        props: true,
    },
    {
        path: '/search',
        name: 'search',
        component: MeilisearchComponent,
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,

    scrollBehavior (to, from, savedPosition) {
        return { top: 0 }
      },
});

export default router;