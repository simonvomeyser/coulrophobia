module.exports = function(grunt) {

    grunt.initConfig({
        cssmin: {
            target: {
                options: {
                    'keepSpecialComments': '0',
                },
                files: {
                    'css/style-min.css': [
                        'css/font-awesome.min.css',
                        'css/normalize.css',
                        'lib/bootstrap/css/bootstrap.min.css',
                        'lib/lightbox/css/lightbox.css',
                        'css/original.css',
                        'css/custom.css'
                    ]
                },
            },
        },
        concat: {
            js: {
                src: [            
                    'js/imagesloaded.js',
                    'lib/lightbox/js/lightbox.js',
                    'lib/bootstrap/js/bootstrap.min.js',
                    'js/custom.js'
                ],
                dest: 'js-min/coulrophobia.min.js',
            },
            css: {
                src: ['css/wordpressThemeComment.css', 'css/style-min.css'],
                dest: 'style.css',
            },
        },
        // uglify: {
        //   target: {
        //     files: {
        //       'js-min/coulrophobia.min.js': [
        //         '/lib/lightbox/js/lightbox.js',
        //         '/lib/bootstrap/js/bootstrap.min.js',
        //         '/js/imagesloaded.js',
        //         '/js/afc-map.js',
        //         '/js/custom.js'
        //         ]
        //     }
        //   }
        // },
        watch: {
            css: {
                files: ['css/*.css', 'js/*'],
                tasks: ['cssmin', 'concat']
            },
        },
    });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
};
