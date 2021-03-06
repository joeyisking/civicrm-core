<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Navigation.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:50047b21bb89d424e7852ea198e521fc)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Navigation constructor.
 */
class CRM_Core_DAO_Navigation extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_navigation';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which Domain is this navigation item for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * Navigation Title
   *
   * @var string
   */
  public $label;
  /**
   * Internal Name
   *
   * @var string
   */
  public $name;
  /**
   * url in case of custom navigation link
   *
   * @var string
   */
  public $url;
  /**
   * Permission for menu item
   *
   * @var string
   */
  public $permission;
  /**
   * Permission Operator
   *
   * @var string
   */
  public $permission_operator;
  /**
   * Parent navigation item, used for grouping
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   * Is this navigation item active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * If separator needs to be added after this menu item
   *
   * @var boolean
   */
  public $has_separator;
  /**
   * Ordering of the navigation items in various blocks.
   *
   * @var int
   */
  public $weight;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_navigation';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'parent_id', 'civicrm_navigation', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Navigation ID') ,
          'required' => true,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Navigation Domain') ,
          'description' => 'Which Domain is this navigation item for',
          'required' => true,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Navigation Item Label') ,
          'description' => 'Navigation Title',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Navigation Item Machine Name') ,
          'description' => 'Internal Name',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'url' => array(
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Url') ,
          'description' => 'url in case of custom navigation link',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'permission' => array(
          'name' => 'permission',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Required Permission') ,
          'description' => 'Permission for menu item',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'permission_operator' => array(
          'name' => 'permission_operator',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Permission Operator') ,
          'description' => 'Permission Operator',
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Navigation parent ID') ,
          'description' => 'Parent navigation item, used for grouping',
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
          'FKClassName' => 'CRM_Core_DAO_Navigation',
          'pseudoconstant' => array(
            'table' => 'civicrm_navigation',
            'keyColumn' => 'id',
            'labelColumn' => 'label',
            'nameColumn' => 'name',
          )
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active') ,
          'description' => 'Is this navigation item active?',
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'has_separator' => array(
          'name' => 'has_separator',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Use separator') ,
          'description' => 'If separator needs to be added after this menu item',
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Ordering of the navigation items in various blocks.',
          'table_name' => 'civicrm_navigation',
          'entity' => 'Navigation',
          'bao' => 'CRM_Core_BAO_Navigation',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'navigation', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'navigation', $prefix, array());
    return $r;
  }
}
