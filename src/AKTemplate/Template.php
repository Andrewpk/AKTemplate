<?php

namespace AKTemplate;

use Exception;

/**
 * A simple template class for PHP. Allows you to create templates in pure PHP.
 * There are many template systems like it, but this one is simple.
 */
class Template
{
    private string $_templateDir = "";
    private ?string $templateName;
    public array $props;



    /**
     * set the path to your view templates
     * @param string $_templateDir
     */
    public function setTemplatePath(string $_templateDir): void
    {
        $this->_templateDir = $_templateDir;
    }

    public function __construct($templateName = '')
    {
        $this->props = array();
        if (!empty($templateName)) {
            $this->templateName = $templateName;
        }
    }

    /**
     * Renders the template $fileName found in the template directory
     * Inside the template, $t is the magic variable that contains the template object
     * Accessing properties of the template object can be done like this: `$t->propName`
     * @param string $fileName
     * @return false|string the output of your processed template
     * @throws Exception
     */
    public function render(string $fileName = ""): false|string
    {
        if (empty($fileName) && !empty($this->templateName)) {
            $fileName = $this->templateName;
        } elseif (empty($fileName) && empty($this->templateName)) {
            return new Exception("No template provided - render cannot continue");
        }
        $t = $this;
        ob_start();
        if (file_exists($this->_templateDir . DIRECTORY_SEPARATOR . $fileName)) {
            include($this->_templateDir . DIRECTORY_SEPARATOR . $fileName);
        } else {
            if (empty($this->_templateDir)) {
                throw new Exception("templateDir not set and template not found");
            } else {
                throw new Exception("Template name provided but not found");
            }
        }
        return ob_get_clean();
    }

    public function __set($k, $v)
    {
        $this->props[$k] = $v;
    }

    public function __get($k)
    {
        return $this->props[$k];
    }

    public function __isset($k)
    {
        return isset($this->props[$k]);
    }

    public function __unset($k)
    {
        unset($this->props[$k]);
    }
}
