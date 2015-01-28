module.exports = function(grunt) {

  //Configure taksks
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify : {

      build : {
        src: 'src/js/*.js',
        dest: 'js/script.min.js'
      },

      dev: {
        options: {
          beautify: true,
          mangle: false,
          compress: false,
          preserveComments: 'all'
        },
        src: 'src/js/*.js',
        dest: 'js/script.min.js'
      }
    }
  });

  // Load the plugins
  grunt.loadNpmTasks( 'grunt-contrib-uglify' );

  // Register task
  grunt.registerTask('default', ['uglify:dev']);
  grunt.registerTask('build', ['uglify:build']);

};
