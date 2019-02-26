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


$dashletData['HRMS_EmployeeInformationDashlet']['searchFields'] = array (
  'employee_id' => 
  array (
    'default' => '',
  ),
  'employee_name' => 
  array (
    'default' => '',
  ),
  'email' => 
  array (
    'default' => '',
  ),
  'job_title' => 
  array (
    'default' => '',
  ),
  'job_position' => 
  array (
    'default' => '',
  ),
  'job_location' => 
  array (
    'default' => '',
  ),
  'department' => 
  array (
    'default' => '',
  ),
);
$dashletData['HRMS_EmployeeInformationDashlet']['columns'] = array (
  'employee_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_NAME',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'employee_name',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'email',
  ),
  'job_title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'job_title',
  ),
  'job_location' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_LOCATION',
    'width' => '10%',
    'default' => true,
    'name' => 'job_location',
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
    'name' => 'department',
  ),
  'nationality' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NATIONALITY',
    'width' => '10%',
    'default' => true,
    'name' => 'nationality',
  ),
  'employee_id' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => false,
    'name' => 'document_name',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
