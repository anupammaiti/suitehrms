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


$dictionary["hrms_employeeinformation_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'hrms_employeeinformation_documents' => 
    array (
      'lhs_module' => 'HRMS_EmployeeInformation',
      'lhs_table' => 'hrms_employeeinformation',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'hrms_employeeinformation_documents_c',
      'join_key_lhs' => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
      'join_key_rhs' => 'hrms_employeeinformation_documentsdocuments_idb',
    ),
  ),
  'table' => 'hrms_employeeinformation_documents_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'hrms_employeeinformation_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'hrms_employeeinformation_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'hrms_employeeinformation_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'hrms_employeeinformation_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'hrms_employeeinformation_documentsdocuments_idb',
      ),
    ),
  ),
);