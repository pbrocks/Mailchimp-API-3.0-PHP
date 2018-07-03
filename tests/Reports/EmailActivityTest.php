<?php
/**
 * Created by IntelliJ IDEA.
 * User: hutch
 * Date: 7/3/18
 * Time: 3:22 PM
 */

namespace MailchimpTests\Reports;

use MailchimpAPI\Reports;
use MailchimpAPI\Reports\EmailActivity;
use MailchimpTests\MailChimpTestCase;

class EmailActivityTest extends MailChimpTestCase
{
    public function testCollectionUrl()
    {
        $this->endpointUrlBuildTest(
            Reports::URL_COMPONENT . 1 . EmailActivity::URL_COMPONENT,
            $this->mailchimp->reports(1)->emailActivity(),
            "The Email Activity collection endpoint should be constructed correctly"
        );
    }

    public function testInstanceUrl()
    {
        $this->endpointUrlBuildTest(
            Reports::URL_COMPONENT . 1 . EmailActivity::URL_COMPONENT . 1,
            $this->mailchimp->reports(1)->emailActivity(1),
            "The Email Activity instance endpoint should be constructed correctly"
        );
    }
}
