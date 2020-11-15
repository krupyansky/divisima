<?php 

namespace app\components;

use yii\base\Widget;
use app\models\Category;

/**
 * Виджет меню
 * 
 */
class MenuWidget extends Widget
{
    /**
     * @var string $template - название шаблона меню.
     * @var array $data - массив категорий из таблицы.
     * @var array $tree - (массив) "дерево" категорий.
     * @var string $menuHtml - (вид) html меню категорий.
     * @var object $model - объект получаемой модели. (см. _form.php в app/modules/admin/views/product/_form.php)
     * @var integer $cache_time - длительность хранения кэша меню.
     */
    public $template;
    public $data;
    public $tree;
    public $menuHtml;
    public $model;
    public $cache_time = 60;

    /**
     * Инициализирует название шаблона виджета.
     * 
     * @return void
     */
    public function init()
    {
        parent::init();
        if ($this->template === null) {
            $this->template = 'menu';
        }
        $this->template .= '.php';
    }

    /**
     * Запускает работу виджета.
     * 
     * @return string $this->menuHtml
     */
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
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);

        // set cache
        if($this->cache_time){
            \Yii::$app->cache->set('category', $this->menuHtml, $this->cache_time);
        }	

        return $this->menuHtml;
    }

    /**
     * Получает "дерево" категорий.
     * 
     * @return array $tree - (массив) "дерево" категорий
     */
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

    /**
     * Получает (вид) html меню категорий.
     * 
     * @param array $tree - "дерево" категорий
     * @param string $tab - разделитель категорий.
     * @return string $html
     */
    protected function getMenuHtml($tree, $tab = '')
    {
        $html = '';
        foreach ($tree as $category) {
            $html .= $this->catToTemplate($category, $tab);
        }
        return $html;
    }

    /**
     * Получает (вид) html категории из "дерева".
     * 
     * @param array $category - категория из "дерева"
     * @param string $tab - разделитель категорий
     * @return string
     */
    protected function catToTemplate($category, $tab)
    {
        ob_start();
        include __DIR__ . '/menu_template/' . $this->template;
        return ob_get_clean();
    }
}
