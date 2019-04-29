<?php
/**
 * @category  Custom
 * @package   Custom_Pixel
 * @author    Custom
 * @copyright Copyright (c) 2017 Custom (http://www.emmanuelajoku.dev)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License
 */
 
namespace Custom\Pixel\Model\Config;

use Magento\Framework\Exception\LocalizedException;

class PixelId extends \Magento\Framework\App\Config\Value
{
    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function beforeSave()
    {
        $value     = $this->getValue();
        $validator = \Zend_Validate::is(
            $value,
            'Regex',
            ['pattern' => '/^[0-9]+$/']
        );
        
        if (!$validator) {
            $message = __('Please correct Facebook Pixel ID: "%1".', $value);
            throw new LocalizedException($message);
        }
        
        return $this;
    }
}
