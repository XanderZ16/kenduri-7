/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./api/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#00140E',
                'secondary': '#DDAC17'
            },
            fontFamily: {
                'montserrat': ['Montserrat', 'sans-serif'],
                'inter': ['Inter', 'sans-serif'],
                'montaga': ['Montaga', 'sans-serif'],
                'raleway': ['Raleway', 'sans-serif'],
                'poppins': ['Poppins', 'sans-serif'],
                'fraunces': ['Fraunces', 'serif'],
                'griffiths': ['Griffiths', 'serif'],
                'candlescript': ['Candlescript', 'serif'],
                'stretch': ['Stretch', 'serif'],
                'grifter': ['Grifter', 'serif'],
            }
        },
    },
    plugins: []
}
