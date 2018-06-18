<?

function wheely_setup () {

  // Объявляем переменную scssc глобальной, чтобы получить к ней доступ ниже. Это нужно для того
  // чтобы мы могли расширить список путей, по которые требуется искать различные модули при импорте.
  global $scssc;

  // Добавляем путь к абубаке, чтобы её было возможно заимпортить.
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/@wheely/abubaca/styles/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/@wheely/abubaca/node_modules/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/@wheely/frontend-basis/sass/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/@wheely/frontend-sprites/sass/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/@wheely/wheely-icons/css/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/bootstrap-sass/assets/stylesheets/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/flag-icon-css/sass/");
  $scssc -> addImportPath(WPSCSS_THEME_DIR . "/node_modules/include-media/dist/");

  // Добавляем дефолтные стили проекта
  wp_enqueue_style( 'index', get_template_directory_uri() . '/css/index.css', array(), '3.2' );
}

add_action( 'after_setup_theme', 'wheely_setup' );
?>