module.exports = {
  options: {
    limit: 3
  },

  prodFirst: [
    'clean:js'
  ],

  prodSecond: [
    'sass',
    'uglify'
  ],

  img: [
    'imagemin'
  ]
}
