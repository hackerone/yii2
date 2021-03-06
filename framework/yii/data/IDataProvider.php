<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\data;

/**
 * IDataProvider is the interface that must be implemented by data provider classes.
 *
 * Data providers are components that sort and paginate data, and provide them to widgets
 * such as [[GridView]], [[ListView]].
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
interface IDataProvider
{
	/**
	 * Returns the number of data items in the current page.
	 * This is equivalent to `count($provider->getItems())`.
	 * When [[pagination]] is false, this is the same as [[totalCount]].
	 * @return integer the number of data items in the current page.
	 */
	public function getCount();

	/**
	 * Returns the total number of data items.
	 * When [[pagination]] is false, this is the same as [[count]].
	 * @return integer total number of possible data items.
	 */
	public function getTotalCount();

	/**
	 * Returns the data items in the current page.
	 * @return array the list of data items in the current page.
	 */
	public function getItems();

	/**
	 * Returns the key values associated with the data items.
	 * @return array the list of key values corresponding to [[items]]. Each data item in [[items]]
	 * is uniquely identified by the corresponding key value in this array.
	 */
	public function getKeys();

	/**
	 * @return Sort the sorting object. If this is false, it means the sorting is disabled.
	 */
	public function getSort();

	/**
	 * @return Pagination the pagination object. If this is false, it means the pagination is disabled.
	 */
	public function getPagination();
}
