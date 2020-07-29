<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminFilesController extends CBController {


    public function cbInit()
    {
        $this->setTable("files");
        $this->setPermalink("files");
        $this->setPageTitle("Files");

        $this->addSelectTable("User","user_id",["table"=>"users","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addText("File Title","file_title")->strLimit(150)->maxLength(255);
		$this->addFile("File","file");
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
