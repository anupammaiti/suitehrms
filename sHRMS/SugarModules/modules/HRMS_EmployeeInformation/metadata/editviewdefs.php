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
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'employee_id',
            'label' => 'LBL_EMPLOYEE_ID',
          ),
          1 => 
          array (
            'name' => 'employee_name',
            'label' => 'LBL_EMPLOYEE_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_of_birth',
            'label' => 'LBL_DATE_OF_BIRTH',
          ),
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nationality',
            'label' => 'LBL_NATIONALITY',
          ),
          1 => 
          array (
            'name' => 'date_of_joining',
            'label' => 'LBL_DATE_OF_JOINING',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'mobile',
            'label' => 'LBL_MOBILE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'gender',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'passport_no',
            'label' => 'LBL_PASSPORT_NO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'job_title',
            'label' => 'LBL_JOB_TITLE',
          ),
          1 => 
          array (
            'name' => 'job_position',
            'label' => 'LBL_JOB_POSITION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'employee_type',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_TYPE',
          ),
          1 => 
          array (
            'name' => 'salary',
            'label' => 'LBL_SALARY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'job_location',
            'label' => 'LBL_JOB_LOCATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'qualification',
            'label' => 'LBL_QUALIFICATION',
          ),
          1 => 
          array (
            'name' => 'skills',
            'studio' => 'visible',
            'label' => 'LBL_SKILLS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_information',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_INFORMATION',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
