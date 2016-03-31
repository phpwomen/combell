# Contributing to PHP Women website

:+1::tada: First off, thanks for taking the time to contribute! :tada::+1:

The following is a set of guidelines for contributing to [PHP Women website](https://github.com/phpwomen/combell/), which is hosted in the [PHP Women Organization](https://github.com/phpwomen/) on GitHub.

These are just guidelines, not rules, use your best judgment and feel free to propose changes to this document in a pull request.

#### Table Of Contents

[What should I know before I get started?](#what-should-i-know-before-i-get-started)
  * [Code of Conduct](#code-of-conduct)
  * [How the Site is Organized](#how-the-site-is-organized)

[How Can I Contribute?](#how-can-i-contribute)
   * [Reporting Bugs](#reporting-bugs)
   * [How To Suggest Changes or Request New Features](#how-to-suggest-changes-or-request-new-features)
   * [How To Submit Changes](#how-to-submit-changes)
      * [Pull Requests](#pull-requests)
      * [Style Guide](#style-guide)

## What should I know before I get started?

### Code of Conduct

This project adheres to the Contributor Covenant [code of conduct](CODE_OF_CONDUCT.md).
By participating, you are expected to uphold this code.
Please report unacceptable behavior to [hello@phpwomen.org](mailto:hello@phpwomen.org).

### How the Site is Organized

We have two nearly identical websites [dev.phpwomen.org](http://dev.phpwomen.org) and [phpwomen.org](http://phpwomen.org).

On GitHub there are two protected branches, `master` which syncs to `dev.phpwomen.org` and `production` which syncs with `phpwomen.org`.  This means that we can make changes to the site without affecting production, until we are ready to update the production web site.

## How Can I Contribute?

### Reporting Bugs

This section guides you through submitting a bug report for PHP Women website. Following these guidelines helps maintainers and the community understand your report :pencil:, reproduce the behavior :computer: :computer:, and find related reports :mag_right:.

Before creating bug reports, please check [this list](https://github.com/phpwomen/combell/issues) as it may have already been reported. When you are creating a bug report, please [include as many details as possible](#how-do-i-submit-a-good-bug-report). If you'd like, you can use [this template](#template-for-submitting-bug-reports) to structure the information.

#### How Do I Submit A (Good) Bug Report?

Website bugs must be reported in the Issues section of this project, here on Github. Bugs are tracked as [GitHub issues](https://guides.github.com/features/issues/). After you've made sure this bug hasn't been reported, create an issue and provide the following information.

Explain the problem and include additional details to help maintainers reproduce the problem:

* **Use a clear and descriptive title** for the issue to identify the problem.
* **Describe the exact steps which reproduce the problem** in as many details as possible.
* **Describe the behavior you observed after following the steps** and point out what exactly is the problem with that behavior.
* **Explain which behavior you expected to see instead and why.**
* **Include screenshots and animated GIFs** which show you following the described steps and clearly demonstrate the problem.  You can use [this tool](http://www.cockos.com/licecap/) to record GIFs on OSX and Windows, and [this tool](https://github.com/colinkeenan/silentcast) or [this tool](https://github.com/GNOME/byzanz) on Linux.

### How to Suggest Changes or Request New Features

We warmly welcome contributions.

If you have an idea for something new for the website, please create [an issue](https://github.com/phpwomen/combell/issues).  Give the issue a descriptive title that tells the problem you want to solve.  Please use a label to tag your suggestion as `enhancement` or `question`.  A contributor will comment to ask you clarifying questions and to assist you with getting the feature ready to be implemented.  If you would like to make the contribution, you will be able to do that.

Requests specific to the business of the PHP Women organization should be directed to [hello@phpwomen.org](mailto:hello@phpwomen.org).


### How To Submit Changes

We are so excited to have your help!

Issues tagged with the label `Help Wanted` that aren't assigned to anyone, are available to be worked on. If an issue has gone quiet, we welcome you to comment and wake it up.

New features and Bug Fixes should be added by creating a branch from master.  We prefer naming branches by using the feature and/or issue number in the name, like `contributing-md-issue-20`, `contributing-20`, `issue-20`.


#### Pull Requests

* When the feature is ready for review or requires feedback, a Pull Request should be created from the feature branch to `master`.
* A pull request must be reviewed by someone who was not the author of the feature; otherwise it needs review by multiple reviewers.  As part of the review process, a reviewer should do more than look at the code changes.  They should pull the branch locally and run it on their machine to verify the code does not break another install.  This would not apply to page text changes.

When the feature is approved and the Pull Request is merged, Travis CI will send the changes to the server for us.

#### Style Guide

We follow the [Wordpress Style Guide](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/).  Please be certain that your submission follows these rules. Your IDE may let you apply the Wordpress style guide for the project.