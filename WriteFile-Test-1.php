<?php

namespace TEST;

require_once('vendor/autoload.php');
// require_once('src/class.write.file.php');

use WriteFile\ClsWriteFile;

/* ===================================================================================================================== */

$TestFile = new ClsWriteFile();

$Variable = "How are you?";

$TestFile->saveData("Hello" . "\r", false);
$TestFile->saveData("World" . "\r", false);
$TestFile->saveData($Variable, false);
$TestFile->write("HelloWorld.txt");

/* ===================================================================================================================== */

unset($TestFile);

//* ===================================================================================================================== */
