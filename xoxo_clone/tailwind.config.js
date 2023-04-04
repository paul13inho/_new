/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        borderRadius: {
            'layout': '40px',
            'full': '9999px',
        },
        extend: {
            height: {
                "img": "750px",
            }
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
        }
    },
    plugins: [],
}
