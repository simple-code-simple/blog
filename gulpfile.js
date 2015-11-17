var gulp = require('gulp');
 
// browser Sync
var browserSync = require('browser-sync');
 
// Static server
gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./"
        }
    });
});

// プロキシ実行の場合
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "127.0.0.1"
    });
});

gulp.task('default', ['browser-sync']);
 
// Reload all Browsers
gulp.task('bs-reload', function () {
    browserSync.reload();
});
 
// Watch scss AND html files, doing different things with each.
gulp.task('default', ['browser-sync'], function () {
    gulp.watch("./resources/views/*", ['bs-reload']);
});