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
    },
    sass: {
      build: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'style.css' : 'src/sass/style.scss'
        }
      },
      dev: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'style.css' : 'src/sass/style.scss'
        }
      }
    },
    watch: {
      js: {
        files: ['src/js/*.js'],
        tasks: ['uglify:dev']
      },
      css: {
        files: ['src/sass/**/*.scss'],
        tasks: ['sass:dev'],
        options: {
          livereload: true
        }
      }
    }

  });

  // Load the plugins
  grunt.loadNpmTasks( 'grunt-contrib-uglify' );
  grunt.loadNpmTasks( 'grunt-contrib-watch' );
  grunt.loadNpmTasks( 'grunt-sass' );

  // Register task
  grunt.registerTask('default', ['uglify:dev','sass:dev']);
  grunt.registerTask('build', ['uglify:build', 'sass:build']);

};
