<?php
namespace Wip\AbstractColumns\Model\Config\Source;

class Alignments implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'left', 'label' => __('Text on Left')],
            ['value' => 'right', 'label' => __('Text on Right')]];
    }
}