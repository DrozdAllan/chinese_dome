import './bootstrap';
import 'element-plus/dist/index.css';
import '../css/app.css';

import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/inertia-vue3'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers'
import {createPinia} from "pinia"
import ElementPlus from 'element-plus'

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(createPinia())
            .use(ElementPlus)
            .mount(el)
    },
})
    .then(r => null);
