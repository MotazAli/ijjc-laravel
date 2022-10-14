/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  darkMode: "class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'lexend-mega': ['Lexend Mega'] 
      },
      colors: {
        primary: {"50":"#fef2f2","100":"#fee2e2","200":"#fecaca","300":"#fca5a5","400":"#f87171","500":"#ef4444","600":"#dc2626","700":"#b91c1c","800":"#991b1b","900":"#7f1d1d"},
        themes : {
          bgLight:"#FFFFFF",
          bgDark:"#000000",
          textLight:"#111827",
          textDark:"#FFFFFF",
          borderLight:"#E5E7EB",
          borderDark:"#9CA3AF"
        },
        
        
      },
      
    },
    screens: {
      'xs': {'min': '300px', 'max': '475px'},
      ...defaultTheme.screens,
    },
  },
  plugins: [],
}
