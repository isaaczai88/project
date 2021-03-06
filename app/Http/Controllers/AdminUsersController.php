<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminUsersController extends CBController {


    public function cbInit()
    {
        $this->setTable("users");
        $this->setPermalink("users");
        $this->setPageTitle("Users");

        $this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addDatetime("Email Verified At","email_verified_at")->showAdd(false)->showEdit(false);
		$this->addPassword("Password","password");
		$this->addText("Remember Token","remember_token")->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addImage("Photo","photo");
		$this->addSelectTable("Cb Role","cb_roles_id",["table"=>"cb_roles","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addText("Ip Address","ip_address")->strLimit(150)->maxLength(255);
		$this->addText("User Agent","user_agent")->strLimit(150)->maxLength(255);
		$this->addDatetime("Login At","login_at");
		

    }
}
