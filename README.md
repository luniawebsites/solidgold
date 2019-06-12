# Introduction

## CSS syntax

This site uses the Lunia UI Library. This library is based on generic, re-usable modular CSS utility classes. Where specific, single-use design patterns are needed, these are declared using BEM syntax and grouped together in the HTML in parentheses, and the utility classes are used more sparingly (as it becomes confusing and specificity problems arise when classes for a specific context are mixed with utility classes).

Modular CSS classes are declared in the html in order from: structure/layout > spacing > alignment > text options > colour.

Example:

```<div class="flexdir-ltr-mob pad-xy-mob theme-red-mob text-r-mob">```

The universal selector (*) and the override selector (important!) are used very sparingly as they are non-performant.

## Mobile-first responsiveness

The Lunia UI Library has mobile-first responsiveness baked in. Modular CSS utility classes often end in "mob" (mobile), "tab" (tablet) and "des" (desktop). Any CSS class used in HTML will automatically cascade to bigger viewports. In other words, a class that ends in "mob" will stay active for "tab" and "des". A class that ends in "tab" will stay active for "des", but not for "mob". 

Many modular CSS utility classes for mobile and tablet viewports can also end in "only". These classes are ringfenced (restricted to their viewports), and will not cascade to bigger viewports.

## Project folder structure

All assets are placed under the "assets" folder. Minified CSS is kept directly inside the "assets" folder so styles can reference assets simply, without using "../". The original SASS sheets are kept in the "assets/sheets" folder. These are ignored in production as they are compiled into minified CSS sheets.

Partials are called using PHP "file_get_contents".

Critical CSS is inlined in the body for better performance.

Non-critical CSS is async loaded using Filament Group's loadCSS method.

Non-critical scripts are combined and deferred.


## Modified BEM Syntax

Learn about this at https://en.bem.info/methodology/quick-start/

- .block (a generic block level parent)
- .block__element (an element is a component that cannot be used outside of its block level parent)
- .block--modifier or .block__element--modifier (a modifier is a specific iteration of a block parent or element)

Examples:

- .container
- .container__button
- .container__button--red
- .container--red