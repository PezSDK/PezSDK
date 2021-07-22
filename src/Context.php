<?php
namespace PezSDK;
use \PezSDK\Interfaces\BaseServer;
use \PezSDK\Interfaces\BaseAssmembler;
use \PezSDK\Interfaces\BasePlugin;
use \PezSDK\Interfaces\BaseConfigure;
class Context{
    protected $server=null;
    protected $assmembler=null;
    protected $plugins=[];
    protected $cofigures=[];
    public function setServer(BaseServer $server){
        $this->server=$server;
        return $this;
    }
    public function getServer(){
        return $this->server;
    }
    public function setAssembler(BaseAssembler $assembler){
        $this->assembler=$assembler;
        return $this;
    }
    public function getAssembler(BaseAssembler $assembler){
        return $this->assembler;
    }
    public function addPlugin(BasePlugin $plugin){
        $pluginInfo=$plugin->getPluginInfo();
        $this->plugins[$pluginInfo->id]=$plugin;
        return $this;
    }
    public function removePlugin(BasePlugin $plugin){
        $pluginInfo=$plugin->getPluginInfo();
        unset($this->plugins[$pluginInfo->id]);
    }
    public function getPlugins(){
        return $this->plugins;
    }
    public function setConfigure(BaseConfigure $configrue){
        $this->configures[$configure->id]=$configure;
        return $this;
    }
    public function removeConfigure(BaseConfigure $configure){
        unset($this->plugins[$configure->id]);
    }
    public function getConfigure(){
        return $this->configures;
    }
    public function with($object){
        // @Todo:Auto detect the object type and add them
    }
    public function withOut($object){
        // @Todo:Auto detect the object type and remove them
    }
}