/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        dropShadow: {
          'custom-black': '0 1px 1px #0000009c',
        },
      },
    },
    plugins: [],
  }