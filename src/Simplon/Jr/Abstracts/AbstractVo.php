<?php

  namespace Simplon\Jr\Abstracts;

  abstract class AbstractVo
  {
    /**
     * @var array
     */
    protected $_data = array();

    // ##########################################

    /**
     * @return AbstractVo
     */
    public static function init()
    {
      return new static;
    }

    // ##########################################

    /**
     * @param string $key
     * @param $val
     * @return AbstractVo
     */
    public function setByKey($key, $val)
    {
      $this->_data[$key] = $val;

      return $this;
    }

    // ##########################################

    /**
     * @param $key
     * @return bool|mixed
     */
    public function getByKey($key)
    {
      if(! isset($this->_data[$key]))
      {
        return NULL;
      }

      $value = $this->_data[$key];

      // cast to string
      if(! is_array($value))
      {
        $value = (string)$value;
      }

      return $value;
    }

    // ##########################################

    /**
     * @return bool
     */
    public function hasData()
    {
      $data = $this->getData();

      return ! empty($data) ? TRUE : FALSE;
    }

    // ##########################################

    /**
     * @param array $data
     * @return AbstractVo
     */
    public function setData($data)
    {
      if(is_array($data))
      {
        $this->_data = $data;
      }

      return $this;
    }

    // ##########################################

    /**
     * @return array
     */
    public function getData()
    {
      return $this->_data;
    }
  }
