# TYPO3 Headless & PWA Demo Distribution

This setup enables quick exploration of a PWA (Progressive Web App) solution for TYPO3.\
It includes a Docker/DDEV local environment, preconfigured with TYPO3 and a JavaScript demo application.

The solution is built upon several key TYPO3 initiatives:

- [TYPO3 Headless](https://github.com/TYPO3-Headless/headless)
- [TYPO3 Headless News](https://github.com/TYPO3-Headless/headless_news)
- [Nuxt TYPO3](https://github.com/TYPO3-Headless/nuxt-typo3)
- [Nuxt TYPO3 Starter](https://github.com/TYPO3-Headless/nuxt-typo3-starter)

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

To initiate Nuxt in development mode, execute:

```
ddev pwa-front dev
```

## How to reimport database?

Occasionally, the database for the `pwa-demo` project is updated. If you want to update your database, execute the following command in your project root:

```bash
ddev import-db --src ./data/db.sql.gz
```
