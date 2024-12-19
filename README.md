## About
This package adds data incrementally that can then be written at once to a file. This library is used by the MySQL Table Editor project referenced [here](https://github.com/hotelmah/mysql-table-editor).


## Notice
- This package is rudimentary and not intended for public use. If you would like me to further develop this package to be more robust, please open an issue or discussion. Thank you.


## Files Not Included in Packagist Package
- *.gitattributes*
- *WriteFile-Test-1.php*


## Test File
- *WriteFile-Test-1.php*
- This is a sample of how the package works.


## In your Script
- Add the following (see the test file for an example):

`
require_once('vendor/autoload.php');
`

`
use WriteFile\ClsWriteFile;
`


## Installation - Composer
- run this command in your project root:

`
composer require hotelmah/write-file
`

- There is no need to manually create/update a composer.json file in your project root since this command does it automatically.
- The package is listed on Packagist, but is hosted on GitHub where the source is pulled from.


## Installation - Manual
- Copy the src directory contents to an appropriately named directory like includes/ in your LAMP web hosting provider.
- Refer to the 'In your Script' heading above and/or test file.


## Feedback
- Forks and Pull Requests are welcomed.
- Suggestions and comments for improvement are requested.
- Thank you for reading!


## License
- GNU GENERAL PUBLIC LICENSE, Version 3.
