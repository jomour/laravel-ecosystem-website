import { createApp } from "vue";

import '@fortawesome/fontawesome-free/css/all.min.css';

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'


const app = createApp({});
const vuetify = createVuetify({
  components,
  directives
})

// Crée une fonction asynchrone pour charger et enregistrer les composants
async function loadComponents() {
    const modules = import.meta.glob('/resources/vue/**/**/*.vue');
  
    for (const path in modules) {
      const module = await modules[path](); // Attends la résolution de la promesse
      const componentName = path.split('/').pop().replace(/\.\w+$/, '');
      // Convertit kebab-case et snake_case en PascalCase pour le nom du composant
      const formattedName = componentName.replace(/-(\w)|_(\w)/g, (_, p1, p2) => (p1 || p2).toUpperCase());
      app.component(formattedName, module.default);
    }
  }

loadComponents().then(() => {
  app.use(vuetify).mount("#app");
});

