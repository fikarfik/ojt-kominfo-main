<?php

return array(
    'authentication' => function () {
        return true;
    },
    'backends' => array(
        'default' => array(
            'baseUrl' => '/public/ckfinder/userfiles/',
            'root' => '/public/ckfinder/userfiles/',
            'chmodFiles' => 0777,
            'chmodFolders' => 0755,
            'filesystemEncoding' => 'UTF-8',
        ),
    ),
);