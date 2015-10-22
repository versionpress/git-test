# Git + Symfony\\Process test

Test script to see whether a server supports Git interaction used by VersionPress.


## How to use

1. Download or clone this repo
2. Put it under your webserver
3. Visit `git-test.php` in a browser

If all went fine you should see a Git version. If not, try to update the `git-test.php` file to point to your Git binary. For example:

    $pathToGit = '/path/to/git';

 This is similar to setting [git-binary option in vpconfig](http://docs.versionpress.net/en/getting-started/configuration#git-binary).

If this doesn't help possibly the Symfony\\Process cannot read from the process output in which case you need to debug on your end.
