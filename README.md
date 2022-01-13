# wp-typescript-starter
Simple starter template for WordPress projects that want to use TypeScript in combination with @wordpress/scripts.

## Usage

For installation, use the following commands in your command-line.
```
// Clone the repository
git clone git@github.com:makeitworkpress/wp-typescript-starter.git

// Get to cloned directory
cd wp-typescript-starter

// Install devDependecies
npm install

// Run compilation scripts in dev / watch mode
npm run start 

// Run compilation scripts for production
npm run build
```

This file uses /assets/src/scripts.ts as the entry file. This file is compiled to /assets/public/scripts.js when running the build or start npm scripts. 
Start writing your code in /assets/src/scripts.ts, or modify the webpack.config.js to your own liking.

Under the hood, this starter boilerplate uses @wordpress-scripts to compile scripts, 
but extends its configuration in webpack.config.js to support Typescript and custom entry and output directories.

Please note that the Block Editor of WordPress still has poor support for custom types, but this probably will improve.
