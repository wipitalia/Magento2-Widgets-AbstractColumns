<?php

namespace Wip\AbstractColumns\Model;

use \Magento\Widget\Model\Widget as BaseWidget;

class Widget
{
    protected $_filter;

    public function __construct(
        \Magento\Cms\Model\Template\Filter $filter
    )
    {
        $this->_filter = $filter;
    }

    public function beforeGetWidgetDeclaration(BaseWidget $subject, $type, $params = [], $asIs = true)
    {

        if ($type == "Wip\AbstractColumns\Block\Widget\AbstractColumnsWidget") {
// I rather do a check for a specific parameters
            foreach ($params as $paramKey => $value) {

                $url = $params[$paramKey];
                if (strpos($url, '/directive/___directive/') !== false) {

                    $parts = explode('/', $url);
                    $key = array_search("___directive", $parts);
                    if ($key !== false) {

                        $url = $parts[$key + 1];
                        $url = base64_decode(strtr($url, '-_,', '+/='));

                        $parts = explode('"', $url);
                        $key = array_search("{{media url=", $parts);
                        $url = "/media/".$parts[$key + 1];

                        $imagePath = $this->_filter->filter($url);
                        $params[$paramKey] = $imagePath;
                    }
                }
            }
        }

        return array($type, $params, $asIs);
    }
}