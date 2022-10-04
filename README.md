### bug 4978 reproduction
[actual ticket](https://github.com/sebastianbergmann/phpunit/issues/4978)

#### steps to reproduce

- `vendor/bin/phpunit`: tests ok, no deprecation notice
- `vendor/bin/phpunit tests/`: test ok, deprecation notice displayed 