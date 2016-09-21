module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		 ngAnnotate: {
		    options: {
		        singleQuotes: true
		    },
		    app: {
		        files: {
		            './production/min-safe/js/authController.js': ['./app/controller/authController.js'],
		            './production/min-safe/app.js': ['./app/app.js']
		        }
		    }
		},
		concat: {
		    js: { //target
		        src: ['./production/min-safe/app.js', './production/min-safe/js/*.js'],
		        dest: './production/min/app.js'
		    }
		},
		uglify: {
		    js: { //target
		        src: ['./production/min/app.js'],
		        dest: './production/min/app.js'
		    }
		}
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ng-annotate'); 

    grunt.registerTask('default', ['ngAnnotate', 'concat', 'uglify']);

   

	

	
}