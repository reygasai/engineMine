<?php
namespace App\engine\classes;
use App\engine\patterns\Singleton;

class Config {
    use Singleton;
    const CONFIG_EXTENSION = '.cfg.php'; 
    private static $cfg = [];

    public function createConfig($name, $data) {
        if(!$this->checkIssetConfig($name)) {
            $fileDescriptor = fopen(APP_CONFIGS_DIR . $name . self::CONFIG_EXTENSION, "w");
            $writebleStrings = fwrite($fileDescriptor, $this->createContentConfig($data));
            fclose($fileDescriptor);

            if($writebleStrings !== false) {
                return true;
            }
        }

        return false;
    }

    public function editConfig($name, $data) {
        if(!$this->checkIssetConfig($name)) {
            return false;
        }
        
        $getConfigData = $this->getConfig($name);
        foreach($getConfigData as $key => $value) {
            if(isset($data[$key])) {
                $getConfigData[$key] = $data[$key];
            }
        }
        
        $writebleStrings = file_put_contents(APP_CONFIGS_DIR . $name . self::CONFIG_EXTENSION, $this->createContentConfig($getConfigData));
        if($writebleStrings !== false) {
            return true;
        }

        return false;
    }

    public function getConfig($name) {
        if(empty(self::$cfg)) {
            $this->loadConfigs();
        }

        return (empty(self::$cfg[$name])) ? [] : self::$cfg[$name];
    }

    public function dropConfig($name) {
        if($this->checkIssetConfig($name)) {
            return unlink(APP_CONFIGS_DIR . $name . self::CONFIG_EXTENSION);
        }

        return false;
    }

    private function createContentConfig($data) {
        $content = '<?php return ';

        if(empty($data) || !is_array($data)) {
            $content .= var_export([], true); 
        } else {
            $content .= var_export($data, true); 
        }

        return $content .= ";" .PHP_EOL;
    }

    private function checkIssetConfig($name) {
        if($this->checkExstensionConfig($name)) {
            return false;
        }

        return file_exists(APP_CONFIGS_DIR . $name . self::CONFIG_EXTENSION);
    }

    private function checkExstensionConfig($name) { // true если есть CONFIG_EXTENSION и false если нету CONFIG_EXTENSION
        return (strcmp(mb_substr($name, mb_strlen($name) - strlen(self::CONFIG_EXTENSION)), self::CONFIG_EXTENSION) === 0);
    }

    private function loadDataConfig($name) {
        $configReturnedArray = require_once APP_CONFIGS_DIR . $name;
        return (empty($configReturnedArray) || !is_array($configReturnedArray)) ? [] : $configReturnedArray;
    }

    private function loadConfigs() {
        $dirData = array_diff(scandir(APP_CONFIGS_DIR), ['.', '..']);
        
        foreach($dirData as $config) {
            if(!$this->checkExstensionConfig($config)) {
                continue;
            }

            $configData = explode('.', $config);
            self::$cfg[$configData[0]] = $this->loadDataConfig($config);
        }
    }
}