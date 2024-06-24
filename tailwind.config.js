/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
      serif: ['inknut antiqua', 'sans-serif'],
      thin: ['poppins', 'sans-serif'],
    },
    extend: {
      colors: {
        'nav': '#03428B',
        'fot': '#F2F2F2',
        'latar': '#C2D2DA',
        'grad' : '#6591B9',
        'gradb' : '#000347',
        'wjudul' : "#06354B",
        'wform' : "#D9D9D9",
        'wform1' : '#CEE0F0'
      },
      aspectRatio: {
        '4/3': '4 / 3',
        '16/9': '16 / 9',
        '3/4': '3 / 4',
      },
    },
  },
  plugins: [
    require("daisyui"),
    require('flowbite/plugin'),
    
  ],
}
