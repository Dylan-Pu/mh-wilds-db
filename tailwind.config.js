/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        mh: ['"DFPWaWa"', 'sans-serif'], 
      },
      colors: {
        mhbg: "#0b0e17",
        mhborder: "#2d3748",
        mhgold: "#d4af37",
        mhred: "#c41e3a",
        mhblue: "#00b7eb",
      }
    },
  },
  plugins: [require('daisyui')],
  daisyui: {
    themes: ["dark"],
  },
}