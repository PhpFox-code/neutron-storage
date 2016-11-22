# phpfox-filestorage
=====================================

>
> 
>
>

local path or real path.
```php


echo  $storage->url('local', 'profile/picture/sample_01.png');
// print http://www.yoursite.com/path/to/profile/picture/sample_01.png
```

Or
 
```php
print http://bucket-s3.amazone.com/path/to/profile/picture/sample_01.png
```

### Move file from local

```php
$data = $storage->move('s3', $filename,  'profile/picture/sample_01.png');
```

### Copy from local

```php
$data = $storage->copy('s3', $filename,  'profile/picture/sample_01.png');
```
### Copy to local

```php
$data = $storage->localCopy('s3', $filename,  'profile/picture/sample_01.png');
```

### Delete object
```php
$data = $storage->remove('s3', $filename,  'profile/picture/sample_01.png');
```


