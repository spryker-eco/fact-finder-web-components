<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Shared\FactFinder;

interface FactFinderConstants
{
    /**
     * Specification:
     * - Your FACT-Finder URL
     *
     * @api
     */
    const URL = 'FACT_FINDER_URL';

    /**
     * Specification:
     * - Your FACT-Finder version
     *
     * @api
     */
    const VERSION = 'FACT_FINDER_VERSION';

    /**
     * Specification:
     * - Your channel name. Has to be the same as the channel name configured in the FACT-Finder backend.
     *
     * @api
     */
    const CHANNEL = 'FACT_FINDER_CHANNEL';

    /**
     * Specification:
     * - If this property is present on the html element (regardless of it's value) a search is execute immediately after the page has loaded.
     *
     * @api
     */
    const SEARCH_IMMEDIATE = 'FACT_FINDER_SEARCH_IMMEDIATE';

    /**
     * Specification:
     * - type: String
     * - Options: true,false (default: true)
     * - If set to true, the http parameter of the current serach are pushed to the browser url.
     *
     * @api
     */
    const USE_URL_PARAMETER = 'FACT_FINDER_USE_URL_PARAMETER';

    /**
     * Specification:
     * - type: String
     * - Options: true,false (default: false)
     * - This value determines, if the browser should cache previous search requests or not. Some browsers support this feature and therefore speed up the search for repeated requests.
     *
     * @api
     */
    const USE_CACHE = 'FACT_FINDER_USE_CACHE';

    /**
     * Specification:
     * - type: String (default:'*')
     * - Determines which search term should is used by default.
     *
     * @api
     */
    const DEFAULT_QUERY = 'FACT_FINDER_DEFAULT_QUERY';

    /**
     * Specification:
     * - type: String (default:empty)
     * - With this property you can deliver standard parameters which will then be attached to the search request. Example: add-params="param1=abcd,param2=xyz"
     *
     * @api
     */
    const ADD_PARAMS = 'FACT_FINDER_ADD_PARAMS';

    /**
     * Specification:
     * - type: String (default:empty)
     * - With this property you can deliver standard parameters which are attached to every tracking request. Example: add-tracking-params="param1=abcd,param2=xyz"
     *
     * @api
     */
    const ADD_TRACKING_PARAMS = 'FACT_FINDER_ADD_TRACKING_PARAMS';

    /**
     * Specification:
     * - type: String
     * - Options: true,false (default: false)
     * - With this property you can determine, if filters which where set before the search (e.g. via ASN) should be kept or discarded.
     *
     * @api
     */
    const KEEP_FILTERS = 'FACT_FINDER_KEEP_FILTERS';

