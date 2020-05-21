<img src="src/icon.svg" alt="Icon">

# Carbon

Provides access to Carbon in Craft templates.

<img src="screenshot.png" alt="Screenshot">

## Usage

This plugin simply converts a date or string into a Carbon instance.

See the [Carbon docs](https://carbon.nesbot.com/docs/) for all the methods available.

#### Converting

This plugin provides a function, a filter, and a variable for converting dates into Carbon instances.

```twig
{# As a function #}
{% set date = carbon(entry.postDate) %}
{% set date = carbon('3 days ago') %}

{# As a filter #}
{% set date = entry.postDate|carbon %}
{% set date = 'Last Friday'|carbon %}

{# As a variable #}
{% set date = craft.carbon.carbon(entry.postDate) %}
{% set date = craft.carbon.carbon('Saturday 5pm') %}
```

#### Examples

```twig
{# Getters #}
{{ date.dayName }}{# Saturday #}
{{ date.locale('de').dayName }}{# Samstag #}

{# Addition #}
{{ date.addDay() }}
{{ date.addSeconds(555) }}

{# Subtraction #}
{{ date.sub('2 days') }}
{{ date.subWeek() }}

{# Difference for humans #}
{{ carbon(entry.postDate).ago() }}{# 5 days ago #}
{{ carbon(entry.postDate).locale('ja_JP').ago() }}{# 5日前 #}
{{ carbon('2020-01-01').diffForHumans('2020-02-02') }}{# 1 month before #} 
```
