<?php
namespace Pixelpro\Holamundo\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
	protected $_postFactory;
	public function __construct(\Pixelpro\Holamundo\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'titulo' => "Módulos an Magento",
			'contenido' => "En este post vamos a aprender a crear módulos en Magento.",
			
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}