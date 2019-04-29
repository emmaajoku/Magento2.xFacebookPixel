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

class About extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @var \Custom\Pixel\Helper\Data
     */
    public $helper;
    
    /**
     * Constructor
     *
     * @param \Custom\Pixel\Helper\Data $helper
     */
    public function __construct(\Custom\Pixel\Helper\Data $helper)
    {
        $this->helper = $helper;
    }
    
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $version  = $this->helper->getExtensionVersion();
        $logopath = '';
        $html     = '';
        return $html;
    }
}
