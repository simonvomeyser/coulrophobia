module.exports = function(grunt) {

// grunt.registerTask('speak', function() {
// 	console.log ("Grunt working mate "); //Debug
// });

// grunt.registerTask('yell', function() {
// 	console.log ("GRUNT WORKING MATE "); //Debug
// });

// grunt.registerTask('default', ['speak', 'yell']);

	grunt.initConfig({
	  concat: {
	    dist: {
	      src: ['css/style.css',
		      	'css/normalize.css',
		      	'lib/bootstrap/css/bootstrap.min.css',
		      	'lib/lightbox/css/lightbox.css',
		      	'css/originalStyles.css',
		      	'css/custom.css'],
	      dest: 'style.css',
	    },
	  },
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
};