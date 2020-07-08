module.exports = {
    purge: [
        "./resources/views/**/*.blade.php",
        "./resources/sass/**/*.scss",
        "./resources/js/components/**/*.scss"
    ],
    theme: {
        fontFamily: {
            'display': ['Inter', 'sans-serif'],
            'body': ['Inter', 'sans-serif'],
        },
        extend: {
            spacing: {
                '9': '2.25rem',
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            }
        },
    },
    variants: {},
    plugins: [require("@tailwindcss/custom-forms")]
};
