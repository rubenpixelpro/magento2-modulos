<?php
namespace Pixelpro\Holamundo\Controller\Evento;
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}
	public function execute()
	{
		$texto = new \Magento\Framework\DataObject(array('texto' => 'Pixelpro'));
		$this->_eventManager->dispatch('pixelpro_holamundo_mostrar_texto',['texto_evento' => $texto]);
		echo $texto->getTexto();
		exit;
	}
}