<?php
/**
* The HRMS solution is group of multiple modules & dashboard reports in SugarCRM and SuiteCRM.
*
* NOTICE OF LICENSE
* 
* Each copy of the software must be used for only one production website, it may be used on additional
* test servers. You are not permitted to make copies of the software without first purchasing the
* appropriate additional licenses. This license does not grant any reseller privileges.
* 
* @author    Shahab
* @copyright 2007-2017 ShahabFK Enterprises
* @license   Commercial Module License
*/


$module_name = 'HRMS_EmployeeInformation';
$OBJECT_NAME = 'HRMS_EMPLOYEEINFORMATION';
$listViewDefs [$module_name] = 
array (
  'EMPLOYEE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_ID',
    'width' => '10%',
    'default' => true,
	'link' => true,
  ),
  'EMPLOYEE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_NAME',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'JOB_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'JOB_LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_LOCATION',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'DEPARTMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'NATIONALITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NATIONALITY',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'QUALIFICATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUALIFICATION',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => false,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
    'link' => true,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
?>
