<?php

namespace xsteach\applet\Model;

class PhoneNumber
{
    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function get($key, $default=null)
    {
        return $this->has($key) ? $this->data[$key] : $default;
    }

    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

    public function getPhoneNumber()
    {
        return $this->get('phoneNumber');
    }

    public function getPurePhoneNumber()
    {
        return $this->get('purePhoneNumber');
    }

    public function getCountryCode()
    {
        return $this->get('countryCode');
    }

}