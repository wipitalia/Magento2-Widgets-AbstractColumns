<?php
namespace Wip\AbstractColumns\Model\Config\Source;

class ContentColorSet implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'bright', 'label' => __('Bright setup')],
            ['value' => 'dark', 'label' => __('Dark setup')]];
    }
}