<?php
/**
 * ListingCategory
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DEV API (beta)
 *
 * Access Forem articles, users and other resources via API.  For a real-world example of Forem in action, check out [DEV](https://www.dev.to).  All endpoints that don't require authentication are CORS enabled.  Dates and date times, unless otherwise specified, must be in the [RFC 3339](https://tools.ietf.org/html/rfc3339) format.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 0.9.5
 * Contact: yo@dev.to
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bitween\DevTo\Model;
use \Bitween\DevTo\ObjectSerializer;

/**
 * ListingCategory Class Doc Comment
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListingCategory
{
    /**
     * Possible values of this enum
     */
    const CFP = 'cfp';
    const FORHIRE = 'forhire';
    const COLLABS = 'collabs';
    const EDUCATION = 'education';
    const JOBS = 'jobs';
    const MENTORS = 'mentors';
    const PRODUCTS = 'products';
    const MENTEES = 'mentees';
    const FORSALE = 'forsale';
    const EVENTS = 'events';
    const MISC = 'misc';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CFP,
            self::FORHIRE,
            self::COLLABS,
            self::EDUCATION,
            self::JOBS,
            self::MENTORS,
            self::PRODUCTS,
            self::MENTEES,
            self::FORSALE,
            self::EVENTS,
            self::MISC,
        ];
    }
}


