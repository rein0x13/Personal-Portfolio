import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin');
const defaultTheme = require('tailwindcss/defaultTheme');


export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        // plugin(function ({ addComponents }) {
        //     addComponents({
        //         '.filament-button,.filament-tables-container': {
        //             borderRadius: '0 !important'
        //         },
        //         '.filament-sidebar-item > a': {
        //             borderRadius: '0 !important'
        //         },
        //         '.filament-tables-pagination div': {
        //             borderRadius: '0 !important'
        //         },
        //         '.ring-2': {
        //             borderRadius: '0 !important'
        //         },
        //         'input,select,.fi-input': {
        //             borderRadius: '0 !important'
        //         }
        //     })
        // })
    ],
}