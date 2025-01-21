<p align="center">
    <a href="https://monsieurbiz.com" target="_blank">
        <img src="https://monsieurbiz.com/logo.png" width="250px" alt="Monsieur Biz logo" />
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://monsieurbiz.com/agence-web-experte-sylius" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" width="200px" alt="Sylius logo" />
    </a>
    <br/>
    <img src="https://monsieurbiz.com/assets/images/sylius_badge_extension-artisan.png" width="100" alt="Monsieur Biz is a Sylius Extension Artisan partner">
</p>

<h1 align="center">Dashboard for Sylius</h1>

[![Dashboard Plugin license](https://img.shields.io/github/license/monsieurbiz/SyliusDashboardPlugin?public)](https://github.com/monsieurbiz/SyliusDashboardPlugin/blob/master/LICENSE.txt)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusDashboardPlugin/tests.yaml?branch=master&logo=github)](https://github.com/monsieurbiz/SyliusDashboardPlugin/actions?query=workflow%3ATests)
[![Recipe Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusDashboardPlugin/recipe.yaml?branch=master&label=recipes&logo=github)](https://github.com/monsieurbiz/SyliusDashboardPlugin/actions?query=workflow%3ASecurity)
[![Security Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusDashboardPlugin/security.yaml?branch=master&label=security&logo=github)](https://github.com/monsieurbiz/SyliusDashboardPlugin/actions?query=workflow%3ASecurity)

This plugin allows the admin to change the dashboard page of the admin panel.
By default the plugin is showing 3 blocks that are similar to the default ones of sylius.

## Compatibility

| Sylius Version | PHP Version     |
|----------------|-----------------|
| 1.12           | 8.1 - 8.2 - 8.3 |
| 1.13           | 8.1 - 8.2 - 8.3 |
| 1.14           | 8.1 - 8.2 - 8.3 |

## Installation

If you want to use our recipes, you can configure your composer.json by running:

```bash
composer config --no-plugins --json extra.symfony.endpoint '["https://api.github.com/repos/monsieurbiz/symfony-recipes/contents/index.json?ref=flex/master","flex://defaults"]'
```

```bash
composer require monsieurbiz/sylius-dashboard-plugin
```

![Access the settings of the Dashboard](docs/images/settings.png)
![Update the settings of the Dashboard](docs/images/update-dashboard.png)
![Dashboard](docs/images/dashboard.png)

## Contributing

You can find a way to run the plugin without effort in the file [DEVELOPMENT.md](./DEVELOPMENT.md).

Then you can open an issue or a Pull Request if you want! 😘  
Thank you!

## License

This plugin is completely free and released under the [MIT License](https://github.com/monsieurbiz/SyliusDashboardPlugin/blob/master/LICENSE).
