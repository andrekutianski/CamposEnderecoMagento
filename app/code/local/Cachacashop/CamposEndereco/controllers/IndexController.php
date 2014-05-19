<?php
class Cachacashop_CamposEndereco_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Fronted Page"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("fronted page", array(
                "label" => $this->__("Fronted Page"),
                "title" => $this->__("Fronted Page")
		   ));

      $this->renderLayout(); 
	  
    }
}