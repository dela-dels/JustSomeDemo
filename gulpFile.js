/*var gulp = require('gulp');
var bs   = require('browser-sync').create() //creat a browser-sync instance

gulp.task('browser-sync', function(){
  bs.init({
    proxy:'localhost:80/shopbuddydemo'
  });
});
gulp.task('watch',['browser-sync'] , function(){
  gulp.watch("*.php").on('change', bs.reload);
  gulp.watch("js/*.js").on('change', bs.reload);
  gulp.watch("materialize/css/*.css").on('change', bs.reload);
});
gulp.task('serve', function(){
  bs.init({
    proxy:'localhost:80/shopbuddydemo'
  });

    gulp.watch("*.php").on("change", bs.reload);
    gulp.watch("materialize/css/*.css").on('change', bs.reload);
    gulp.watch("js/*.js").on('change', bs.reload);
})
gulp.task('php', function(){
  gulp.src('shopbuddydemo/*.php');
});
gulp.task('default' , ['serve']);*/


/*var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

//watch files for changes
gulp.task('serve', function(){
  browserSync.init({
    proxy : 'localhost:80/shopbuddydemo'
  });
});

gulp.watch(['*.html', 'materialize/css/*.css', 'js/*.js'],{cwd:'shopbuddydemo'},reload);
gulp.task('default' , ['serve']);*/


var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

// Save a reference to the `reload` method

// Watch scss AND html files, doing different things with each.
gulp.task('serve', function () {

    // Serve files from the root of this project
    browserSync.init({
        proxy : 'localhost:80/shopbuddydemo'
    });

    gulp.watch("*.html").on("change", reload);
    gulp.watch("materialize/**/*.css").on('change',reload);
    gulp.watch("js/*.js").on('change',reload);
});
gulp.task('default' , ['serve']);
