# TYPO3 Extension `extbase_records_with_no_l10n_parent`

This extension changes the behaviour of Extbase to show also records without a language parent.

**Example**: Given are the following records

```
- News 1 (in default)
 - [Translated to DE] News 1 in DE (translated)
- News 2 in -1 (all)
- News 3 in DE (with no parent/default)
```

On a translated page and without this extension, only the records *News 1 in DE* and *News 2 in -1* are shown.
With this extension, also the record *News 3 in DE* will be shown.

## Requirements

This extension works with TYPO3 10 or 9. If TYPO3 9.5 LTS version is used, the setting `config.tx_extbase.features.consistentTranslationOverlayHandling` must be either 1 or not set!
Read more about it [docs.typo3.org](https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.5/Important-82363-MakeExtBaseTranslationHandlingConsistentWithTyposcript.html)

## Usage

1. Install this extension: Use `composer require georgringer/extbase-records-with-no-l10n-parent` or install it via Extension Manager.
2. Configure the extension in the Install Tool > Settings > Extension Configuration > extbase_records_with_no_l10n_parent: Set those tables which should use the changed behaviour. Either use `*` or a comma separated list like `tx_news_domain_model_news,your_extension_table`.

## Sponsor

Thanks to the sponsors:

- Schweizer Alpen-Club SAC https://www.sac-cas.ch 
