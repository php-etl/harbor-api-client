<?php

namespace Harbor\Api\Model;

class UserProfile
{
    /**
     * The new comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * The new email.
     *
     * @var string
     */
    protected $email;
    /**
     * The new realname.
     *
     * @var string
     */
    protected $realname;
    /**
     * The new comment.
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * The new comment.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * The new email.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The new email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The new realname.
     *
     * @return string
     */
    public function getRealname() : string
    {
        return $this->realname;
    }
    /**
     * The new realname.
     *
     * @param string $realname
     *
     * @return self
     */
    public function setRealname(string $realname) : self
    {
        $this->realname = $realname;
        return $this;
    }
}