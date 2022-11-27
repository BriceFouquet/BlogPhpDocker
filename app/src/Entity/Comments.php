<?php

namespace App\Entity;

class Comments extends BaseEntity
{
    private int $post_id;
    private string $username;
    private int $id;
    private string $created;
    private string $content;

    /**
     * @return int
     */
    public function getCommentId(): int
    {
        return $this->comment_id;
    }

    /**
     * @param int $comment_id
     */
    public function setCommentId(int $comment_id): void
    {
        $this->comment_id = $comment_id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated(string $created): void
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}