<?php
namespace Pixelpro\Holamundo\Setup;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;
	public function __construct(\Pixelpro\Holamundo\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
				'titulo' => "Módulos an Magento",
			'contenido' => "En este post vamos a aprender a crear módulos en Magento.",
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
		
	}
}