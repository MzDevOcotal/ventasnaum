import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
      // Indica la carpeta raíz de tu proyecto
  root: './',

  // Configura el directorio de salida para los archivos generados
  build: {
    outDir: 'public/build',
  },

  // Configura el servidor de desarrollo
  server: {
    // Indica el puerto en el que se ejecutará el servidor de desarrollo
    port: 3000,
  },

   plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
