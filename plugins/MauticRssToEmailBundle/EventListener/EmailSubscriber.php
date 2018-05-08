<?php

namespace MauticPlugin\MauticRssToEmailBundle\EventListener;

use Mautic\CoreBundle\EventListener\CommonSubscriber;
use Mautic\EmailBundle\EmailEvents;
use Mautic\EmailBundle\Event\EmailSendEvent;
use MauticPlugin\MauticRssToEmailBundle\Parser\Parser;

/**
 * Class EmailSubscriber.
 */
class EmailSubscriber extends CommonSubscriber
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_SEND    => ['onEmailGenerate', 300],
            EmailEvents::EMAIL_ON_DISPLAY => ['onEmailGenerate', 300],
        ];
    }

    /**
     * Search and replace tokens with content.
     *
     * @param EmailSendEvent $event
     */
    public function onEmailGenerate(EmailSendEvent $event)
    {
        // // Get content
        $content = $event->getContent();

        $parser  = new Parser($content);
        $content = $parser->getContent();

        $event->setContent($content);
    }
}
