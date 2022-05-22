const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        plugin(function ({addBase, theme}) {
            addBase({
                'h1': {fontSize: theme('fontSize.5xl')},
                'h2': {fontSize: theme('fontSize.2xl')},
                'h3': {fontSize: theme('fontSize.lg')},
            })
        })
    ],
};
