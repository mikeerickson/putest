module.exports = function(grunt){
  'use strict';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    conf: {
      js_files: 'public/js/**/*.js',
      css_files: 'public/css/**/*.css',
      css_path: 'public/css/',
      test_files: 'app/tests/*.php',
      less_files: 'public/less/**/*.less'
    },
    less: {
        compile: {
          files: {
            'public/css/main.css': 'public/less/main.less'
          }
        }
    },
    uglify: {
        options: {
          banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
        },
        dist: {
          files: {
            'public/dist/js/app.min.css': '<%= conf.js_files %>'
          }
        }
		},
    cssmin: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */'
      },
      minify: {
        expand: true,
        cwd: '<%= conf.css_path %>',
        src: ['*.css', '!*.min.css'],
          dest: '<%= conf.css_path %>',
          ext: '.min.css'
        }
    },
    phpunit: {
      classes: {
        dir: 'app/tests'
      },
      options: {
        bin: 'vendor/bin/phpunit',
        colors: true
      }
    },
    jshint: {
      options: {
        jshintrc: true
      },
      all: ['Gruntfile.js', '<%= conf.js_files %>', 'test/**/*.js']
    },
    watch: {
      less: {
        files: ['<%= conf.less_files %>'],
        tasks: ['less','cssmin']
      },
      js: {
        files: ['<%= conf.js_files %>'],
        tasks: ['uglify','jshint']
      },
      php: {
        files: ['<%= conf.test_files %>'],
          tasks: ['phpunit']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-phpunit');

  grunt.registerTask('default',['less','cssmin']);
};