<?php

namespace Epicom\AdminColors\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Epicom\AdminColors\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		// echo $this->helperData->getGeneralConfig('enable');
		// echo $this->helperData->getGeneralConfig('display_text');

		//echo "oiwjdiowdjoeipwjfioew";

		header('Content-Type: text/css');

		$primaryColor = $this->helperData->getGeneralConfig('general/primaryColor');
		$secondaryColor = $this->helperData->getGeneralConfig('general/secondaryColor');
		
		$headerBackground = $this->helperData->getGeneralConfig('header/headerBackground');
		$headerColor = $this->helperData->getGeneralConfig('header/headerColor');

		$navBackground = $this->helperData->getGeneralConfig('nav/navBackground');
		$navColor = $this->helperData->getGeneralConfig('nav/navColor');

		$footerBackground = $this->helperData->getGeneralConfig('footer/footerBackground');
		$footerColor = $this->helperData->getGeneralConfig('footer/footerColor');


		$style = "";


		// Header
		$style .= ".page-header{ background:".$headerBackground."; }" ;
		$style .= ".header.panel>.header.links, .header.panel>.header.links>li.welcome, .header.panel>.header.links>li>a, .header.panel>.header.links>li>a:visited,.header.panel>.header.links>li>a:hover{ color: ".$headerColor." !important; }";
		//$style .= ".page-header{ background:".$headerColor."; }" ;
		$style .= " .minicart-wrapper .action.showcart .counter.qty{ background:".$secondaryColor."; } ";


		// Menu
		$style .= ".nav-sections, .navigation{ background:".$navBackground."; }";
		$style .= ".navigation .level0>.level-top, .navigation .level0.active>.level-top, .navigation .level0.has-active>.level-top, .navigation .level0 > .level-top:hover, .navigation .level0 > .level-top.ui-state-focus{ color:".$navColor." }";

		// Buttons
		$style .= ".action.primary{ background:".$primaryColor."; border-color:".$primaryColor."; }";
		$style .= ".action.primary:hover, .action.primary:active, .action.primary:focus{ background:".$primaryColor."; border:1px solid ".$primaryColor."; }";

		// Product View
		$style .= ".fotorama__thumb-border{ border: 1px solid ".$primaryColor."; }";

		// Checkout
		$style .= ".opc-progress-bar-item._active:before,.opc-progress-bar-item._active>span:before{ background:".$primaryColor.";  border-color:".$primaryColor."; }";
		$style .= ".opc-progress-bar-item._active>span:after{ border-color: ".$primaryColor.";}";
		$style .= ".opc-wrapper .shipping-address-item.selected-item { border-color:".$primaryColor.";}";
		$style .= ".opc-wrapper .shipping-address-item.selected-item:after {  background:".$primaryColor."; }";

		// Footer
		$style .= ".page-footer{ background:".$footerBackground." }";
		$style .= ".copyright{ background:".$footerBackground."; color: ".$footerColor.";  border-top: 1px solid rgba(255,255,255,0.1); }";
		$style .= ".footer.content .links a, .footer.content .links a:hover, .footer.content .links a:visited{ color:".$footerColor."; }";
		$style .= ".block.newsletter input { margin-right: 35px;  padding: 0 0 0 35px;  border-radius: 0px !important;  border: none;  height: 32px !important;}";

		echo $style;

		exit();

	}
}