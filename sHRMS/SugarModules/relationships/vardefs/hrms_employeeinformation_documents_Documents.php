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


$dictionary["Document"]["fields"]["hrms_employeeinformation_documents"] = array (
  'name' => 'hrms_employeeinformation_documents',
  'type' => 'link',
  'relationship' => 'hrms_employeeinformation_documents',
  'source' => 'non-db',
  'vname' => 'LBL_HRMS_EMPLOYEEINFORMATION_DOCUMENTS_FROM_HRMS_EMPLOYEEINFORMATION_TITLE',
  'id_name' => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
);
$dictionary["Document"]["fields"]["hrms_employeeinformation_documents_name"] = array (
  'name' => 'hrms_employeeinformation_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HRMS_EMPLOYEEINFORMATION_DOCUMENTS_FROM_HRMS_EMPLOYEEINFORMATION_TITLE',
  'save' => true,
  'id_name' => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
  'link' => 'hrms_employeeinformation_documents',
  'table' => 'hrms_employeeinformation',
  'module' => 'HRMS_EmployeeInformation',
  'rname' => 'document_name',
);
$dictionary["Document"]["fields"]["hrms_employeeinformation_documentshrms_employeeinformation_ida"] = array (
  'name' => 'hrms_employeeinformation_documentshrms_employeeinformation_ida',
  'type' => 'link',
  'relationship' => 'hrms_employeeinformation_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HRMS_EMPLOYEEINFORMATION_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
