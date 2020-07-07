module.exports = {
    purge: [
        "./resources/views/**/*.blade.php",
        "./resources/sass/**/*.scss",
        "./resources/js/components/**/*.scss"
    ],
    theme: {
        extend: {}
    },
    variants: {},
    plugins: [require("@tailwindcss/custom-forms")]
};
