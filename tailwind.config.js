/** @type {import('tailwindcss').Config} */
module.exports = {
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
