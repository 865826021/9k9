<?php

return array(
    'code'      => 'ftxia',
    'name'      => '飞天侠开放平台',
    'desc'      => '通过飞天侠开放平台获取商品数据，此接口已经作废',
    'author'    => 'Ftxia',
    'domain'   => 'http://www.laicaiji.com',
    'version'   => '1.0',
    'config'    => array(
        'app_key'   => array(        //账号
            'text'  => 'App Key',
            'desc'  => '飞天侠开放平台申请应用获取',
            'type'  => 'text',
        ),
        'app_secret'       => array(        //密钥
            'text'  => 'App Secret',
            'desc'  => '飞天侠开放平台申请应用获取',
            'type'  => 'text',
        )
    )
);