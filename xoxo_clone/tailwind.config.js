/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        borderRadius: {
            'large': '75px',
        },
        extend: {},
    },
    plugins: [],
}
