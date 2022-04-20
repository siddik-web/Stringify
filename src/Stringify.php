<?php

namespace SiddikWeb\App;

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

    /**
     * Trim text function
     *
     * @return Stringify
     * 
     * @since 1.0.4
     */
    public function trim() : Stringify
    {
        $this->text = trim($this->text);

        return $this;
    }

    /**
     * Text Left trim function
     *
     * @return Stringify
     * 
     * @since 1.0.4
     */
    public function ltrim() : Stringify
    {
       $this->text = ltrim($this->text);

       return $this;
    }

    /**
     * Text Right Trim function
     *
     * @return Stringify
     * 
     * @since 1.0.4
     */
    public function rtrim() : Stringify
    {
        $this->text = rtrim($this->text);

        return $this;
    }

    /**
     * Text Capitalize function
     *
     * @return Stringify
     * 
     * @since 1.0.5
     */
    public function capitalize() : Stringify
    {
        $this->text = ucfirst($this->text);

        return $this;
    }
}