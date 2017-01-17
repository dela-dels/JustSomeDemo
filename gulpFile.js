var gulp = require('gulp');
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
})
gulp.task('php', function(){
  gulp.src('shopbuddydemo/*.php');
});
gulp.task('default' , ['serve']);
