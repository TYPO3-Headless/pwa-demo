# TYPO3 Headless & PWA Demo Distribution
It allows to start exploring PWA solution for TYPO3 in minutes.
It provides docker/ddev local enviroment with both TYPO3 and JS demo application.

It's based on

- https://github.com/TYPO3-Initiatives/headless
- https://github.com/TYPO3-Initiatives/headless_news
- https://github.com/TYPO3-Initiatives/nuxt-typo3
- https://github.com/TYPO3-Initiatives/create-nuxt-typo3

## How to start with TYPO3 Headless video tutorial
[![video still](https://i.ytimg.com/vi/7MOwugAyHkY/hq720.jpg)](https://www.youtube.com/watch?v=7MOwugAyHkY)

## Requirements
All you need is [ddev](https://ddev.readthedocs.io/en/stable/) in version at least v1.19.3.

## Installation

1) clone the repository and enter the repository folder

```
git clone https://github.com/TYPO3-Initiatives/pwa-demo.git
cd pwa-demo
```

2) Boot up ddev docker containers

```
ddev start
```

3) Then, please type
```
ddev pwa-front start
```
3) Access frontend in your browser: https://pwa-demo.ddev.site
4) Access TYPO3 backend: https://api.pwa-demo.ddev.site/typo3

Credentials to TYPO3 backend are: ```admin:password```

## Development
Development for this extension is happening as part of the TYPO3 PWA initiative, see https://typo3.org/community/teams/typo3-development/initiatives/pwa/

## Play with Front-end
To run Nuxt.js in development mode please type:

```
ddev pwa-front dev
```

Please noticed that on macOS Webpack process is running inside the ddev so it might be slower than development on localhost - however, it's totally fine to play and make some simple changes.

## nuxt-typo3 development together with TYPO3 PWA Demo API

This ddev repository provides working application in production mode.
To play with sources of [nuxt-typo3](https://github.com/TYPO3-Initiatives/nuxt-typo3) plugin please follow steps:

1. Clone [nuxt-typo3](https://github.com/TYPO3-Initiatives/nuxt-typo3) inside of this repository.
   ```bash
   git clone https://github.com/TYPO3-Initiatives/nuxt-typo3.git
   ```
2. Go to nuxt-typo3 directory and install all needed packages
    ```bash
    cd nuxt-typo3 && yarn install
    ```
3. Run `ddev ssh`, go to nuxt-typo3 directory and call `yarn link` - this command create a symlink for sources of nuxt-typo3 (https://classic.yarnpkg.com/en/docs/cli/link/)
    ```bash
    yarn link
    ```
4. Go to `front` directory and call
    ```bash
    yarn link "nuxt-typo3"
    ```
5. Call `yarn dev` inside of `front` directory
    ```bash
    yarn dev
    ```
6. Make some changes in `nuxt-typo3` directory - your front app should be triggered and rebuilded with new changes in `nuxt-typo3` sources.

## How to reimport database?
From time to time we update database in `pwa-demo` project. If database got updated, please type
```
ddev import-db --src ./data/db.sql.gz
```
in your project root.
