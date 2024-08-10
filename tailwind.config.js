/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "node_modules/preline/dist/*.js",
    ],
    darkMode: "media",
    theme: {
        extend: {
            colors: {
                max: {
                    orange: "#c28566",
                    white: "#f9eee1",
                    black: "#272121",
                    dark: "#6d574a",
                    light: "#fef1e9",
                    medium: "#49403b",
                    text: "#B19A81",
                    soft: "#9e8c80",
                },
            },
            keyframes: {
                "slide-ltr": {
                    "0%": { objectPosition: "top" },
                    "100%": { objectPosition: "bottom" },
                },
                "slide-rtl": {
                    "0%": { objectPosition: "bottom" },
                    "100%": { objectPosition: "top" },
                },
                ricochet: {
                    "0%": { objectPosition: "left" },
                    "100%": { objectPosition: "right" },
                },
                scale: {
                    "0%": { scale: ".95" },
                    "100%": { scale: "1.1" },
                },
                "jumping-up": {
                    "0%": { transform: "translateY(0px)" },
                    "100%": { transform: "translateY(-20px)" },
                },
                "jumping-down": {
                    "0%": { transform: "translateY(0px)" },
                    "100%": { transform: "translateY(20px)" },
                },
            },
            animation: {
                "slide-ltr": "slide-ltr 8s linear infinite alternate",
                "slide-rtl": "slide-rtl 8s linear infinite alternate",
                ricochet: "ricochet 25s linear alternate infinite",
                "jumping-down":
                    "jumping-down 2s ease-in-out alternate infinite",
                "jumping-up": "jumping-up 2s ease-in-out alternate infinite",
                scale: "scale .5s linear alternate infinite",
            },
        },
        fontFamily: {
            sans: ["Nunito", "sans-serif"],
        },
        container: {
            padding: "1rem",
            center: true,
        },
    },
    plugins: [require("preline/plugin"), require("@tailwindcss/forms")],
};
