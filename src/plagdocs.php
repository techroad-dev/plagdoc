<?php

use plagdocs\Api\Authentication;
use plagdocs\Api\Api;
use plagdocs\Api\Documents;
use plagdocs\Api\Exclusions;
use plagdocs\Api\Reports;
use plagdocs\Api\Roles;
use plagdocs\Api\Statuses;
use plagdocs\Api\Users;
use plagdocs\Api\Workspaces;


class plagdocs {

 
    public function __construct($params) {
        $this->params = $params;
        $this->authenticate($params);
    }

    public function authenticate($params) {
       return (new Authentication($this))->authenticate($params);
    }


    // Workspaces

    public function add_workspace($params) {
        return (new Workspaces($this))->add_workspace($params);
    }

    public function list_workspaces($params) {
        return (new Workspaces($this))->list_workspaces($params);
    }

    public function get_workspace($params) {
        return (new Workspaces($this))->get_workspace($params);
    }

    public function delete_workspace($params) {
        return (new Workspaces($this))->delete_workspace($params);
    }

    public function update_workspace($params) {
        return (new Workspaces($this))->update_workspace($params);
    }

    // Users


    public function list_users($params) {
        return (new Users($this))->list_users($params);
    }

    public function get_user($params) {
        return (new Users($this))->get_user($params);
    }

    public function add_user($params) {
        return (new Users($this))->add_user($params);
    }

    public function update_user($params) {
        return (new Users($this))->update_user($params);
    }

    public function update_user_password($params) {
        return (new Users($this))->update_user_password($params);
    }

    public function update_user_role($params) {
        return (new Users($this))->update_user_role($params);
    }

    public function delete_user($params) {
        return (new Users($this))->delete_user($params);
    }
    
    // ROLES

    public function list_roles($params) {
        return (new Roles($this))->list_roles($params);
    }

    public function get_role($params) {
        return (new Roles($this))->get_role($params);
    }

    // STATUES

    public function list_statuses($params) {
        return (new Statuses($this))->list_statuses($params);
    }

    public function get_status($params) {
        return (new Statuses($this))->get_status($params);
    }


    // EXCLUSIONS


    public function list_exclusions($params) {
        return (new Exclusions($this))->list_exclusions($params);
    }

    public function get_exclusion($params) {
        return (new Exclusions($this))->get_exclusion($params);
    }

    public function add_exclusion($params) {
        return (new Exclusions($this))->add_exclusion($params);
    }

    public function update_exclusion($params) {
        return (new Exclusions($this))->update_exclusion($params);
    }

    public function delete_exclusion($params) {
        return (new Exclusions($this))->delete_exclusion($params);
    }


    // REPORTS

    public function list_reports($params) {
        return (new Reports($this))->list_reports($params);
    }
    
    public function list_group_reports($params) {
        return (new Reports($this))->list_group_reports($params);
    }

    public function check_plagiarism($params) {
        return (new Reports($this))->check_plagiarism($params);
    }

    public function add_report($params) {
        return (new Reports($this))->add_report($params);
    }

    public function rescan_report($params) {
        return (new Reports($this))->rescan_report($params);
    }

    public function get_report($params) {
        return (new Reports($this))->get_report($params);
    }

    public function get_attachment_report($params) {
        return (new Reports($this))->get_attachment_report($params);
    }

    public function get_reports_statistics($params) {
        return (new Reports($this))->get_reports_statistics($params);
    }

    public function delete_report($params) {
        return (new Reports($this))->delete_report($params);
    }

    public function report_feedback_or_rename($params) {
        return (new Reports($this))->report_feedback_or_rename($params);
    }


    // DOCUMENTS

    public function list_documents($params) {
        return (new Documents($this))->list_documents($params);
    }

    public function get_document($params) {
        return (new Documents($this))->get_document($params);
    }

    public function add_document($params) {
        return (new Documents($this))->add_document($params);
    }

    public function update_document($params) {
        return (new Documents($this))->update_document($params);
    }

    public function delete_document($params) {
        return (new Documents($this))->delete_document($params);
    }

    public function remove_multiple_documents($params) {
        return (new Documents($this))->remove_multiple_documents($params);
    }


}


?>
