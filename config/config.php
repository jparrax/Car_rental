<?php
$config = [
    'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,
    'VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS,
    'LIB_PATH' => APPLICATION_PATH . DS . 'lib' . DS,
];

require_once $config['LIB_PATH'] . 'functions.php';
require_once $config['LIB_PATH'] . 'db.php';
require_once $config['LIB_PATH'] . 'carsDao.php';
require_once $config['LIB_PATH'] . 'userDao.php';
require_once $config['LIB_PATH'] . 'bookingDao.php';
?>
