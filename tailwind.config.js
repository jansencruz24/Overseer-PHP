/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./dist/**/*.{html,js}'],
  theme: {
    colors: {
      'salem': {
        DEFAULT: '#08845C',
        '400' : '#e8fcec',
        '500': '#08845C',
        '600' : '#0e7753',
        '700' : '#30c49c',
        '800' : '#11210F'
      },
      'mild-black': {
        DEFAULT: '#303030',
        '500': '#303030',
      },
      'dark-green': {
        DEFAULT: '#304C54',
        '500': '#304C54',
      },
      'white-gray': {
        DEFAULT: '#EDEFF3',
        '500': '#EDEFF3',
        '50' : '#e0dcdc',
        '100' : '#f2f5ff'
      },
      'grad-blue-green': {
        DEFAULT: '#303030',
        '500': '#3050A4',
        '600' : '#0cd781',
        '700' : '#83B4FF',
        '800' : '#68FFE4'
      },
    },
    extend: {
      fontFamily: {
        "inter": ["Inter", "sans-serif"],
        "inter-bold": ["Inter:wght@800", "sans-serif"],
        "poppins": ["Poppins", "sans-serif"]
      } 
  },
  plugins: [],
}
}
