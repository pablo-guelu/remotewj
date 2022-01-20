import vueApp from './app';
import renderVueComponentToString from 'vue-server-renderer/basic';

renderVueComponentToString(vueApp, (err, html) => {
    if (err) {
        throw new Error(err);
    }

    dispatch(html);
});