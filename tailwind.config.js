const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            margin: {
                '18': '4.5rem'
            },
            minHeight: (theme) => ({ ...theme('spacing') }),
            minWidth: (theme) => ({ ...theme('spacing'), ...theme('maxWidth') }),
        },
    },
    variants: {
        extend: {
          opacity: ['disabled'],
        },
    },
    plugins: [require('@tailwindcss/forms')],
};