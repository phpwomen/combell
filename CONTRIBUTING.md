# Contributing to PHPWomen

:+1::tada: First off, thanks for taking the time to contribute! :tada::+1:

The following is a set of guidelines for contributing to PHP Women, which are hosted in the [PHP Women Organization](https://github.com/phpwomen/combell/) on GitHub.
These are just guidelines, not rules, use your best judgment and feel free to propose changes to this document in a pull request.

#### Table Of Contents

[What should I know before I get started?](#what-should-i-know-before-i-get-started)
  * [Code of Conduct](#code-of-conduct)
  * [How the Site is Organized](#how-the-site-is-organized)
[How Can I Contribute?](#how-can-i-contribute)

## What should I know before I get started?

### Code of Conduct

This project adheres to the Contributor Covenant [code of conduct](CODE_OF_CONDUCT.md).
By participating, you are expected to uphold this code.
Please report unacceptable behavior to [abuse@phpwomen](mailto:abuse@phpwomen.org).

### How the Site is Organized

We have two nearly identical websites [dev.phpwomen.org](http://dev.phpwomen.org) and [phpwomen.org](http://phpwomen.org).

On GitHub there are two protected branches, `master` which syncs to `dev.phpwomen.org` and `production` which syns with `phpwomen.org`.  This means that we can make changes to the site without affecting production, until we are ready to update the production web site.

# How People Should Work

New features should be added by creating a branch from master.  We prefer a naming scheme that uses the feature and issue number in the name, like `contributing-md-issue-20` or `contributing-20` or something similar.  

When the feature is ready for review or requires feedback, a Pull Request should be created from the feature branch to `master`.  A pull request must be reviewed by someone who was not the author of the feature; otherwise it needs review by multiple reviewers.  As part of the review process, a reviewer should do more than look at the code changes.  They should pull the branch locally and run it on their machine to verify the code does not break another install.  This would not apply to page text changes.  

When the feature is approved and merged, Travis CI will send the changes to the server for us. 



