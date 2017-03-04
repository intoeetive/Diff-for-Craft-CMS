<?php

namespace Craft;

require_once CRAFT_PLUGINS_PATH . "/diff/lib/finediff.php";

class DiffVariable
{
    
    public function getName()
    {
        $plugin = craft()->plugins->getPlugin('diff');
        return $plugin->getName();
    }
    
    
    public function html($from, $to, $granularity='word')
    {
        switch ($granularity) {
            case 'paragraph':
                $granularity = \FineDiff::$paragraphGranularity;
                break;
            case 'character':
                $granularity = \FineDiff::$characterGranularity;
                break;
            case 'sentence':
                $granularity = \FineDiff::$sentenceGranularity;
                break;
            case 'word':
            default:
                $granularity = \FineDiff::$wordGranularity;
                break;
        }
        $opcodes = \FineDiff::getDiffOpcodes($from, $to, $granularity);
        
        $diff = \FineDiff::renderDiffToHTMLFromOpcodes($from, $opcodes);
        
        return TemplateHelper::getRaw($diff);
    }
    
    
    
}
