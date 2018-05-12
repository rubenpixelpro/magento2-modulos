<?php
namespace Pixelpro\Holamundo\Observer;
class CambiarTexto implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$texto = $observer->getData('texto_evento');
		echo $texto->getTexto() . " - Evento </br>";
		$texto->setTexto('Evento ejecutado con exito');
		return $this;
	}
}