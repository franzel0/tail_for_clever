/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin');


module.exports = {
    content: ["./src/**/*.{html,js}", "./*.php"],
    theme: {
      extend: {
        transitionProperty: {
          'border': 'border',
        }
      },
    },
    plugins: [
      plugin(function ({ addUtilities, theme, config }) {
        const themeColors = theme('colors');
        const individualBorderColors = Object.keys(themeColors).map(
          (colorName) => ({
            [`.border-b-${colorName}`]: {
              borderBottomColor: themeColors[colorName],
            },
            [`.border-t-${colorName}`]: {
              borderTopColor: themeColors[colorName],
            },
            [`.border-l-${colorName}`]: {
              borderLeftColor: themeColors[colorName],
            },
            [`.border-r-${colorName}`]: {
              borderRightColor: themeColors[colorName],
            },
          })
        );
  
        addUtilities(individualBorderColors);
      }),
    ],
  };