<?php
namespace bunq\Http;

/**
 */
class BunqResponse
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string[]
     */
    protected $headers;

    /**
     * @var Pagination|null
     */
    protected $pagination;

    /**
     * @param mixed $value
     * @param string[] $headers
     * @param Pagination|null $pagination
     */
    public function __construct($value, array $headers, Pagination $pagination = null)
    {
        $this->value = $value;
        $this->headers = $headers;
        $this->pagination = $pagination;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }
}
