# Kirby-Blog

Kirby Plugin for a plain and simple blog.

# Installation

## Manual Setup

1. Download the Git repository as a Zip.
2. Unpack the Zip and move contents of resulting directory to `site/plugins/blog`.

## Git Setup

1. Open a shell at the root of your Kirby or Kirby Starterkit installation.
2. Run `git submodule add -b master --name blog git@github.com:moritzz/Kirby-Blog.git site/plugins/blog`

## Creating a Blog and Posts

1. Open Kirby Panel.
2. Create a Blog page.
3. Fill out the blog page form and configure it to you need.
4. Add Article pages as children to the Blog page.

To run multiple blogs on one site too, just create multiple Blog pages with corresponding Article child pages.

# Activate Formatted Article Teasers

Blog can expose formatted content (aka Kirbytext) teasers on the overview pages. Because [Tidy for PHP](http://php.net/manual/en/book.tidy.php) versions diverge, you need to activate this feature by adding the snippet below to your `site/config.php` file.

**Nota Bene:** If PHP throws warnings or errors, your Tidy for PHP version might be out of date. Please remove the lines below and ask your hosting provider for an update.

```php
/*
  Blog Setup
*/

c::set('tidy', true);
```

# Version History #

- v1.0: First official release
- v1.0.1: Fixed installation guide

# Planned Additions

- Integration with a bullet proof version of my [Calendar plugin fork](https://github.com/moritzz/kirby-calendar-plugin).