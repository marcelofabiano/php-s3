<?php

$config = require __DIR__ . '/config.php';

$client = new \Aws\S3\S3Client($config);

$adapter = new \League\Flysystem\AwsS3v3\AwsS3Adapter($client, '');

$filesystem = new \League\Flysystem\Filesystem($adapter);

return $filesystem;
