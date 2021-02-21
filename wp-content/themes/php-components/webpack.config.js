// External dependencies.
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

// Custom configuration.
const customConfig = {
	...defaultConfig,
	externals: {
		wp: 'wp',
	},
};


// Build configuration.
module.exports = () => {
	return {
		...customConfig,
		entry: {
			blocks: `${ process.cwd() }/blocks/index.js`,
		},
		output: {
			...customConfig.output,
			path: `${ process.cwd() }/dist`,
		},
	};
};
