module.exports = {
    purge: [
        './source/*.blade.php'
    ],

    theme: {
        extend: {
            spacing: {
                '96': '24rem',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
}
