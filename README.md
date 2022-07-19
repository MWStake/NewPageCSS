The NewPageCSS extension uses the tag <code>&lt;css&gt;</code> to include a CSS in the text of the wiki page; that CSS is then put into the header of the resulting HTML, and so formats your page. If you are creating a wiki page that ends up requiring a lot of <code>style</code> modifiers, it's probably simpler to put them into a CSS style sheet.


# Usage

``` html
<css>
table.uc {
    border-collapse: collapse;
}

.uc th {
    background-color: #f2f2f2;
    border: 1px solid black;
}

.uc td {
    border: 1px solid black;
}

.uc td.pm {
    background-color: #ffa0a0;
}
</css>

<table class="uc">

...

</table>
```

# See also

I would like to acknowledge the author of the original extension [PageCSS](https://www.mediawiki.org/wiki/Extension:PageCSS) (Ævar Arnfjörð Bjarmason), which I have updated so it will work with current versions of MediaWiki.
