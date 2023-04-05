const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    corePlugins: {
        container:false
      },
    safelist: [
        'bg-pink-600',
        'bg-blue-600',
        'bg-indigo-600',
        'bg-purple-600',
        'bg-red-600',
        'bg-yellow-600',
        'bg-green-600',
    ],

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
