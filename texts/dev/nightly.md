
ENTITLE='Compiling nightly   releases'
RUTITLE='Компиляция nightly-релизо'
TARGET=doc/devel/nightly/index.php

luwrain-page-en

# Compiling nightly releases

It's very easy to~get our nightly build compiled 
the~same way as~we~do when we~publish [them](local:/download/nightly/)  on~this website.
We always do this on~GNU/Linux system using Java~SE~1.8.
So, if you would like to~get through this~process too,
you need to~have GNU/Linux distro (preferably Ubuntu) with general set of~utilities for~Java development.
Roughly these utilities must include:

* javac
* ant 
* git
* bash
* wget
* zip
* md5sum
* sha1sum

if you have all~of~this, we can go ahead. 
Just do the~following steps to~do~our~nightly~build:



1. Download our _lwr-nightly_script by~the~link below
2. Make it executable
3. Run it
4. Find the~files in~the~newly created temporary directory

It's all! So, _lwr-nightly_ script is~available here:

* [https://github.com/luwrain/base/raw/master/scripts/lwr-nightly](https://github.com/luwrain/base/raw/master/scripts/lwr-nightly)

Once you get it downloaded, make it executable and run it:

```
chmod 755 lwr-nightly
```

```
./lwr-nightly
```

On~its~start this script writes the~path to~the~temporary directory,
where it~does all~work and where you can find the~result when everything is~finished.
Tar and Zip archives, as~well as MD5 and SHA1 checksums, probably, are the~files you are expecting to~get!

luwrain-page-ru

# Компиляция nightly-релиза
