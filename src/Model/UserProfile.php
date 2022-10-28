<?php

namespace Gyroscops\Harbor\Api\Model;

class UserProfile
{
    /**
     * The new comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * The new email.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The new realname.
     *
     * @var string|null
     */
    protected $realname;
    /**
     * The new comment.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * The new comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * The new email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The new email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The new realname.
     *
     * @return string|null
     */
    public function getRealname(): ?string
    {
        return $this->realname;
    }
    /**
     * The new realname.
     *
     * @param string|null $realname
     *
     * @return self
     */
    public function setRealname(?string $realname): self
    {
        $this->realname = $realname;
        return $this;
    }
}
