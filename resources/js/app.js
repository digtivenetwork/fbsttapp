import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, router } from '@inertiajs/vue3';
import { numberFormat } from './utils/NumberFormat.js';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import.meta.glob([
    '../images/**',
]);
import 'flowbite';

// import { initFlowbite } from 'flowbite';
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        // router.on('success', (event) => {
        //     initFlowbite()
        //   });
        const cApp = createApp({ render: () => h(App, props) });
        cApp.config.globalProperties.$numberFormat = numberFormat;
        cApp.use(plugin).use(ZiggyVue, Ziggy).mount(el);

        return cApp;
        // return createApp({ render: () => h(App, props) })
        //     .use(plugin)
        //     .use(ZiggyVue, Ziggy)
        //     .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
