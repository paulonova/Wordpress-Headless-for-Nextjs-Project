const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const terser = require("gulp-terser");
const browsersync = require("browser-sync").create();

// Sass Task
function scssTask() {
  return src("./assets/css/**/*.scss", { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest("./assets/css", { sourcemaps: "." }));
}

// JavaScript Task
function jsTask() {
  return src("./assets/js/*.js", { sourcemaps: true })
    .pipe(terser())
    .pipe(dest("assets/js/bundle-js", { sourcemaps: "." }));
}

function browsersyncServe(cb) {
  browsersync.init({
    proxy: "https://nextjswordpress:8890/",
  });
  cb();
}

function browsersyncReload(cb) {
  browsersync.reload();
  cb();
}

// Default Gulp Task
exports.default = series(scssTask, jsTask, browsersyncServe, watchTask);

// Watch Task
function watchTask() {
  watch("*.php", browsersyncReload);
  watch("./template-parts/*.php", browsersyncReload);
  watch(["./assets/css/**/*.scss"], series(scssTask, browsersyncReload));
  watch(["./assets/js/*.js"], series(jsTask, browsersyncReload));
}
