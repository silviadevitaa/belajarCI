<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class custommer extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("custommer_model");
  }

	public function   index()
	{
		//$data["products"] = $this->product_model->getAll();
    $data["custommer"] = $this->custommer_model->getAll();

    var_dump($data["custommer"]);
	}
}
