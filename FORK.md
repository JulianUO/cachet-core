# JulianUO/cachet-core fork notes

## Upstream

- Source: [cachethq/core](https://github.com/cachethq/core)
- License: see [`LICENSE.md`](LICENSE.md) (Alt Three Services Limited)
- Trademarks: see [`TRADEMARKS.md`](TRADEMARKS.md)

This fork is not affiliated with or endorsed by Cachet / Alt Three. Thanks to the upstream maintainers.

## Why this fork exists

Used by [`JulianUO/cachet`](https://github.com/JulianUO/cachet) to:

1. Enforce patched PHP and Livewire floors (same CVEs fixed in the app fork)
2. Carry `es_AR` and other operator-oriented package changes
3. Run security CI (`composer audit`, Gitleaks, constraint checks)

## Consume from the Cachet app

In the host app `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/JulianUO/cachet-core"
    }
  ],
  "require": {
    "cachethq/core": "dev-main"
  }
}
```

Then `composer update cachethq/core`.

## Syncing upstream

```bash
git remote add upstream https://github.com/cachethq/core.git
git fetch upstream
git merge upstream/main
```
