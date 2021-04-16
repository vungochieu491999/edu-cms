<?php

namespace Edumad\Base\Supports;

class PageBody
{
    /**
     * @var string
     */
    protected $class_name;

    /**
     * @param $title
     */
    public function setBodyClass($className = '')
    {
        $this->class_name = $className;
    }

    /**
     * @param bool $full
     * @return string
     */
    public function getBodyClass($default = false)
    {
        if (empty($this->class_name)) {
            return config('core.base.auth.body_default_class');
        }

        if (!$default) {
            return $this->class_name;
        }

        return config('core.base.auth.body_default_class');
    }
}
