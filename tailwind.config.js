/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: "tw-",
  content: ["./src/**/*.{html,js}", "*.php", "**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#0a3b3f",
      },
    },
  },
  plugins: [],
};
