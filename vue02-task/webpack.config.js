const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
	mode:'development',
	entry:'./src/js/app.js',
	output:{
		path: '/home/arai/tb_js_course/helloWebpack/dist',
		filename:'bundle.js',
	},
devServer:{
	contentBase:'./dist'
},
module:{
	rules:[
	{
		test:/\.scss$/,
		use:
		[
		{loader:MiniCssExtractPlugin.loader,
		options:{
			publicPath:'/home/arai/tb_js_course/helloWebpack/dist'
				}
		},
		'css-loader',
		'sass-loader',
		]
	},
		{
			test:/\.(jpg)$/,
			loaders:'url-loader'
		}
	
		]
},
plugins:[new MiniCssExtractPlugin({
	filename:"bundled_style.css"
})
],
};