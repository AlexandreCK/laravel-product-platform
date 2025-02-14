import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pastelPurple: {
                    500: "#A594F9",
                },
                pastelPink: {
                    50: "#F8E9EC",
                    100: "#F5D7E0",
                    200: "#F2C4D4",
                    500: "#FF8FAB",
                    600: "#FF6B8B",
                },
            },
        },
    },
    plugins: [],
};
