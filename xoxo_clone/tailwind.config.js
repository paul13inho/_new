/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {


        extend: {
            height: {
                'img': '500px'
            },
            width: {
                'img': '1000px',
            },
            maxWidth: {
                '1/2': '75%',
            },
            borderRadius: {
                'layout': '40px',
                'full': '9999px',
            },
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '5': '5px',
            '6': '6px',
            '8': '8px',
        },
        fontFamily: {
            logo: ['Orbitron', 'sans-serif'],
        },
    },
    plugins: [],
}
