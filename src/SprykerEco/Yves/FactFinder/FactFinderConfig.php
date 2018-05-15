<?php
namespace SprykerEco\Yves\FactFinder;

use SprykerEco\Shared\FactFinder\FactFinderConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class FactFinderConfig extends AbstractBundleConfig
{
    /**
     * Return URL
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->get(FactFinderConstants::URL);
    }

    /**
     * Return version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get(FactFinderConstants::VERSION);
    }

    /**
     * Return channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->get(FactFinderConstants::CHANNEL);
    }

    /**
     * Return search immediate value
     *
     * @return bool
     */
    public function getSearchImmediate()
    {
        return $this->get(FactFinderConstants::SEARCH_IMMEDIATE);
    }

    /**
     * Return use URL parameter
     *
     * @return string
     */
    public function getUseUrlParameter()
    {
        return $this->get(FactFinderConstants::USE_URL_PARAMETER);
    }

    /**
     * Return use cache
     *
     * @return string
     */
    public function getUseCache()
    {
        return $this->get(FactFinderConstants::USE_CACHE);
    }

    /**
     * Return default query
     *
     * @return string
     */
    public function getDefaultQuery()
    {
        return $this->get(FactFinderConstants::DEFAULT_QUERY);
    }

    /**
     * Return add params
     *
     * @return string
     */
    public function getAddParams()
    {
        return $this->get(FactFinderConstants::ADD_PARAMS);
    }

    /**
     * Return add tracking params
     *
     * @return string
     */
    public function getAddTrackingParams()
    {
        return $this->get(FactFinderConstants::ADD_TRACKING_PARAMS);
    }

    /**
     * Return keep filters
     *
     * @return string
     */
    public function getKeepFilters()
    {
        return $this->get(FactFinderConstants::KEEP_FILTERS);
    }

    /**
     * Return keep url params
     *
     * @return string
     */
    public function getKeepUrlParams()
    {
        return $this->get(FactFinderConstants::KEEP_URL_PARAMS);
    }

    /**
     * Return use ASN
     *
     * @return string
     */
    public function getUseAsn()
    {
        return $this->get(FactFinderConstants::USE_ASN);
    }

    /**
     * Return use found words
     *
     * @return string
     */
    public function getUseFoundWords()
    {
        return $this->get(FactFinderConstants::USE_FOUND_WORDS);
    }

    /**
     * Return use campaigns
     *
     * @return string
     */
    public function getUseCampaigns()
    {
        return $this->get(FactFinderConstants::USE_CAMPAIGNS);
    }

    /**
     * Return generate advisor tree
     *
     * @return string
     */
    public function getGenerateAdvisorTree()
    {
        return $this->get(FactFinderConstants::GENERATE_ADVISOR_TREE);
    }

    /**
     * Return disable cache
     *
     * @return bool
     */
    public function getDisableCache()
    {
        return $this->get(FactFinderConstants::DISABLE_CACHE);
    }

    /**
     * Return use personalization
     *
     * @return bool
     */
    public function getUsePersonalization()
    {
        return $this->get(FactFinderConstants::USE_PERSONALIZATION);
    }

    /**
     * Return use semantic enhancer
     *
     * @return string
     */
    public function getUseSemanticEnhancer()
    {
        return $this->get(FactFinderConstants::USE_SEMANTIC_ENHANCER);
    }

    /**
     * Return use ASO
     *
     * @return bool
     */
    public function getUseAso()
    {
        return $this->get(FactFinderConstants::USE_ASO);
    }

    /**
     * Return use browser history
     *
     * @return bool
     */
    public function getUseBrowserHistory()
    {
        return $this->get(FactFinderConstants::USE_BROWSER_HISTORY);
    }

    /**
     * Return SID
     *
     * @return string
     */
    public function getSid()
    {
        return $this->get(FactFinderConstants::SID);
    }

    /**
     * Return seo
     *
     * @return string
     */
    public function getSeo()
    {
        return $this->get(FactFinderConstants::USE_SEO);
    }

    /**
     * Return seo prefix
     *
     * @return string
     */
    public function getSeoPrefix()
    {
        return $this->get(FactFinderConstants::SEO_PREFIX);
    }

    /**
     * Return search url
     *
     * @return string
     */
    public function getSearchUrl()
    {
        return $this->get(FactFinderConstants::SEARCH_URL);
    }

    /**
     * Return suggest url
     *
     * @return string
     */
    public function getSuggestUrl()
    {
        return $this->get(FactFinderConstants::SUGGEST_URL);
    }

    /**
     * Return reccomendation url
     *
     * @return string
     */
    public function getReccomendationUrl()
    {
        return $this->get(FactFinderConstants::RECOMMENDATION_URL);
    }

    /**
     * Return tag cloud url
     *
     * @return string
     */
    public function getTagCloudUrl()
    {
        return $this->get(FactFinderConstants::TAG_CLOUD_URL);
    }

    /**
     * Return tracking url
     *
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->get(FactFinderConstants::TRACKING_URL);
    }

    /**
     * Return campaign url
     *
     * @return string
     */
    public function getCampaignUrl()
    {
        return $this->get(FactFinderConstants::CAMPAIGN_URL);
    }

    /**
     * Return compare url
     *
     * @return string
     */
    public function getCompareUrl()
    {
        return $this->get(FactFinderConstants::COMPARE_URL);
    }

    /**
     * Return similar records url
     *
     * @return string
     */
    public function getSimilarRecordsUrl()
    {
        return $this->get(FactFinderConstants::SIMILAR_RECORDS_URL);
    }

    /**
     * Return suggest on focus
     *
     * @return string
     */
    public function getSuggestOnfocus()
    {
        return $this->get(FactFinderConstants::SUGGEST_ON_FOCUS);
    }

    /**
     * Return suggest on blur
     *
     * @return string
     */
    public function getHideSuggestOnblur()
    {
        return $this->get(FactFinderConstants::HIDE_SUGGEST_ON_BLUR);
    }

    /**
     * Return select on click
     *
     * @return string
     */
    public function getSelectOnclick()
    {
        return $this->get(FactFinderConstants::SELECT_ON_CLICK);
    }

    /**
     * Return use suggest
     *
     * @return string
     */
    public function getUseSuggest()
    {
        return $this->get(FactFinderConstants::USE_SUGGEST);
    }

    /**
     * Return suggest delay
     *
     * @return int
     */
    public function getSuggestDelay()
    {
        return $this->get(FactFinderConstants::SUGGEST_DELAY);
    }

    /**
     * Return search button
     *
     * @return string
     */
    public function getSearchbutton()
    {
        return $this->get(FactFinderConstants::SEARCH_BUTTON);
    }

    /**
     * Return search button align
     *
     * @return bool
     */
    public function getSearchbuttonAlign()
    {
        return $this->get(FactFinderConstants::SEARCH_BUTTON_ALIGN);
    }
}