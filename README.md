domf - Dumb pOMF clone
======================

[![Code Climate](https://codeclimate.com/github/slurdge/domf/badges/gpa.svg)](https://codeclimate.com/github/slurdge/domf)
[![Issue Count](https://codeclimate.com/github/slurdge/domf/badges/issue_count.svg)](https://codeclimate.com/github/slurdge/domf)

This script is a one php file (+config) that allows you to upload files to a host with pomf protocol.

This script *does* support:

 * Uploading multiple files
 * Filtering mime-types
 * JSON answers
 * Short URLs
 * No database needed

This script *does not* support:

 * Other responses than JSON
 * Upload from the webbrowser
 * Users, authentication, etc.

Installation
------------

Just copy the script to some location and edit `config.php` files.
Variables should be self explained.

If you want, you can also merge `config.php` and `index.php` files by doing so:

```shell
mv index.php index_.php
cat config.php index_.php > index.php
rm config.php index_.php
```

You can now freely move index.php file.

Securing
--------

If you want to "secure" your script, you can put it in a random location, such as
```python
>>> import uuid
>>> str(uuid.uuid4()).replace('-','')
'32b988025e3b477799b9c333ec57048b'
```

You should also use https protocol in order to prevent someone sniffing the URL.

Once you've done that, change the `upload_path` to some other location.

Short URLs
----------

Short URLs are relying on symbolic links, so operating support for symbolic link is needed if you want short URLs.

Usage
-----

Main usage is with pomf clients since there is no web interface. It works well from [ShareX](https://getsharex.com/).