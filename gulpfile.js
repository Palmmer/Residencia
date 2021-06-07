const { src, dest, watch, parallel } = require("gulp");
const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");
const cssnano = require("cssnano");
const concat = require("gulp-concat");
const terser = require("gulp-terser-js");
const rename = require("gulp-rename");
const imagemin = require("gulp-imagemin");
const notify = require("gulp-notify");
const cache = require("gulp-cache");
const webp = require("gulp-webp");

function versionWebp() {
  return src(paths.imagenes)
    .pipe(webp())
    .pipe(dest("build/img"))
    .pipe(notify({ message: "Imagen Completada" }));
}

function watchArchivos() {
  watch(paths.imagenes, imagenes);
  watch(paths.imagenes, versionWebp);
}
