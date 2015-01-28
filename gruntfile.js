module.exports = function(grunt) {

  //Configure taksks
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
  });
  
  // Load the plugins
  grunt.loadNpmTasks( );

  // Register task
  grunt.registerTask('default', []);

};
