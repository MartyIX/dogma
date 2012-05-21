<?php

namespace Dogma\Http;


class StatusCode extends \Dogma\Enum {

    /** HTTP 1.1 response status code */
    const
        S100_CONTINUE = 100,
        S101_SWITCHING_PROTOCOLS = 101,
        S102_PROCESSING = 102, // (WebDAV) (RFC 2518)
        S103_CHECKPOINT = 103,
        
        S200_OK = 200,
        S201_CREATED = 201,
        S202_ACCEPTED = 202,
        S203_NON_AUTHORITATIVE_INFORMATION = 203,
        S204_NO_CONTENT = 204,
        S205_RESET_CONTENT = 205,
        S206_PARTIAL_CONTENT = 206,
        S207_MULTI_STATUS = 207, // (WebDAV) (RFC 4918)
        S208_ALREADY_REPORTED = 208, // (WebDAV) (RFC 5842)
        S226_IM_USER = 226, // (RFC 3229)
        
        S300_MULTIPLE_CHOICES = 300,
        S301_MOVED_PERMANENTLY = 301,
        S302_FOUND = 302,
        S303_SEE_OTHER = 303,
        S304_NOT_MODIFIED = 304,
        S305_USE_PROXY = 305,
        S306_SWITCH_PROXY = 306,
        S307_TEMPORARY_REDIRECT= 307,
        S308_RESUME_INCOMPLETE = 308,
        
        S400_BAD_REQUEST = 400,
        S401_UNAUTHORIZED = 401,
        S402_PAYMENT_REQUIRED = 402,
        S403_FORBIDDEN = 403,
        S404_NOT_FOUND = 404,
        S405_METHOD_NOT_ALLOWED = 405,
        S406_NOT_ACCEPTABLE = 406,
        S407_PROXY_AUTHENTICATION_REQUIRED = 407,
        S408_REQUEST_TIMEOUT = 408,
        S409_CONFLICT = 409,
        S410_GONE = 410,
        S411_LENGTH_REQUIRED = 411,
        S412_PRECONDITION_FAILED = 412,
        S413_REQUESTED_ENTITY_TOO_LARGE = 413,
        S414_REQUEST_URI_TOO_LONG = 414,
        S415_UNSUPPORTED_MEDIA_TYPE = 415,
        S416_REQUESTED_RANGE_NOT_SATISFIABLE = 416,
        S417_EXPECTATION_FAILED = 417,
        S418_IM_A_TEAPOT = 418, // joke
        S420_ENHANCE_YOUR_CALM = 420, // (Twitter) should be handled as 429
        S422_UNPROCESSABLE_ENTITY = 422, // (WEBDAV) (RFC 4918)
        S423_LOCKED = 423, // (WEBDAV) (RFC 4918)
        S424_FAILED_DEPENDENCY = 424, // (WEBDAV) (RFC 4918)
        S425_UNORDERED_COLLECTION = 425, // (RFC 3648)
        S426_UPGRADE_REQUIRED = 426, // (RFC 2817)
        S428_PRECONDITION_REQUIRED = 428,
        S429_TOO_MANY_REQUESTS = 429,
        S431_REQUEST_HEADER_FIELDS_TOO_LARGE = 431,
        S449_RETRY_WITH = 449,
        S450_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450,

        S500_INTERNAL_SERVER_ERROR = 500,
        S501_NOT_IMPLEMENTED = 501,
        S502_BAD_GATEWAY = 502,
        S503_SERVICE_UNAVAILABLE = 503,
        S504_GATEWAY_TIMEOUT = 504,
        S505_HTTP_VERSION_NOT_SUPPORTED = 505,
        S506_VARIANT_ALSO_NEGOTIATES = 506, // (RFC 2295)
        S507_INSUFFICIENT_STORAGE = 507, // (WEBDAV) (RFC 4918)[4]
        S508_LOOP_DETECTED = 508, // (WebDAV) (RFC 5842)
        S509_BANDWIDTH_LIMIT_EXCEEDED = 509, // (APACHE BW/LIMITED EXTENSION)
        S510_NOT_EXTENDED = 510, // (RFC 2774)
        S511_NETWORK_AUTHENTICATION_REQUIRED = 511;



    public static function isInfo($code) {
        return substr($code, 0, 1) === '1';
    }
    
    
    public static function isOk($code) {
        return substr($code, 0, 1) === '2';
    }


    public static function isRedirect($code) {
        return substr($code, 0, 1) === '3';
    }
    
    
    public static function isError($code) {
        return substr($code, 0, 1) === '4' || substr($code, 0, 1) === '5';
    }
    
}
