// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'dark-blue': '#22313F',
        'dark-blue-hover': '#2C3944',
        'light-blue': '#19B5FE',
        'hover-black': 'rgba(0,0,0,0.15)',
        gray: '#808080',
        'light-gray': '#eee',
        'l-red': '#FF0000',
        'cad-blue': '#0C5A7F',
        'black-555': '#555',
      },
      height: {
        15: '60px',
        30: '120px',
        'product-menu': 'calc(0.5rem + 1vw)',
      },
      width: {
        90: '360px',
        180: '720px',
      },
      maxWidth: {
        20: '5rem',
        90: '360px',
      },
      backgroundImage: {
        'product-menu': 'linear-gradient(to right, #22313F 1%, #18242D 100%)',
        'white-bottom': 'linear-gradient(to bottom, #fff 1%, #F9F9F9 100%)',
        'products-widget': 'linear-gradient(to bottom, #fff 1%, #f9f9f9 100%)',
        'product-gradient': 'linear-gradient(to bottom, #fff 1%, #eee 100%)',
      },
      fontFamily: {
        sans: ['Proxima Nova, sans-serif'],
      },
      spacing: {
        90: '360px',
        180: '720px',
      },
      gridTemplateColumns: {
        "main-wrap": '68% 30%',
      },
    },
  },
  plugins: [],
};
