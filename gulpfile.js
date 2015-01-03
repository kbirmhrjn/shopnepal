var gulp = require('gulp');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var browserify = require('gulp-browserify');
var uglify = require('gulp-uglify');


// css task for sass compilation
gulp.task('css',function(){
	gulp.src('app/assets/**/*.scss')
		.pipe(sass())
		.pipe(rename('public/css/all.css'))
		.pipe(gulp.dest('./'))
        .pipe(notify({title:'SaSS Compilation',message:'All SaSS Compiled!'}));
});

// concat js file in a single file
gulp.task('js', function(){
		gulp.src('public/js/main.js')
		.pipe(browserify({debug:true}))
		.pipe(rename('public/js/bundle.js'))
		.pipe(gulp.dest('./'))
        .pipe(notify({title:'Javascript',message:'All js file merged!'}));
});

//compress final js file
gulp.task('compress',function(){
	gulp.src('public/js/bundle.js')
	.pipe(uglify())
	.pipe(rename('public/js/min.js'))
	.pipe(gulp.dest('./'))
    .pipe(notify({title:'Javascript Minified',message:'All JS Compressed!'}));
});
// watch any file for changes and trigger command according to it
gulp.task('watch', function(){
	gulp.watch('public/js/**/*.js', ['js']);
	gulp.watch('app/assets/sass/**/*.scss',['css']);
});
gulp.task('default',['js','css', 'watch']);