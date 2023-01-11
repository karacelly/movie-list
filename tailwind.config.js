/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                primaryBlack: "#252525",
                secondaryBlack: "#191919",
            },
        },
    },
    plugins: [require("tailwind-scrollbar")],
};
