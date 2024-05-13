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
    screens: {
      "-2xl": { max: "1535px" },
      // => @media (max-width: 1535px) { ... }

      "-xl": { max: "1279px" },
      // => @media (max-width: 1279px) { ... }

      "-lg": { max: "1023px" },
      // => @media (max-width: 1023px) { ... }

      "-md": { max: "767px" },
      // => @media (max-width: 767px) { ... }

      "-sm": { max: "639px" },
      // => @media (max-width: 639px) { ... }
      //
      "sm": "640px",
      // => @media (min-width: 640px) { ... }

      "md": "768px",
      // => @media (min-width: 768px) { ... }

      "lg": "1024px",
      // => @media (min-width: 1024px) { ... }

      "xl": "1280px",
      // => @media (min-width: 1280px) { ... }

      "2xl": "1536px",
      // => @media (min-width: 1536px) { ... }
    },
  },
  plugins: [],
};
