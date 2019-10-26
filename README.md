# TYPO3 PWA Demo Distribution
It allows to start exploring PWA solution for TYPO3 in minutes.
It provides docker/ddev local enviroment with both TYPO3 and JS demo application.

It's based on 

- https://github.com/TYPO3-Initiatives/headless
- https://github.com/TYPO3-Initiatives/headless_news
- https://github.com/TYPO3-Initiatives/nuxt-typo3
- https://github.com/TYPO3-Initiatives/create-nuxt-typo3


## Requirements
All you need is [ddev](https://ddev.readthedocs.io/en/stable/) in version at least v1.11.2.

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
3) Access frontend in your browser: ```pwa-demo.ddev.site```.
4) Access TYPO3 backend: ```api.pwa-demo.ddev.site/typo3```.

Credentials to TYPO3 backend are: ```admin:password```

## Development
Development for this extension is happening as part of the TYPO3 PWA initiative, see https://typo3.org/community/teams/typo3-development/initiatives/pwa/
