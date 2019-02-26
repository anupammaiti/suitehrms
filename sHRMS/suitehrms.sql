-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `hrms_employeeinformation`;
CREATE TABLE `hrms_employeeinformation` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `assigned_user_id` char(36) DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file_ext` varchar(100) DEFAULT NULL,
  `file_mime_type` varchar(100) DEFAULT NULL,
  `active_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `category_id` varchar(100) DEFAULT NULL,
  `subcategory_id` varchar(100) DEFAULT NULL,
  `status_id` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT 'male',
  `passport_no` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `other_information` text DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_position` varchar(255) DEFAULT NULL,
  `employee_type` varchar(100) DEFAULT 'Permanent',
  `salary` varchar(255) DEFAULT NULL,
  `alternate_phone` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_audit`;
CREATE TABLE `hrms_employeeinformation_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text DEFAULT NULL,
  `after_value_text` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_hrms_employeeinformation_parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_documents_c`;
CREATE TABLE `hrms_employeeinformation_documents_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_employeeinformation_documentshrms_employeeinformation_ida` varchar(36) DEFAULT NULL,
  `hrms_employeeinformation_documentsdocuments_idb` varchar(36) DEFAULT NULL,
  `document_revision_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_documents_alt` (`hrms_employeeinformation_documentshrms_employeeinformation_ida`,`hrms_employeeinformation_documentsdocuments_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_appraisal_c`;
CREATE TABLE `hrms_employeeinformation_hrms_appraisal_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emploea35rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_employeeinformation_hrms_appraisalhrms_appraisal_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_appraisal_ida1` (`hrms_emploea35rmation_ida`),
  KEY `hrms_employeeinformation_hrms_appraisal_alt` (`hrms_employeeinformation_hrms_appraisalhrms_appraisal_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_claim_c`;
CREATE TABLE `hrms_employeeinformation_hrms_claim_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_employeeinformation_hrms_claimhrms_employeeinformation_ida` varchar(36) DEFAULT NULL,
  `hrms_employeeinformation_hrms_claimhrms_claim_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_claim_ida1` (`hrms_employeeinformation_hrms_claimhrms_employeeinformation_ida`),
  KEY `hrms_employeeinformation_hrms_claim_alt` (`hrms_employeeinformation_hrms_claimhrms_claim_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_employeebirthday_c`;
CREATE TABLE `hrms_employeeinformation_hrms_employeebirthday_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplo3e56rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplof16firthday_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_employeebirthday_ida1` (`hrms_emplo3e56rmation_ida`),
  KEY `hrms_employeeinformation_hrms_employeebirthday_alt` (`hrms_emplof16firthday_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_employeeconfirmation_c`;
CREATE TABLE `hrms_employeeinformation_hrms_employeeconfirmation_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplo5dfermation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplo1a43rmation_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_employeeconfirmation_ida1` (`hrms_emplo5dfermation_ida`),
  KEY `hrms_employeeinformation_hrms_employeeconfirmation_alt` (`hrms_emplo1a43rmation_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_employeeleavesummary_c`;
CREATE TABLE `hrms_employeeinformation_hrms_employeeleavesummary_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplof4a3rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplobcd3summary_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_employeeleavesummary_ida1` (`hrms_emplof4a3rmation_ida`),
  KEY `hrms_employeeinformation_hrms_employeeleavesummary_alt` (`hrms_emplobcd3summary_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_employeeperformance_c`;
CREATE TABLE `hrms_employeeinformation_hrms_employeeperformance_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplofaaermation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplo5ab0ormance_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_employeeperformance_ida1` (`hrms_emplofaaermation_ida`),
  KEY `hrms_employeeinformation_hrms_employeeperformance_alt` (`hrms_emplo5ab0ormance_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_employeetimesheet_c`;
CREATE TABLE `hrms_employeeinformation_hrms_employeetimesheet_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplo646drmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplo2ce5mesheet_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_employeetimesheet_ida1` (`hrms_emplo646drmation_ida`),
  KEY `hrms_employeeinformation_hrms_employeetimesheet_alt` (`hrms_emplo2ce5mesheet_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_payroll_c`;
CREATE TABLE `hrms_employeeinformation_hrms_payroll_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emploe0d1rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_employeeinformation_hrms_payrollhrms_payroll_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_payroll_ida1` (`hrms_emploe0d1rmation_ida`),
  KEY `hrms_employeeinformation_hrms_payroll_alt` (`hrms_employeeinformation_hrms_payrollhrms_payroll_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_resignationretirement_c`;
CREATE TABLE `hrms_employeeinformation_hrms_resignationretirement_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emploc7d0rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplo486eirement_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_resignationretirement_ida1` (`hrms_emploc7d0rmation_ida`),
  KEY `hrms_employeeinformation_hrms_resignationretirement_alt` (`hrms_emplo486eirement_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_rewardsrecognition_c`;
CREATE TABLE `hrms_employeeinformation_hrms_rewardsrecognition_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplo370crmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplodfbcgnition_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_rewardsrecognition_ida1` (`hrms_emplo370crmation_ida`),
  KEY `hrms_employeeinformation_hrms_rewardsrecognition_alt` (`hrms_emplodfbcgnition_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `hrms_employeeinformation_hrms_terminationlayoff_c`;
CREATE TABLE `hrms_employeeinformation_hrms_terminationlayoff_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `hrms_emplo1d90rmation_ida` varchar(36) DEFAULT NULL,
  `hrms_emplo4f65nlayoff_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hrms_employeeinformation_hrms_terminationlayoff_ida1` (`hrms_emplo1d90rmation_ida`),
  KEY `hrms_employeeinformation_hrms_terminationlayoff_alt` (`hrms_emplo4f65nlayoff_idb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2019-02-26 08:15:00
