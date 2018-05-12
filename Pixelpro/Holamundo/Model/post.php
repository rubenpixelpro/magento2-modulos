<?php
namespace Pixelpro\Holamundo\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'pixelpro_holamundo_post';
	protected $_cacheTag = 'pixelpro_holamundo_post';
	protected $_eventPrefix = 'pixelpro_holamundo_post';
	protected function _construct()
	{
		$this->_init('Pixelpro\Holamundo\Model\ResourceModel\Post');
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}