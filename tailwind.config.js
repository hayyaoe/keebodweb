/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/***/**/*.blade.php",
    "./resources/***/**/*.js",
    "./resources/***/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        archivo: ["Archivo Black", "sans-serif"],
      },
      fontSize: {
        "4.5xl": "2.5rem",
        "7.5xl": "5rem",
        "8.5xl": "6.25rem",
        "10xl": "9rem",
        "11xl": "12rem",
        "12xl": "15rem",
      },
    },
  },
  plugins: [],
};
