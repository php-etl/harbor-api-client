<?php

namespace Harbor\Api\Model;

class SearchResult
{
    /**
     * The matched level
     *
     * @var int
     */
    protected $score;
    /**
     * The chart name with repo name
     *
     * @var string
     */
    protected $name;
    /**
     * A specified chart entry
     *
     * @var ChartVersion
     */
    protected $chart;
    /**
     * The matched level
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * The matched level
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * The chart name with repo name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The chart name with repo name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * A specified chart entry
     *
     * @return ChartVersion
     */
    public function getChart() : ChartVersion
    {
        return $this->chart;
    }
    /**
     * A specified chart entry
     *
     * @param ChartVersion $chart
     *
     * @return self
     */
    public function setChart(ChartVersion $chart) : self
    {
        $this->chart = $chart;
        return $this;
    }
}