htmlstrip
=========

A class to convert a small subset of html into something reasonable you
can put in plain text email, or SMS.

[![Build Status](https://travis-ci.org/PurpleBooth/htmlstrip.svg?branch=master)](https://travis-ci.org/PurpleBooth/htmlstrip)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PurpleBooth/htmlstrip/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/PurpleBooth/htmlstrip/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/PurpleBooth/htmlstrip/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/PurpleBooth/htmlstrip/?branch=master)

How To Use
----------

Add the dependency to your composer.json
```bash
php composer.phar require purplebooth/htmlstrip:^0.1.0
```


And use it!

```
$htmlStripper = new PurpleBooth\HtmlStripper();
$htmlStripper->("<p>Hello, world.</p>")
// -> "Hello, world."
```

Examples
--------
Input:
```html
<p>Hello, world.</p>
```

Output:
```
Hello, world.
```

Input:
```html
<a href="http://pleasestopbeingsad.tumblr.com/">Quote source</a>
```

Output:
```
Quote source (http://pleasestopbeingsad.tumblr.com/)
```

Input:
```html
<ul>
    <li>You're a good person</li>
    <li>Don't be too hard on yourself</li>
    <li>Enjoy the little things</li>
</ul>
```

Output:
```
* You're a good person
* Don't be too hard on yourself
* Enjoy the little things
```

Input:
```html
<div>Tomorrow will be better.</div>
You're doing your best, and I'm proud of you.
```

Output:
```
Tomorrow will be better.


You're doing your best, and I'm proud of you.
```

Input:
```html
<blockquote>It's always good to read a good book.</blockquote>
You are not here, <i>but I am thinking of you.</i>
```

Output:
```
It's always good to read a good book. You are not here, but I am thinking of you.
```

Input:
```html
<div>
    <p>If she wants to <i>dance</i> and drink all night.</p>
    <ul>
        <li>Well theres no one that can stop her</li>
        <li>Shes going until the house lights come up or her stomach spills on to the floor</li>
        <li>This night is gonna end when we're damn well ready for it to be over</li>
        <li>Worked all week long now the music is playing on our time</li>
    </ul>
    <div><div>Hello</div><div>Fin.</div></div>
</div>
```

Output
```
If she wants to dance and drink all night.

* Well theres no one that can stop her
* Shes going until the house lights come up or her stomach spills on to the floor
* This night is gonna end when we're damn well ready for it to be over
* Worked all week long now the music is playing on our time


Hello


Fin.
```

Related
-------

* [Twig Extension](https://github.com/PurpleBooth/twig-htmlstrip)


Versioning
----------

We use [semver](http://semver.org/). See the [releases](https://github.com/PurpleBooth/htmlstrip/releases) for a changelog and versions

