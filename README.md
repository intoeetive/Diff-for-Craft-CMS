# Diff for Craft CMS

Show difference between two chunks of text, in a nicely formatted way.

Usage: 
`{{ craft.diff.html(origEntry.title, entry.title) }}`
or
`{{ craft.diff.html(origEntry.title, entry.title, 'character') }}`

The 3rd parameter defines diff granularity, possible values: 'word' (default), 'character', 'paragraph', 'sentence'

The plugin files should be placed in `diff` folder under `plugins`