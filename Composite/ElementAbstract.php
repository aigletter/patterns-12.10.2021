<?php


namespace Patterns\Composite;


abstract class ElementAbstract implements ElementInterface
{
    public const TAG = '';

    /** @var ElementInterface[] */
    protected $children = [];

    protected $text;

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    public function add(ElementInterface $element)
    {
        $this->children[] = $element;
    }

    public function remove(ElementInterface $element)
    {
        // TODO: Implement remove() method.
    }

    public function render(): string
    {
        $output = '<' . static::TAG . '>' . PHP_EOL;
        $output .= $this->text . PHP_EOL;
        if (!empty($this->children)) {
            foreach ($this->children as $child) {
                $output .= $child->render();
            }
        }
        $output .= '</' . static::TAG . '>' . PHP_EOL;
        return $output;
    }
}