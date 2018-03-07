<?php
class Iuvo_BlockCache_Model_Observer
{
    public function clearBlockCache($observer)
    {
    	if(Mage::getStoreConfig('catalog/blockcache/clear_enabled')) {
        	Mage::app()->getCacheInstance()->cleanType('block_html');
        }
        return $this;
    }
}