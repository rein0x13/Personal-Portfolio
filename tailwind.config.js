/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'rein-dark': "url('/img/background-darkened.jpg')"
      }
    },
    fontFamily: {
      sans: [
        'poppins, sans-serif',
      ],
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
  darkMode: 'class',
}
