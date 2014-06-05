'use strict';
module.exports = function(grunt) {
  require('jit-grunt')(grunt, {
    "clean" : "grunt-contrib-clean",
    "jshint" : "grunt-contrib-jshint",
    "uglify" : "grunt-contrib-uglify",
    "watch" : "grunt-contrib-watch",
    "less" : "grunt-contrib-less",
    "version" : "grunt-wp-version",
    "newer" : "grunt-newer",
    "notify" : "grunt-notify"
  });

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
      'Gruntfile.js',
      'assets/js/*.js',
      '!assets/js/scripts.min.js'
      ]
    },
    less: {
      dist: {
        files: {
          'assets/css/main.min.css': [
          'assets/less/app.less'
          ]
        },
        options: {
          compress: true,
          // LESS source map
          // To enable, set sourceMap to true and update sourceMapRootpath based on your install
          sourceMap: false,
          sourceMapFilename: 'assets/css/main.min.css.map',
          sourceMapRootpath: '/app/themes/roots/'
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
          'assets/js/plugins/bootstrap/transition.js',
          'assets/js/plugins/bootstrap/alert.js',
          'assets/js/plugins/bootstrap/button.js',
          'assets/js/plugins/bootstrap/carousel.js',
          'assets/js/plugins/bootstrap/collapse.js',
          'assets/js/plugins/bootstrap/dropdown.js',
          'assets/js/plugins/bootstrap/modal.js',
          'assets/js/plugins/bootstrap/tooltip.js',
          'assets/js/plugins/bootstrap/popover.js',
          'assets/js/plugins/bootstrap/scrollspy.js',
          'assets/js/plugins/bootstrap/tab.js',
          'assets/js/plugins/bootstrap/affix.js',
          'bower_components/sidr/jquery.sidr.min.js',
          'assets/js/plugins/*.js',
          'assets/js/_*.js',
          ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          // sourceMap: 'assets/js/scripts.min.js.map',
          // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
        }
      }
    },
    version: {
      options: {
        file: 'lib/scripts.php',
        css: 'assets/css/main.min.css',
        cssHandle: 'roots_main',
        js: 'assets/js/scripts.min.js',
        jsHandle: 'roots_scripts'
      }
    },
    watch: {
      less: {
        files: [
        'assets/less/*.less',
        'assets/less/bootstrap/*.less'
        ],
        tasks: ['less', 'newer:version']
      },
      js: {
        files: [
        '<%= jshint.all %>'
        ],
        tasks: ['newer:jshint', 'newer:uglify', 'newer:version']
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js',
        'templates/*.php',
        '*.php',
        'bower_components/*/*.css',
        'bower_components/*/*/*.css'
        ]
      }
    },
    clean: {
      dist: [
      'assets/css/main.min.css',
      'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  // grunt.loadNpmTasks('grunt-contrib-clean');
  // grunt.loadNpmTasks('grunt-contrib-jshint');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-contrib-less');
  // grunt.loadNpmTasks('grunt-wp-version');
  // grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-notify');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'less',
    'uglify',
    'version'
    ]);
  grunt.registerTask('dev', [
    'watch'
    ]);

};
