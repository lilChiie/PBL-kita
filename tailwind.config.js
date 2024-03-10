/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
    },
    extend: {
      colors: {
        'nav': '#03428B',
        'fot': '#F2F2F2',
        'latar': '#C2D2DA',
        'grad' : '#6591B9',
        'gradb' : '#000347',
      },
      
    },
  },
  plugins: [],
}


