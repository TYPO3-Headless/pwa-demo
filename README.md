# TYPO3 Headless & PWA Demo Distribution

This setup enables quick exploration of a PWA (Progressive Web App) solution for TYPO3.\
It includes a Docker/DDEV local environment, preconfigured with TYPO3 and a JavaScript demo application.

The solution is built upon several key TYPO3 initiatives:

- [TYPO3 Headless](https://github.com/TYPO3-Headless/headless)
- [TYPO3 Headless News](https://github.com/TYPO3-Headless/headless_news)
- [Nuxt TYPO3](https://github.com/TYPO3-Headless/nuxt-typo3)
- [Nuxt TYPO3 Create App](https://github.com/TYPO3-Headless/create-nuxt-typo3)

## How to start with TYPO3 Headless video tutorial
[![video still](https://i.ytimg.com/vi/7MOwugAyHkY/hq720.jpg)](https://www.youtube.com/watch?v=7MOwugAyHkY)

## Requirements

Ensure you have [DDEV](https://ddev.readthedocs.io/en/stable/) version `v1.19.3` or newer.

## Installation

1) Clone the repository and navigate to the repository folder

```
git clone https://github.com/TYPO3-Headless/pwa-demo.git
cd pwa-demo
```

2) Start the DDEV Docker containers

```
ddev start
```

3) Launch the frontend application by entering the following command

```
ddev pwa-front start
```

You can access application in your browser, using following links:

| Application | URL | Credentials |
| --- | --- |----------------------|
| Frontend | https://pwa-demo.ddev.site |                      |
| TYPO3 backend | https://api.pwa-demo.ddev.site/typo3 | ```admin:password``` |

## Development

Active development of this extension is a part of the TYPO3 PWA initiative. For more information, visit the [TYPO3 PWA Initiative](https://typo3.org/community/teams/typo3-development/initiatives/pwa/).

## Front-end exploration

To initiate Nuxt.js in development mode, execute:

```
ddev pwa-front dev
```

**NOTE:** On macOS, the Webpack process operates within DDEV, which might result in slower performance compared to local development.
Nevertheless, this environment is suitable for experimenting and implementing simple modifications.

## nuxt-typo3 development with TYPO3 PWA Demo API

This DDEV repository provides a working application in production mode.\
To experiment with the sources of the [nuxt-typo3](https://github.com/TYPO3-Initiatives/nuxt-typo3) plugin, please follow these steps:

1. Clone [nuxt-typo3](https://github.com/TYPO3-Initiatives/nuxt-typo3) inside this repository:

   ```bash
   git clone https://github.com/TYPO3-Initiatives/nuxt-typo3.git
   ```

2. Navigate to the `nuxt-typo3` directory and install all necessary packages:

    ```bash
    cd nuxt-typo3 && yarn install
    ```

3. Run `ddev ssh`, move to the `nuxt-typo3` directory and execute `yarn link` to create a symlink for the sources of nuxt-typo3 ([Yarn Link Documentation](https://classic.yarnpkg.com/en/docs/cli/link/)):

    ```bash
    yarn link
    ```

4. Go to the `front` directory and link `nuxt-typo3`:

    ```bash
    yarn link "nuxt-typo3"
    ```

5. Execute `yarn dev` within the `front` directory:

    ```bash
    yarn dev
    ```

6. Make changes in the `nuxt-typo3` directory. Your front-end app should automatically rebuild with the new changes in the `nuxt-typo3` sources.

## How to reimport database?

Occasionally, the database for the `pwa-demo` project is updated. If you want to update your database, execute the following command in your project root:

```bash
ddev import-db --src ./data/db.sql.gz
```
