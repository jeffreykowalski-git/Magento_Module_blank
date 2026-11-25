<?php

declare(strict_types=1);

namespace VendorName\ModuleName\ViewModel;

use Magento\Framework\Phrase;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Psr\Log\LoggerInterface;

class WelcomeMessage implements ArgumentInterface
{

    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }
    
    public function getWelcomeMessage(): Phrase
    {
        $hour = date('G');
        
        $this->logger->debug('WelcomeMessage: current hour is ' . $hour);

        if($hour<12) {
            return __("Good Morning!");
        } else if ($hour < 17) {
            return __("Good Afternoon!");
        } else {
            return __("Good Evening!");
        }
    }

}
