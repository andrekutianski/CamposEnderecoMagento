<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("quote_address", "end_numero", array("type"=>"varchar"));
$installer->addAttribute("quote_address", "bairro", array("type"=>"varchar"));
$installer->addAttribute("quote_address", "complemento", array("type"=>"varchar"));
$installer->addAttribute("order_address", "end_numero", array("type"=>"varchar"));
$installer->addAttribute("order_address", "bairro", array("type"=>"varchar"));
$installer->addAttribute("order_address", "complemento", array("type"=>"varchar"));
$installer->endSetup();
	 