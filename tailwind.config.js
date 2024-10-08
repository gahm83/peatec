module.exports = {
  content: require('fast-glob').sync([
    './**/*.php',
    './src/*.js'
  ]),
  theme: {
    colors: {
      blue: '#42A3FE',
      green: '#17D28F',
      white: '#FFFFFF',
      dark: '#1E1E1E',
      black: '#0B0B0B',
      'light-grey' : '#F8F8F8',
      'dark-grey' : '#D9D9D9'
    },
    fontSize: {
      base: '0.875rem',
      '18': '1.125rem',
      '20': '1.25rem',
      '24': '1.5rem',
      '30': '1.875rem',
      '32': '2rem',
      '36': '2.25rem',
      '48': '3rem',
      '64': '4rem',
    },
    extend: {
      screens: {
        'lg': '1200px',
      },
      fontFamily: {
        'sans': 'Montserrat'
      },
      animation: {
        marquee: 'marquee 20s linear infinite'
      },
      spacing: {
        screen: '100vw',
        screen2x: '200vw',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },
    },
  },
  variants: {
    extend: {},
  }
}