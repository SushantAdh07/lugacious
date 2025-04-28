import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    "50": "#eff6ff",
                    "100": "#dbeafe",
                    "200": "#bfdbfe",
                    "300": "#93c5fd",
                    "400": "#60a5fa",
                    "500": "#3b82f6",
                    "600": "#2563eb",
                    "700": "#1d4ed8",
                    "800": "#1e40af",
                    "900": "#1e3a8a",
                    "950": "#172554"
                }
            },

            extend: {
                backdropBlur: {
                    '3xl': '124px',
                },
                boxShadow: {
                    'glass': '0 8px 32px 0 rgba(191, 142, 67, 0.18)',
                    'glass-lg': '0 12px 40px 0 rgba(191, 142, 67, 0.25)',
                    'gold': '0 4px 20px -2px rgba(191, 142, 67, 0.4)',
                    'gold-lg': '0 8px 30px -3px rgba(191, 142, 67, 0.5)'
                },
                animation: {
                    'float': 'float 8s ease-in-out infinite',
                    'float-slow': 'float 10s ease-in-out infinite 1s'
                },
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0) translateX(0)' },
                        '50%': { transform: 'translateY(-20px) translateX(10px)' },
                    }
                }
            },
            fontFamily: {
                // Override default 'sans' with Poppins
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                // Optional: Define a custom font family
                poppins: ['Poppins', 'sans-serif'],
                // Keep existing 'body' and 'helvetica' if needed
                body: [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                ],
                helvetica: [
                    'Helvetica Neue',
                    'Arial',
                    'sans-serif'
                ],
            },
        },
    },
    plugins: [forms],
};