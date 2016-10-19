module.exports = {
  options: {
    spawn: false,
    livereload: true
  },

  scripts: {
    files: [
      'js/*.js'
    ],
    tasks: [
      'clean:js',
      'uglify'
    ]
  },

  styles: {
    files: [
      'css/*.scss'
    ],
    tasks: [
      'sass'
    ]
  }

};
