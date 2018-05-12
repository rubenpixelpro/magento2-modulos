<?php
namespace Pixelpro\Holamundo\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'pixelpro_holamundo_post_collection';
	protected $_eventObject = 'post_collection';
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Pixelpro\Holamundo\Model\Post', 'Pixelpro\Holamundo\Model\ResourceModel\Post');
	}
}