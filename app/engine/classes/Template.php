<?php
namespace App\engine\classes;

use App\engine\patterns\Singleton;
use Base;
use Template as FTemplate;

class Template {
    use Singleton;

    private static $data = [];
    private static $renderTemplate = '';

    public function setLayout($name) {
        self::$renderTemplate = $name;
    }

    public function setTitle($name) {
        self::$data['ui']['title'] = $name;
    }

    public function setKeywords($keywords) {
        self::$data['ui']['keywords'] = $keywords;
    }

    public function setDescription($description) {
        self::$data['ui']['description'] = $description;
    }

    public function addTag($name, $data) {
        self::$data[$name] = $data;
    }

    public function render() {
        $configMain = Config::instance()->getConfig('main');

        self::$data['ui']['project'] = $configMain['name'];
        self::$data['ui']['charset'] = $configMain['ui_charset'];
        self::$data['ui']['lang']    = $configMain['ui_lang'];

        if(empty(self::$data['ui']['keywords'])) {
            self::$data['ui']['keywords'] = $configMain['ui_keywords'];
        }

        if(empty(self::$data['ui']['description'])) {
            self::$data['ui']['description'] = $configMain['ui_description'];
        }

        Base::instance()->mset(self::$data);

        if(empty(self::$renderTemplate)) {
            self::$renderTemplate = $configMain['ui_index_file'];
        }

        return FTemplate::instance()->render(self::$renderTemplate);
    }
}