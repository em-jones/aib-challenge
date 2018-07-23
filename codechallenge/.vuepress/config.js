module.exports = {
  title: 'A Giant Agravic',
  themeConfig: {
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Archive', link: '/posts/' },
      { text: 'About Em', link: '/about/' },
    ],
  },
  configureWebpack: {
    module: {
      rules: [
        {
          test: /\.tsx?$/,
          loader: 'ts-loader',
          exclude: /node_modules/,
          options: {
            appendTsSuffixTo: [/\.vue$/],
          },
        },
      ],
    },
    resolve: {
      extensions: ['.ts', '.js', '.vue', '.json'],
      alias: {
        vue$: 'vue/dist/vue.esm.js',
        '@music': './public/images/music',
      },
    },
  },
};
