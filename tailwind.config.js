module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'reg': "url('/images/lily-banse--YHSwy6uqvk-unsplash.jpg')",
        'footer-texture': "url('/img/footer-texture.png')",
       })
    }
  },
  variants: {},
  plugins: [
    // require('@tailwindcss/ui'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ]
}
