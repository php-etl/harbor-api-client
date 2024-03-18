<?php

namespace Gyroscops\Harbor\Api\Model;

class UserProfile
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $realname;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRealname() : ?string
    {
        return $this->realname;
    }
    /**
     * 
     *
     * @param string|null $realname
     *
     * @return self
     */
    public function setRealname(?string $realname) : self
    {
        $this->initialized['realname'] = true;
        $this->realname = $realname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
}