<?php

/**
 * @Entity @Table(name="blog2")
 **/
class Blog
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $text;

    /** @Column(type="string") **/
    public $content22=null;

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

}