var gulp = require('gulp'),
    sass = require('gulp-sass');
    browserSync = require('browser-sync');

gulp.task('scss', function() {
    return gulp.src('assets/scss/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('web/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync.init({ // Выполняем browser Sync
        proxy: 'ol.zm',
        notify: false // Отключаем уведомления
    });
});

gulp.task('watch', ['browser-sync', 'scss'], function(){
    gulp.watch('assets/scss/**/*.scss', ['scss']);
    //gulp.watch('views/*.html', browserSync.reload);
    gulp.watch('web/js/**/*.js', browserSync.reload);
    gulp.watch('views/**/*.php', browserSync.reload);
})

gulp.task('default', ['watch']);