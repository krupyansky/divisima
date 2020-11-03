<?php 

namespace app\components;

use yii\base\Widget;
use app\models\Category;

class MenuWidget extends Widget
{

	public $template;
	public $ul_class;
	public $data;
	public $tree;
	public $menuHtml;
        public $model;
        public $cache_time = 60;

        public function init()
	{
		parent::init();
		if ($this->ul_class === null) {
			$this->ul_class = false;
		}
		if ($this->template === null) {
			$this->template = 'menu';
		}
		$this->template .= '.php';
	}

	public function run()
	{
		// get cache
                if($this->cache_time){
                    $menu = \Yii::$app->cache->get('category');
                    if ($menu){
                        return $menu;
                    }
                }
		
		$this->data = Category::find()->select('id, parent_id, title, new')->indexBy('id')->asArray()->all();
		$this->tree = $this->getTree($this->data);
		if ($this->ul_class) $this->menuHtml = '<ul class="' . $this->ul_class . '">';
		$this->menuHtml = $this->getMenuHtml($this->tree);
		if ($this->ul_class) $this->menuHtml = '</ul>';

		// set cache
                if($this->cache_time){
                    \Yii::$app->cache->set('category', $this->menuHtml, $this->cache_time);
                }	
		
		return $this->menuHtml;
	}

	protected function getTree()
	{
		$tree = [];
		foreach ($this->data as $id => &$node) {
			if (!$node['parent_id'])
				$tree[$id] = &$node;
			else
				$this->data[$node['parent_id']]['children'][$node['id']] = &$node;
		}
		return $tree;
	}

	protected function getMenuHtml($tree, $tab = '')
	{
		$str = '';
		foreach ($tree as $category) {
			$str .= $this->catToTemplate($category, $tab);
		}
		return $str;
	}

	protected function catToTemplate($category, $tab)
	{
		ob_start();
		include __DIR__ . '/menu_template/' . $this->template;
		return ob_get_clean();
	}

}