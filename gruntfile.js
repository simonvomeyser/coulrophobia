module.exports = function(grunt) {

    // grunt.registerTask('speak', function() {
    // 	console.log ("Grunt working mate "); //Debug
    // });

    // grunt.registerTask('yell', function() {
    // 	console.log ("GRUNT WORKING MATE "); //Debug
    // });

    // grunt.registerTask('default', ['speak', 'yell']);

    grunt.initConfig({
        cssmin: {
            target: {
                options: {
                    'keepSpecialComments': '0',
                },
                files: {
                    'css/style-min.css': [
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
            dist: {
                src: ['css/wordpressThemeComment.css', 'css/style-min.css'],
                dest: 'style.css',
            },
        },
        watch: {
            css: {
                files: ['css/*.css'],
                tasks: ['cssmin', 'concat']
            },
        },
    });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
};
