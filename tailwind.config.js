/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./Recursos/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        diver: 'Diver, ui-serif',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

