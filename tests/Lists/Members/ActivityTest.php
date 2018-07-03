<?php
/**
 * Created by IntelliJ IDEA.
 * User: hutch
 * Date: 7/2/18
 * Time: 5:39 PM
 */

namespace MailchimpTests\Lists\Members;

use MailchimpAPI\Lists\Members\Activity;
use MailchimpAPI\Lists;
use MailchimpAPI\Lists\Members;
use MailchimpTests\MailChimpTestCase;

/**
 * Class ActivityTest
 * @package MailchimpTests\Lists\Members
 */
class ActivityTest extends MailChimpTestCase
{
    /**
     * @throws \MailchimpAPI\MailchimpException
     */
    public function testCollectionUrl()
    {
        $this->endpointUrlBuildTest(
            Lists::URL_COMPONENT . 1 . Members::URL_COMPONENT . 1 . Activity::URL_COMPONENT,
            $this->mailchimp->lists(1)->members(1)->activity(),
            "The Activity collection endpoint should be constructed correctly"
        );
    }

    /**
     * @throws \MailchimpAPI\MailchimpException
     */
    public function testInstanceUrl()
    {
        $this->endpointUrlBuildTest(
            Lists::URL_COMPONENT . 1 . Members::URL_COMPONENT . 1 . Activity::URL_COMPONENT . 1,
            $this->mailchimp->lists(1)->members(1)->activity(1),
            "The Activity instance endpoint should be constructed correctly"
        );
    }
}