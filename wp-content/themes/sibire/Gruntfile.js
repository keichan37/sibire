module.exports = function (grunt) {

  grunt.initConfig({

    // scssファイルをcssファイルにコンパイルするタスクを設定
    sass: {
      dist: {
        options: { // Sassのオプションを設定
          style: 'expanded' // Sassのコンパイル時の変換方法
        },
        files: [{
          expand: true, // 特定のディレクトリの指定を許可
          cwd: 'scss', // タスクを実行するディレクトリ
          src: ['*.scss'], // タスクを実行するファイル
          dest: 'scss', // コンパイルしたcssファイルの置き場所
          ext: '.css' // コンパイル後のファイル
        }] 
      }
    },
 
    // コンパイルしたCSSファイルをstyle.cssに結合するタスクを設定
    cssmin: {
      minify: {
        files: {
          // 結合先のcssファイル名: 結合するcssファイル名
          'style.css': [
            'scss/feather.css',
            'scss/normalize.css',
            'scss/owl.carousel.css',
            'scss/owl.theme.default.css',
            'scss/layout.css',
            'scss/front-page.css',
            'scss/page.css',
            'scss/single.css',
            'scss/template-service.css',
            'scss/template-event.css',
            'scss/template-event-sub-page.css',
            'scss/template-event-single.css',
            'scss/template-summary.css',
            'scss/template-wakayama.css',
            'scss/template-wakayama-single.css',
            'scss/partials-catchcopy.css',
            'scss/plugin-wpcf7.css',
            'scss/wordpress.css'
          ]
        }
      }
    },

    // ファイルの変更を監視するタスクを設定
    watch: {
      sass: {
        // 監視するファイル
        files: 'scss/*.scss',
        tasks: ['sass']
      },

      css: {
        // 監視するファイル
        files: [
          'scss/layout.css',
          'scss/front-page.css',
          'scss/page.css',
          'scss/single.css',
          'scss/template-service.css',
          'scss/template-event.css',
          'scss/template-event-sub-page.css',
          'scss/template-event-single.css',
          'scss/template-summary.css',
          'scss/template-wakayama.css',
          'scss/template-wakayama-single.css',
          'scss/partials-catchcopy.css',
          'scss/plugin-wpcf7.css',
          'scss/wordpress.css'
        ],
        tasks: ['cssmin']
      }
    }

  });

  // Gruntプラグインの読み込み
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // gruntコマンドを叩いた際に実行されるタスク
  grunt.registerTask('default', ['sass', 'cssmin']);

};
