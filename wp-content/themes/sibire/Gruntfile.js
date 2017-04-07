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
            'stylesheets/feather.css',
            'stylesheets/normalize.css',
            'stylesheets/owl.carousel.css',
            'scss/style.css',
            'scss/header.css',
            'scss/footer.css',
            'scss/single-creator.css',
            'scss/single-event.css',
            'scss/single-niche.css',
            'scss/single-interview.css',
            'scss/single-recruit.css',
            'scss/template-area.css',
            'scss/template-profile.css',
            'scss/template-list.css',
            'scss/plugin-wpcf7.css',
            'scss/partials-catchcopy.css',
            'scss/partials-registration.css',
            'scss/partials-service.css',
            'scss/front-page.css',
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
          'scss/style.css',
          'scss/header.css',
          'scss/footer.css',
          'scss/single-creator.css',
          'scss/single-event.css',
          'scss/single-niche.css',
          'scss/single-interview.css',
          'scss/single-recruit.css',
          'scss/template-area.css',
          'scss/template-profile.css',
          'scss/template-list.css',
          'scss/plugin-wpcf7.css',
          'scss/partials-catchcopy.css',
          'scss/partials-registration.css',
          'scss/partials-service.css',
          'scss/front-page.css',
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
