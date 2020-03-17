<?php

namespace App\Models;

class Layout_fond extends Base {

  protected $tableName = TABLE_PREFIX . 'layout_fond';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Layout_fond();
    }
    return self::$instance;
  }