import path from "path";

export default defineNuxtConfig({
  
  alias: {
    '@': path.resolve(__dirname, 'src')
  },
  css: [
    '~/assets/style.css'
  ],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
})
