module.exports = {
  sass: {
    options: {
      outputStyle: 'compressed',
      sourceMap: false
    },
    files: [{
      expand: true,
      cwd: 'css',
      src: ['*.scss'],
      dest: 'css',
      ext: '.min.css'
    }]
  }
}
