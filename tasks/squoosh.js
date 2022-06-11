const gulp = require('gulp');
const squoosh = require('gulp-libsquoosh'); 

module.exports = function (options) {

    return () => {
      return  gulp.src([`./${options.src}/images/**/*.{jpg,png}`]) 
        .pipe(
          squoosh((src) => ({
            preprocessOptions: {
              resize: {
                // width: Math.round(src.width / 2),
                // height: Math.round(src.height / 2),
                ...src.contain(200),
              },
            },
          })),
        )
        .pipe(gulp.dest(`./${options.dest}/images/`));
    }
}