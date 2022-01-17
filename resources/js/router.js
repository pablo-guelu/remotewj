import { createRouter, createWebHistory } from 'vue-router';
import qs from 'qs';

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
        props: true,
    },
    {
        path: '/postJob',
        name: 'postJob',
        component: FormComponent,
        props: true,
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
        // props: route => ({queryParameters: route.query})
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,

    scrollBehavior (to, from, savedPosition) {
        return { top: 0 }
      },
    // parseQuery(query) {
    // return qs.parse(query);
    // },
    // stringifyQuery(query) {
    // const result = qs.stringify(query);

    // return result ? `?${result}` : '';
    // },
});

export default router;