    /**
     * Specification:
     * - type: String (default:empty)
     * - Determines if parameters which are written into the URL should be kept.
     *
     * @api
     */
    const KEEP_URL_PARAMS = 'FACT_FINDER_KEEP_URL_PARAMS';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - Determines if the the ASN is returned. Can be set to false to save performance, if the ASN is not required.
     *
     * @api
     */
    const USE_ASN = 'FACT_FINDER_USE_ASN';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: false)
     * - For found records, FACT-Finder is capable of returning the words which lead to the find. The determination of these words costs performance. It is therefore deactivated by default. true = words are created, false = words are not created. Default is false.
     *
     * @api
     */
    const USE_FOUND_WORDS = 'FACT_FINDER_USE_FOUND_WORDS';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - Use this parameter, if you want to prevent the campaign manager from checking if there is a campaign for this search request. true = campaigns are analyzed and returned, , false = campaigns are ignored.
     *
     * @api
     */
    const USE_CAMPAIGNS = 'FACT_FINDER_USE_CAMPAIGNS';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: false)
     * - Is used with advisor campaigns. Please refer the campaign manager documentation. true = the whole question-answer-tree is returned with the advisor campaign, false = only the currently active questions and their answers are returned. Default is false.
     *
     * @api
     */
    const GENERATE_ADVISOR_TREE = 'FACT_FINDER_GENERATE_ADVISOR_TREE';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: false)
     * - Controlls the usage of search result caches. true = cache is ignored, false cache is used. Default is false.
     *
     * @api
     */
    const DISABLE_CACHE = 'FACT_FINDER_DISABLE_CACHE';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - Allows activating/deactivating of request personalization. true = the search result is personalized if the personalization module is active and all other requirements are met; false = the search result is not personalized. Default is true.
     *
     * @api
     */
    const USE_PERSONALIZATION = 'FACT_FINDER_USE_PERSONALIZATION';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - Allows activating/deactivating of the semantic enrichment of requests. true = the search result is semantically enriched if the enhaced module is activated and all other requirements are met, false = the search result is not semantically enriched. Default value is true.
     *
     * @api
     */
    const USE_SEMANTIC_ENHANCER = 'FACT_FINDER_USE_SEMANTIC_ENHANCER';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - Allows activating/deactivating of automated search optimization. true = the search result is automatically optimized. false = the search result is not optimized. Default is true.
     *
     * @api
     */
    const USE_ASO = 'FACT_FINDER_USE_ASO';

    /**
     * Specification:
     * - type: Boolean
     * - Options: true,false (default: true)
     * - If set to true, the search history is pushed to the browser history, even without using url parameter.
     *
     * @api
     */
    const USE_BROWSER_HISTORY = 'FACT_FINDER_USE_BROWSER_HISTORY';

    /**
     * Specification:
     * - type: String (Options: any)
     * - If set, the value provided in this property is used in every request as FACT-Finder session id parameter (sid).
     *
     * @api
     */
    const SID = 'FACT_FINDER_SID';

    /**
     * Specification:
     * - type: String
     * - Options: true,false (default: false)
     * - If set to true, Web Components will use the FACT-Finder SEO API. Set this only to true if the module is active in FACT-Finder.
     *
     * @api
     */
    const USE_SEO = 'FACT_FINDER_USE_SEO';

    /**
     * Specification:
     * - type: String
     * - The seo-prefix is used to show a piece of path between your domain the actual seo-path. E.g. domain.com/prefix/seoPath
     *
     * @api
     */
    const SEO_PREFIX = 'FACT_FINDER_SEO_PREFIX';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the Search Service.
     * - Example: search-url="http://www.myproxy.de/services"
     * - Omit the Search.ff in the url.
     *
     * @api
     */
    const SEARCH_URL = 'FACT_FINDER_SEARCH_URL';

    /**
     * - type: String
     * - Define a custom url for the Suggest Service.
     * - Example: suggest-url="http://www.myproxy.de/services"
     * - Omit the Suggest.ff in the url.
     *
     * @api
     */
    const SUGGEST_URL = 'FACT_FINDER_SUGGEST_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the Recommender Service.
     * - Example: recommendation-url="http://www.myproxy.de/services"
     * - Omit the Recommender.ff in the url.
     *
     * @api
     */
    const RECOMMENDATION_URL = 'FACT_FINDER_RECOMMENDATION_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the TagCloud Service.
     * - Example: tag-cloud-url="http://www.myproxy.de/services"
     * - Omit the TagCloud.ff in the url.
     *
     * @api
     */
    const TAG_CLOUD_URL = 'FACT_FINDER_TAG_CLOUD_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the Tracking Service.
     * - Example: tracking-url="http://www.myproxy.de/services"
     * - Omit the Tracking.ff in the url.
     *
     * @api
     */
    const TRACKING_URL = 'FACT_FINDER_TRACKING_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the ProductCampaign Service.
     * - Example: campaign-url="http://www.myproxy.de/services"
     * - Omit the ProductCampaign.ff in the url.
     *
     * @api
     */
    const CAMPAIGN_URL = 'FACT_FINDER_CAMPAIGN_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the Compare Service.
     * - Example: compare-url="http://www.myproxy.de/services"
     * - Omit the Compare.ff in the url.
     *
     * @api
     */
    const COMPARE_URL = 'FACT_FINDER_COMPARE_URL';

    /**
     * Specification:
     * - type: String
     * - Define a custom url for the SimilarRecords.ff Service.
     * - Example: similar-records-url="http://www.myproxy.de/services"
     * - Omit the SimilarRecords.ff in the url.
     *
     * @api
     */
    const SIMILAR_RECORDS_URL = 'FACT_FINDER_SIMILAR_RECORDS_URL';

    /**
     * Specification:
     * - type: String
     * - Options: true, false (default: false)
     * - If this property is set to true a FACT-Finder Suggest recommendation is displayed as soon as the search box is in focus.
     *
     * @api
     */
    const SUGGEST_ON_FOCUS = 'FACT_FINDER_SUGGEST_ON_FOCUS';

    /**
     * Specification:
     * - type: String
     * - Options: true, false (default: true)
     * - Determines if Suggest recommendations are hidden as soon as the cursor leaves the input field. This property is intended for development and styling purposes.
     *
     * @api
     */
    const HIDE_SUGGEST_ON_BLUR = 'FACT_FINDER_HIDE_SUGGEST_ON_BLUR';

    /**
     * Specification:
     * - type: String
     * - Options: true, false (default: false)
     * - Determines if the contents of the search box should be selected if the inside of the box is clicked.
     *
     * @api
     */
    const SELECT_ON_CLICK = 'FACT_FINDER_SELECT_ON_CLICK';

    /**
     * Specification:
     * - type: String
     * - Options: true, false (default: false)
     * - If this property is set to true a FACT-Finder Suggest recommendation is displayed as soon as the search box is in focus.
     *
     * @api
     */
    const USE_SUGGEST = 'FACT_FINDER_USE_SUGGEST';

    /**
     * Specification:
     * - type: Number (default: 0)
     * - Triggers a suggest request only after the delay expired and no more input is set. When the input field changes in the delay time frame the delay will be reset.
     *
     * @api
     */
    const SUGGEST_DELAY = 'FACT_FINDER_SUGGEST_DELAY';

    /**
     * Specification:
     * - type: Boolean
     * - Options: vertical, horizontal (default: vertical). Die Ausrichtung des Search Buttons.
     *
     * @api
     */
    const SEARCH_BUTTON = 'FACT_FINDER_SEARCH_BUTTON';

    /**
     * Specification:
     * - type: Boolean
     * - Options: vertical, horizontal (default: vertical).
     *
     * @api
     */
    const SEARCH_BUTTON_ALIGN = 'FACT_FINDER_SEARCH_BUTTON_ALIGN';
}
