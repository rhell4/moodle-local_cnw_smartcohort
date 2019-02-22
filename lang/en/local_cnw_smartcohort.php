<?php

/**
 * Smart cohort
 *
 * @package     local_cnw_smartcohort
 * @copyright   CNW Rendszerintegrációs Zrt. <moodle@cnw.hu>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$string = [
    'pluginname' => 'Smart Cohort',
    'description' => 'The Smart Cohort Module allows authorized users to define filtering criteria and to specify which cohort the filtered users would be added to. Fields "Name" and "Cohort" are required in the module. If the set criteria are true for the user, they get added to the cohort. Fields left blank are ignored by the plugin.',
    'addfilter' => 'Create new filter',
    'editfilter' => 'Edit filter',
    'delfilter' => 'Delete filter',
    'delconfirm' => 'Do you really want to delete filter \'{$a}\'?',
    'name' => 'Name',
    'cohort' => 'Cohort',
    'user_field_select_default' => '',
    'equals' => 'equal',
    'not_equals' => 'not equal',
    'filtered_users_on' => 'Filtered users on \'{$a}\'',
    'basic_data' => 'Basic data',
    'delconfirm_undo' => 'Undo cohort insertions',
    'delconfirm_undo_desc' => 'pressing this button removes users who have been added to a cohort exclusively because of this filter (and no other filters apply to them) from the cohort.',
    'delconfirm_keep' => 'Keep cohort insertions',
    'delconfirm_keep_desc' => 'pressing this button keeps users who have been added to a cohort by the filter in the cohort.',
    'delete_confirm_1' => 'Continue (undo cohort insertions)',
    'delete_confirm_2' => 'Continue (keep cohort insertions)',
    'rules' => 'Rules',
    'affected_users' => 'Affected users',
    'no_data' => 'No filters available',
    'create_filter' => 'Create filter',
    'filters' => 'Filters',
    'if' => 'If the <i>\'{$a}\'</i> field\'s value is',
    'and_if' => 'and the <i>\'{$a}\'</i> field\'s value is',
    'to' => 'to',
    'no_filtered_users' => 'Empty',
    'all_users' => 'All users',
    'initialized' => 'Initialized',
    'yes' => 'yes',
    'no' => 'in progress',
    'initialize_filter_cron' => 'Initialize filters',
    'process_queue_cron' => 'Process created&edited users',
    'affect_need_initialize' => '',
    'deleting' => 'filter is being deleted...'
];
