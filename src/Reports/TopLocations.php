<?php

namespace MailchimpAPI\Reports;

use MailchimpAPI\Reports;

/**
 * Class TopLocations
 * @package MailchimpAPI\Reports
 */
class TopLocations extends Reports
{
    const URL_COMPONENT = '/locations/';

    /**
     * TopLocations constructor.
     * @param $apikey
     * @param $parent_resource
     * @param $class_input
     * @throws \MailchimpAPI\MailchimpException
     */
    public function __construct($apikey, $parent_resource, $class_input)
    {
        parent::__construct($apikey, $parent_resource);
        if ($class_input) {
            $this->request->appendToEndpoint(self::URL_COMPONENT . $class_input);
        } else {
            $this->request->appendToEndpoint(self::URL_COMPONENT);
        }
    }
}
