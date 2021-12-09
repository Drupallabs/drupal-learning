const path = require("path");
const isDevMode = process.env.NODE_ENV !== "production";

const config = {
  entry: {
    main: ["./src/index.tsx"]
  },
  devtool: isDevMode ? false : "source-map",
  mode: isDevMode ? "development" : "production",
  output: {
    path: isDevMode
      ? path.resolve(__dirname, "dist")
      : path.resolve(__dirname, "build"),
    filename: "app.bundle.js"
  },
  resolve: {
    extensions: [".ts", ".tsx", ".js", ".jsx"]
  },
  module: {
    rules: [
      {
        test: /\.(t|j)sx?$/,
        enforce: "pre",
        use: [
          {
            loader: "ts-loader",
          },
          {
            loader: require.resolve('eslint-loader'),
            options: {
              eslintPath: require.resolve('eslint')
            }
          }
        ],
        exclude: /node_modules/
      },
      {
        enforce: "pre",
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "source-map-loader"
      },
      {
        test: /\.css$/i,
        use: ['style-loader', 'css-loader'],
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        loader: 'file-loader',
        options: {
          outputPath: 'images',
          publicPath: (url, resourcePath, context) => {
            const modulePath = context.substr(context.indexOf('/modules/', -1));

            const relativePath = isDevMode
              ? path.join(modulePath, "dist")
              : path.join(modulePath, "build");

            return path.join(relativePath, 'images', url);
          },
        },
      },
    ]
  }
};

module.exports = config;
