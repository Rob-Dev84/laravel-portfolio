/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // "./resources/**/*.html",
    // "./*.html",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
}
