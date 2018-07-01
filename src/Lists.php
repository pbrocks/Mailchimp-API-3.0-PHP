<?php

namespace MailchimpAPI;

use MailchimpAPI\Lists\AbuseReports;
use MailchimpAPI\Lists\Activity;
use MailchimpAPI\Lists\Clients;
use MailchimpAPI\Lists\GrowthHistory;
use MailchimpAPI\Lists\InterestCategories;
use MailchimpAPI\Lists\Members;
use MailchimpAPI\Lists\MergeFields;
use MailchimpAPI\Lists\Segments;
use MailchimpAPI\Lists\SignupForms;
use MailchimpAPI\Lists\Webhooks;

/**
 * Class Lists
 * @package MailchimpAPI
 */
class Lists extends Mailchimp
{

    /**
     * @var string
     */
    public $subclass_resource;


    /**
     * @var array
     */
    public $req_post_params = [
        'name',
        'contact',
        'permission_reminder',
        'campaign_defaults',
        'email_type_option'
    ];
    /**
     * @var array
     */
    public $req_patch_params = [
        'name',
        'contact',
        'permission_reminder',
        'campaign_defaults',
        'email_type_option'
    ];

    //SUBCLASS INSTANTIATIONS
    /**
     * @var Webhooks
     */
    public $webhooks;
    /**
     * @var SignupForms
     */
    public $signup_forms;
    /**
     * @var MergeFields
     */
    public $merge_fields;
    /**
     * @var GrowthHistory
     */
    public $growth_history;
    /**
     * @var Clients
     */
    public $clients;
    /**
     * @var Activity
     */
    public $activity;
    /**
     * @var AbuseReports
     */
    public $abuse;
    /**
     * @var Segments
     */
    public $segments;
    /**
     * @var Members
     */
    public $members;
    /**
     * @var InterestCategories
     */
    public $interest_categories;


    /**
     * Lists constructor.
     * @param $apikey
     * @param $class_input
     * @throws MailchimpException
     */
    public function __construct($apikey, $class_input)
    {
        parent::__construct($apikey);

        if ($class_input) {
            $this->request->appendToEndpoint('/lists/' . $class_input);
        } else {
            $this->request->appendToEndpoint('/lists/');
        }
        $this->subclass_resource = $class_input;
    }

    /**
     * @param $members
     * @param $update_existing
     * @return Utilities\MailchimpResponse
     * @throws MailchimpException
     */
    public function batchSubscribe($members, $update_existing)
    {

        $this->throwIfNot($this->subclass_resource);
        $params = [
            'members' => $members,
            'update_existing' => $update_existing
        ];

        return $this->postToActionEndpoint('', $params);
    }

    //SUBCLASS FUNCTIONS ------------------------------------------------------------

    /**
     * @param null $class_input
     * @return Webhooks
     * @throws MailchimpException
     */
    public function webhooks($class_input = null)
    {
        $this->webhooks = new Webhooks(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->webhooks;
    }

    /**
     * @param null $class_input
     * @return SignupForms
     * @throws MailchimpException
     */
    public function signupForms($class_input = null)
    {
        $this->signup_forms = new SignupForms(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->signup_forms;
    }

    /**
     * @param null $class_input
     * @return MergeFields
     * @throws MailchimpException
     */
    public function mergeFields($class_input = null)
    {
        $this->merge_fields = new MergeFields(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->merge_fields;
    }

    /**
     * @param null $class_input
     * @return GrowthHistory
     * @throws MailchimpException
     */
    public function growthHistory($class_input = null)
    {
        $this->growth_history = new GrowthHistory(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->growth_history;
    }

    /**
     * @param null $class_input
     * @return Clients
     * @throws MailchimpException
     */
    public function clients($class_input = null)
    {
        $this->clients = new Clients(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->clients;
    }

    /**
     * @param null $class_input
     * @return Activity
     * @throws MailchimpException
     */
    public function activity($class_input = null)
    {
        $this->activity = new Activity(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->activity;
    }

    /**
     * @param null $class_input
     * @return AbuseReports
     * @throws MailchimpException
     */
    public function abuseReports($class_input = null)
    {
        $this->abuse = new AbuseReports(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->abuse;
    }

    /**
     * @param null $class_input
     * @return Segments
     * @throws MailchimpException
     */
    public function segments($class_input = null)
    {
        $this->segments =  new Segments(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->segments;
    }

    /**
     * @param null $class_input
     * @return Members
     * @throws MailchimpException
     */
    public function members($class_input = null)
    {
        $this->members = new Members(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->members;
    }

    /**
     * @param null $class_input
     * @return InterestCategories
     * @throws MailchimpException
     */
    public function interestCategories($class_input = null)
    {
        $this->interest_categories = new InterestCategories(
            $this->apikey,
            $this->subclass_resource,
            $class_input
        );
        return $this->interest_categories;
    }
}