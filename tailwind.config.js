module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
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
