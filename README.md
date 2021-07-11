# Astro

## Table of Contents

- [About the Project](#about-the-project)
  - [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [WordPress setup](#wordpress-setup)
  - [Scripts](#scripts)
- [License](#license)
- [Changelog](#changelog)
- [Code Style](#code-style)
- [Documentation](#documentation)
- [Contact](#contact)
- [Acknowledgements](#acknowledgements)

## About The Project

Astro is a custom WordPress theme for wiki pages.

### Built With

- [Wordpress 5.7](https://wordpress.com/)
- [Bootstrap 5](https://getbootstrap.com/)
- [Sass](https://sass-lang.com/)
- [Webpack](https://webpack.js.org/)

## Getting Started

You can easily install this theme and add it to your WordPress site.

### Prerequisites

- A running [WordPress](https://wordpress.org/) site (v5.4+)
  - WordPress [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) plugin
- [node.js](https://nodejs.org/en/) ([v14.17.1+](https://nodejs.org/dist/v14.17.1/node-v14.17.1.tar.gz))
- [npm](https://www.npmjs.com/) package manager (v6.14.13+) included with node.js

### Installation

```bash
git clone https://github.com/grabovszky/astro-wp-theme.git
cd wp-tudasbazis/assets
npm install
npm run dev
```

## Usage

### WordPress Setup

To use the theme first bundle your `src` files

```bash
cd path/to/source/assets
npm run bundle
```

After the bundling has finished go to your WordPress admin site:

1. In your admin panel, go to `Appearance` > `Themes` and click the `Add New` button.
2. Click Upload Theme and Choose File, then select the `astro.zip` file. Click Install Now.
3. Click `Activate` to use your new theme right away.

### Scripts

Our `package.json` file comes with some useful scripts to use.

- `npm run prod` build the production files with Webpack, optimizing our source files
- `npm run dev` builds the development files with Webpack and listens to file changes inside the `assets` directory, and
  rebuilds on save for easy development.
- `npm run bundle` command builds with the production settings and then bundles the necessary files for WordPress Theme
  together in a `.zip` file.
- `npm run clean` command deletes the `assets/build` directory for a clean slate.
- `npm run translations` creates `astro.pot` translations file
- `npm run build-translations` builds `.mo` from `.po` files

## License

WordPress (`.php`) files is distributed under the GPLv3 license.
See [LICENSE.md](https://github.com/grabovszky/astro-wp-theme/LICENSE.md) for more information. All
other files under `/assets` is distributed under a proprietary license.
See [assets/LICENSE.md](https://github.com/grabovszky/astro-wp-theme/assets/LICENSE.md) for more
information.

## Changelog

All notable changes to this project will be documented
in [CHANGELOG.md](https://github.com/grabovszky/astro-wp-theme/CHANGELOG.md).

## Code Style

The project adhere to the guidelines defined below:

- Project versioning uses [Semantic Versioning 2.0.0](https://semver.org/)
- Commits use the [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/) style
- PHP files use the [PSR-12](https://www.php-fig.org/psr/psr-12/) extended coding style instead of the WordPress coding
  standards
- Sass files use style defined in [Sass guidelines](https://sass-guidelin.es/)
- Javascript files adhere to the [Airbnb JavaSript Style Guide](https://github.com/airbnb/javascript)

## Documentation

For a detailed explanation of the project please refer to
the [`/docs`](https://github.com/grabovszky/astro-wp-theme/docs/)

## Contact

Kristóf Gábor - [gaborkristof@protonmail.com](gaborkristof@protonmail.com)

Project Link: [https://github.com/grabovszky/astro-wp-theme](https://github.com/grabovszky/astro-wp-theme)

## Acknowledgements

- Bootstrap, licensed under [MIT](https://getbootstrap.com/docs/5.0/about/license/)
