<?php
/**
 * @category  Custom
 * @package   Custom_Pixel
 * @author    Custom
 * @copyright Copyright (c) 2017 Custom (http://www.emmanuelajoku.dev)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License
 */

namespace Custom\Pixel\Block\Adminhtml;

use Magento\Framework\Data\Form\Element\AbstractElement;

class Info extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $logopath = '';
        $html     = '';
        return $html;
    }
}
