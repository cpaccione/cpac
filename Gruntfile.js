module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /**
    * Sass task
    */
    sass: {
      dev: {
        options: {
          style: 'expanded',
          sourcemap: 'none',
        },
        files: {
          'style-human.css': 'scss/cpac.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none',
        },
        files: {
          'css/style.css' : 'scss/cpac.scss'
        }
      }
    },

    /**
    * Watch task
    */
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);

}
