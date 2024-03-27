/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'background-profile': "url('/public/img/background.svg')",
                'background-predict': "url('/public/img/background-predict.svg')",
            },
            colors: {
                dark: "#1A1840",
                darker: "#050C28",
                primary: "#FFFDFA",
                secondary: "#131415",
                tertiary: "#222228",
                purple1: "#39326A",
                purple2: "#9287DE",
            },
        },
    },
    plugins: [],
}
