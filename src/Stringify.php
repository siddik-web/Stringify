<?php

namespace SiddikWeb\Stringify;

/**
 * Stringify main class
 *  
 * @since 1.0.0
 */
class Stringify
{
    /**
     * Text variable
     *
     * @var string
     * 
     * @since 1.0.0
     */
    private $text;

    /**
     * Of function
     *
     * @param string $text Any String
     * 
     * @return Stringify
     * 
     * @since 1.0.3
     */
    public static function of($text) : Stringify
    {
        $obj = new self;

        $obj->text = $text;

        return $obj;
    }

    /**
     * Get the Text function
     *
     * @return string
     * 
     * @since 1.0.0
     */
    public function getText() : String
    {
       return $this->text;
    }

    /**
     * Upper function
     *
     * @param String $text
     * @return Stringify
     * 
     * @since 1.0.0
     */
    public function upper() : Stringify
    {
        $this->text = strtoupper($this->text);

        return $this;
    }

    /**
     * Lower function
     *
     * @param String $text
     * @return Stringify
     * 
     * @since 1.0.0
     */
    public function lower() : Stringify
    {
       $this->text = strtolower($this->text);

       return $this;
    }
}