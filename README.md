# PHP files

## clear.php

clear.php is a program made for the intend to convert the files from Eurostat (mixed with tabulators and commas as separators) to files compatible for elasticsearch (only commas)

### Functioning

#### Source file

The source file can be downloaded from the URL http://appsso.eurostat.ec.europa.eu/nui/setupDownloads.do. ___Caution___: The source file must be a .tsv file and has to be in the same directory as clean.php.

__Information for Download__: clean.php is build for a full extraction with single file. The Download Page has an option to remove flags and footnotes, but clean.php can handle it.

It opens the source file and takes the first line. As there are some unwanted additional characters combined with the year numbers, they will be removed.

#### Output file

A header (citizen,sex,unit,age,asyl_app,geo,time,ammount) will be written into the output file instantly after opening or creating it.

#### Both files

Each line from the source code (excluding the first) will be broken up and each part (excluding first) will be written in combination with the first part in the output file.

### Variable Names

$valueWhenTheresNoData -> User defined Input for missing data

$in -> Data from the input file from Eurostat

$out -> New file where the new data is put

$i/$j/$k -> counters

$in_array_line1/$in_array_lineK -> lines from $in broken at the tabs, $in_array_line1 is first line, $in_array_lineK is line $k is in relation to counter $k

### Changes

1.0.4
* Removal of Flags and Footnotes

1.0.3
* Enhancements of Performance
* When there's no value in the source file, it now accepts User defined Input
* Bugfix 

1.0.2
* corrected spelling error

1.0.1
* added the option to enable or disable that N/A (not available) is written in columns with no data (:)
