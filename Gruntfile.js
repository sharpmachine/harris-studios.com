'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

        // let us know if our JS is sound
        jshint: {
            options: {
                "bitwise": true,
                "browser": true,
                "curly": true,
                "eqeqeq": true,
                "eqnull": true,
                "es5": true,
                "esnext": true,
                "immed": true,
                "jquery": true,
                "latedef": true,
                "newcap": true,
                "noarg": true,
                "node": true,
                "strict": false,
                "trailing": true,
                "undef": true,
                "globals": {
                    "jQuery": true,
                    "alert": true
                }
            },
            all: [
            'Gruntfile.js',
            'themes/bootstrap/js/*.js'
            ]
        },

        // concatenation and minification all in one
        uglify: {
            dist: {
                files: {
                    'themes/bootstrap/js/script.min.js': [
                    'themes/bootstrap/js/script.js'
                    ]
                }
            }
        },

        less: {
            development: {
                options: {
                    paths: ["less"],
                    yuicompress: true,
                    cleancss: true
                },
                files: {
                    "themes/bootstrap/css/bootstrap.css": "themes/bootstrap/less/bootstrap.less"
                }
            }
        },

        // watch our project for changes
        watch: {
            less: {
                files: ["themes/bootstrap/less/*"],
                tasks: ["less"],
            },
            css: {
                files: ['themes/bootstrap/css/bootstrap.css']
            },
            js: {
                files: [
                'themes/bootstrap/js/script.js'
                ],
                tasks: ['uglify']
            },
            php: {
                files: ['*.php']
            },
            livereload: {
                files: [
                'themes/bootstrap/css/*.css',
                'themes/bootstrap/js/script.min.js',
                'content/*.md',
                'content/*/*.md',
                'content/*/*/*.md',
                'content/*.html',
                ],
                options: {
                    livereload: true
                }
            }
        }
    });

    // load tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-notify');

    // register task
    grunt.registerTask('default', [
        // 'jshint',
        'uglify',
        'watch'
        ]);

};