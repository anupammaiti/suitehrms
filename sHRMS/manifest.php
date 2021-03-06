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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'HRMS',
  'author' => 'Shahab Khan',
  'description' => 'HRMS',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'HRMS',
  'published_date' => '2019-02-26 10:00:00',
  'type' => 'module',
  'version' => 1366729072,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'HRMS',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'HRMS_Appraisal',
      'class' => 'HRMS_Appraisal',
      'path' => 'modules/HRMS_Appraisal/HRMS_Appraisal.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'HRMS_BusinessTourPicnic',
      'class' => 'HRMS_BusinessTourPicnic',
      'path' => 'modules/HRMS_BusinessTourPicnic/HRMS_BusinessTourPicnic.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'HRMS_CandidateInformation',
      'class' => 'HRMS_CandidateInformation',
      'path' => 'modules/HRMS_CandidateInformation/HRMS_CandidateInformation.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'HRMS_EmployeeBirthday',
      'class' => 'HRMS_EmployeeBirthday',
      'path' => 'modules/HRMS_EmployeeBirthday/HRMS_EmployeeBirthday.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'HRMS_EmployeeConfirmation',
      'class' => 'HRMS_EmployeeConfirmation',
      'path' => 'modules/HRMS_EmployeeConfirmation/HRMS_EmployeeConfirmation.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'HRMS_EmployeeInformation',
      'class' => 'HRMS_EmployeeInformation',
      'path' => 'modules/HRMS_EmployeeInformation/HRMS_EmployeeInformation.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'HRMS_EmployeeLeaveSummary',
      'class' => 'HRMS_EmployeeLeaveSummary',
      'path' => 'modules/HRMS_EmployeeLeaveSummary/HRMS_EmployeeLeaveSummary.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'HRMS_EmployeePerformance',
      'class' => 'HRMS_EmployeePerformance',
      'path' => 'modules/HRMS_EmployeePerformance/HRMS_EmployeePerformance.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'HRMS_EmployeeTimesheet',
      'class' => 'HRMS_EmployeeTimesheet',
      'path' => 'modules/HRMS_EmployeeTimesheet/HRMS_EmployeeTimesheet.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'HRMS_HolidayList',
      'class' => 'HRMS_HolidayList',
      'path' => 'modules/HRMS_HolidayList/HRMS_HolidayList.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'HRMS_Jobs',
      'class' => 'HRMS_Jobs',
      'path' => 'modules/HRMS_Jobs/HRMS_Jobs.php',
      'tab' => true,
    ),
    11 => 
    array (
      'module' => 'HRMS_Leaves',
      'class' => 'HRMS_Leaves',
      'path' => 'modules/HRMS_Leaves/HRMS_Leaves.php',
      'tab' => true,
    ),
    12 => 
    array (
      'module' => 'HRMS_Payroll',
      'class' => 'HRMS_Payroll',
      'path' => 'modules/HRMS_Payroll/HRMS_Payroll.php',
      'tab' => true,
    ),
    13 => 
    array (
      'module' => 'HRMS_RewardsRecognition',
      'class' => 'HRMS_RewardsRecognition',
      'path' => 'modules/HRMS_RewardsRecognition/HRMS_RewardsRecognition.php',
      'tab' => true,
    ),
    14 => 
    array (
      'module' => 'HRMS_Support',
      'class' => 'HRMS_Support',
      'path' => 'modules/HRMS_Support/HRMS_Support.php',
      'tab' => true,
    ),
    15 => 
    array (
      'module' => 'HRMS_Training',
      'class' => 'HRMS_Training',
      'path' => 'modules/HRMS_Training/HRMS_Training.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_appraisal_documents_HRMS_Appraisal.php',
      'to_module' => 'HRMS_Appraisal',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_businesstourpicnic_documents_HRMS_BusinessTourPicnic.php',
      'to_module' => 'HRMS_BusinessTourPicnic',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_candidateinformation_documents_HRMS_CandidateInformation.php',
      'to_module' => 'HRMS_CandidateInformation',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeebirthday_documents_HRMS_EmployeeBirthday.php',
      'to_module' => 'HRMS_EmployeeBirthday',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeeconfirmation_documents_HRMS_EmployeeConfirmation.php',
      'to_module' => 'HRMS_EmployeeConfirmation',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeeinformation_documents_HRMS_EmployeeInformation.php',
      'to_module' => 'HRMS_EmployeeInformation',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeeleavesummary_documents_HRMS_EmployeeLeaveSummary.php',
      'to_module' => 'HRMS_EmployeeLeaveSummary',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeeperformance_documents_HRMS_EmployeePerformance.php',
      'to_module' => 'HRMS_EmployeePerformance',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_employeetimesheet_documents_HRMS_EmployeeTimesheet.php',
      'to_module' => 'HRMS_EmployeeTimesheet',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_holidaylist_documents_HRMS_HolidayList.php',
      'to_module' => 'HRMS_HolidayList',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_jobs_documents_HRMS_Jobs.php',
      'to_module' => 'HRMS_Jobs',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_leaves_documents_HRMS_Leaves.php',
      'to_module' => 'HRMS_Leaves',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_payroll_documents_HRMS_Payroll.php',
      'to_module' => 'HRMS_Payroll',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_rewardsrecognition_documents_HRMS_RewardsRecognition.php',
      'to_module' => 'HRMS_RewardsRecognition',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_support_documents_HRMS_Support.php',
      'to_module' => 'HRMS_Support',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/hrms_training_documents_HRMS_Training.php',
      'to_module' => 'HRMS_Training',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_appraisal_documentsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_businesstourpicnic_documentsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_candidateinformation_documentsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeebirthday_documentsMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeconfirmation_documentsMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_appraisalMetaData.php',
    ),
    6 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_employeeperformanceMetaData.php',
    ),
    7 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_documentsMetaData.php',
    ),
    8 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_rewardsrecognitionMetaData.php',
    ),
    9 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_payrollMetaData.php',
    ),
    10 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_employeetimesheetMetaData.php',
    ),
    11 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_employeeconfirmationMetaData.php',
    ),
    12 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_employeebirthdayMetaData.php',
    ),
    13 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_employeeleavesummaryMetaData.php',
    ),
    14 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_terminationlayoffMetaData.php',
    ),
    15 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_resignationretirementMetaData.php',
    ),
    16 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeinformation_hrms_claimMetaData.php',
    ),
    17 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeleavesummary_documentsMetaData.php',
    ),
    18 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeeperformance_documentsMetaData.php',
    ),
    19 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_employeetimesheet_documentsMetaData.php',
    ),
    20 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_holidaylist_documentsMetaData.php',
    ),
    21 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_jobs_hrms_candidateinformationMetaData.php',
    ),
    22 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_jobs_documentsMetaData.php',
    ),
    23 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_leaves_documentsMetaData.php',
    ),
    24 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_leaves_hrms_employeeleavesummaryMetaData.php',
    ),
    25 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_organization_hrms_employeeinformationMetaData.php',
    ),
    26 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_payroll_documentsMetaData.php',
    ),
    27 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_rewardsrecognition_documentsMetaData.php',
    ),
    28 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_support_documentsMetaData.php',
    ),
    29 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrms_training_documentsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Appraisal',
      'to' => 'modules/HRMS_Appraisal',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_BusinessTourPicnic',
      'to' => 'modules/HRMS_BusinessTourPicnic',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_CandidateInformation',
      'to' => 'modules/HRMS_CandidateInformation',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeeBirthday',
      'to' => 'modules/HRMS_EmployeeBirthday',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeeConfirmation',
      'to' => 'modules/HRMS_EmployeeConfirmation',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeeInformation',
      'to' => 'modules/HRMS_EmployeeInformation',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeeLeaveSummary',
      'to' => 'modules/HRMS_EmployeeLeaveSummary',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeePerformance',
      'to' => 'modules/HRMS_EmployeePerformance',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_EmployeeTimesheet',
      'to' => 'modules/HRMS_EmployeeTimesheet',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_HolidayList',
      'to' => 'modules/HRMS_HolidayList',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Jobs',
      'to' => 'modules/HRMS_Jobs',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Leaves',
      'to' => 'modules/HRMS_Leaves',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Payroll',
      'to' => 'modules/HRMS_Payroll',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_RewardsRecognition',
      'to' => 'modules/HRMS_RewardsRecognition',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Support',
      'to' => 'modules/HRMS_Support',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRMS_Training',
      'to' => 'modules/HRMS_Training',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesByDepartmentChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesByDepartmentChartDashlet',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesByGenderChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesByGenderChartDashlet',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesByJobLocationChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesByJobLocationChartDashlet',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesByNationalityChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesByNationalityChartDashlet',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesByQualificationChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesByQualificationChartDashlet',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesInformationChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesInformationChartDashlet',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesLeavesSummaryChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesLeavesSummaryChartDashlet',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSEmployeesPerformanceStatusChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSEmployeesPerformanceStatusChartDashlet',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSJobsChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSJobsChartDashlet',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Charts/Dashlets/HRMSModulesStatisticsChartDashlet',
      'to' => 'modules/Charts/Dashlets/HRMSModulesStatisticsChartDashlet',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Appraisal.php',
      'to_module' => 'HRMS_Appraisal',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_BusinessTourPicnic.php',
      'to_module' => 'HRMS_BusinessTourPicnic',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_CandidateInformation.php',
      'to_module' => 'HRMS_CandidateInformation',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeeBirthday.php',
      'to_module' => 'HRMS_EmployeeBirthday',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeeConfirmation.php',
      'to_module' => 'HRMS_EmployeeConfirmation',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeeInformation.php',
      'to_module' => 'HRMS_EmployeeInformation',
      'language' => 'en_us',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeeLeaveSummary.php',
      'to_module' => 'HRMS_EmployeeLeaveSummary',
      'language' => 'en_us',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeePerformance.php',
      'to_module' => 'HRMS_EmployeePerformance',
      'language' => 'en_us',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_EmployeeTimesheet.php',
      'to_module' => 'HRMS_EmployeeTimesheet',
      'language' => 'en_us',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_HolidayList.php',
      'to_module' => 'HRMS_HolidayList',
      'language' => 'en_us',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Jobs.php',
      'to_module' => 'HRMS_Jobs',
      'language' => 'en_us',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Leaves.php',
      'to_module' => 'HRMS_Leaves',
      'language' => 'en_us',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Payroll.php',
      'to_module' => 'HRMS_Payroll',
      'language' => 'en_us',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_RewardsRecognition.php',
      'to_module' => 'HRMS_RewardsRecognition',
      'language' => 'en_us',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Support.php',
      'to_module' => 'HRMS_Support',
      'language' => 'en_us',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRMS_Training.php',
      'to_module' => 'HRMS_Training',
      'language' => 'en_us',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_appraisal_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_appraisal_documents_HRMS_Appraisal.php',
      'to_module' => 'HRMS_Appraisal',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_businesstourpicnic_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_businesstourpicnic_documents_HRMS_BusinessTourPicnic.php',
      'to_module' => 'HRMS_BusinessTourPicnic',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_candidateinformation_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_candidateinformation_documents_HRMS_CandidateInformation.php',
      'to_module' => 'HRMS_CandidateInformation',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeebirthday_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeebirthday_documents_HRMS_EmployeeBirthday.php',
      'to_module' => 'HRMS_EmployeeBirthday',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeconfirmation_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeconfirmation_documents_HRMS_EmployeeConfirmation.php',
      'to_module' => 'HRMS_EmployeeConfirmation',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeinformation_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeinformation_documents_HRMS_EmployeeInformation.php',
      'to_module' => 'HRMS_EmployeeInformation',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeleavesummary_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeleavesummary_documents_HRMS_EmployeeLeaveSummary.php',
      'to_module' => 'HRMS_EmployeeLeaveSummary',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeperformance_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeeperformance_documents_HRMS_EmployeePerformance.php',
      'to_module' => 'HRMS_EmployeePerformance',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeetimesheet_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_employeetimesheet_documents_HRMS_EmployeeTimesheet.php',
      'to_module' => 'HRMS_EmployeeTimesheet',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_holidaylist_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_holidaylist_documents_HRMS_HolidayList.php',
      'to_module' => 'HRMS_HolidayList',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_jobs_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_jobs_documents_HRMS_Jobs.php',
      'to_module' => 'HRMS_Jobs',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_leaves_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_leaves_documents_HRMS_Leaves.php',
      'to_module' => 'HRMS_Leaves',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_payroll_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_payroll_documents_HRMS_Payroll.php',
      'to_module' => 'HRMS_Payroll',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_rewardsrecognition_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_rewardsrecognition_documents_HRMS_RewardsRecognition.php',
      'to_module' => 'HRMS_RewardsRecognition',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_support_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_support_documents_HRMS_Support.php',
      'to_module' => 'HRMS_Support',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_training_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/hrms_training_documents_HRMS_Training.php',
      'to_module' => 'HRMS_Training',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_appraisal_documents_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_businesstourpicnic_documents_name',
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_candidateinformation_documents_name',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeebirthday_documents_name',
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeeconfirmation_documents_name',
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeeinformation_documents_name',
      ),
    ),
    6 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeeleavesummary_documents_name',
      ),
    ),
    7 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeeperformance_documents_name',
      ),
    ),
    8 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_employeetimesheet_documents_name',
      ),
    ),
    9 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_holidaylist_documents_name',
      ),
    ),
    10 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_jobs_documents_name',
      ),
    ),
    11 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_leaves_documents_name',
      ),
    ),
    12 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_payroll_documents_name',
      ),
    ),
    13 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_rewardsrecognition_documents_name',
      ),
    ),
    14 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_support_documents_name',
      ),
    ),
    15 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'hrms_training_documents_name',
      ),
    ),
  ),
);
