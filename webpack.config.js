const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
  // 1. Tentukan file sumber (source) Anda
  entry: {
    app: ['./src/js/app.js', './src/css/app.css'],
  },

  // 2. Tentukan di mana file hasil build akan disimpan
  output: {
    path: path.resolve(__dirname, 'assets'),
    filename: 'js/[name].js', // Hasil JS akan disimpan di assets/js/app.js
  },

  module: {
    rules: [
      // Aturan untuk memproses file CSS
      {
        test: /\.css$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
    ],
  },

  plugins: [
    // Plugin ini akan mengekstrak CSS ke dalam file terpisah
    new MiniCssExtractPlugin({
      filename: 'css/[name].css', // Hasil CSS akan disimpan di assets/css/app.css
    }),
  ],
  
  // 3. Optimasi untuk mode produksi
  optimization: {
    minimizer: [
      // Plugin untuk memperkecil (minify) file CSS
      new CssMinimizerPlugin(),
    ],
  },
};
