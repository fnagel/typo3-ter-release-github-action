# EXT:typo3-ter-release-github-action

How to do a TYPO3 CMS TER release using a GitHub workflow action.

## About

This repo contains a GitHub action workflow file which works as a starting point 
for automatized TER releases to be used within your TYPO3 CMS extension repository.

It makes use of the [`namelesscoder/typo3-repository-client`](https://github.com/NamelessCoder/typo3-repository-client) package.

## How

1. Add and adjust the example workflow configuration
2. Configure TYPO3 credentials and extension key
3. After the workflow is in place, pushing a new tag will trigger:
    * `tag-valid` job: checks if the event is a tag and if it's valid using regex
    * if so, the `ter-release` job: uploads the new version to TER


## Setup

# Add yaml code to your project 

* Copy the `.github/workflows/main.yml` file to your project (or copy what you need)
* Create `.gitignore` file for files and folders you don't want to be published

### Add TYPO3.org credentials as GitHub secret.

* `TYPO3_USER`
* `TYPO3_PASSWORD`

See here for more info on how to do that:
https://help.github.com/en/actions/configuring-and-managing-workflows/creating-and-storing-encrypted-secrets

### Add extension key to your yaml configuration

Set the `jobs.ter-release.env.TYPO3_EXTENSION_KEY` env variable in the yaml file.


### Push to Github

That's it! Now every tag pushed will trigger a TER release.


## Info

* Make sure to set the new version in `ext_emconf.php` when releasing a new version
* Dotfiles and files / folders configured in `.gitignore` will be excluded in 
    the TER release package (`typo3-repository-client` feature)


## Help & Inspiration

* https://help.github.com/en/actions/reference/workflow-syntax-for-github-actions#onpushpull_requestbranchestags
* https://help.github.com/en/actions/reference/workflow-syntax-for-github-actions#jobsjob_idneeds
* https://packaging.python.org/guides/publishing-package-distribution-releases-using-github-actions-ci-cd-workflows/
* https://stackoverflow.com/a/58869470/991681
* https://stackoverflow.com/a/61832535/991681
