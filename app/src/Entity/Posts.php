<?php

namespace App\Entity;

class Posts extends BaseEntity
{
    private int $post_id;
    private int $id;
    private ?string $content;
    private string $username;
    public string $created;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->post_id;
    }

    /**
     * @param int $post_id
     * @return Posts
     */
    public function setPostId(int $post_id): Posts
    {
        $this->post_id = $post_id;
        return $this;
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
     * @return Posts
     */
    public function setCreated(string $created): Posts
    {
        $this->created = $created;
        return $this;
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
     * @return Posts
     */
    public function setUsername(string $username): Posts
    {
        $this->username = $username;
        return $this;
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
     * @return Posts
     */
    public function setId(int $id): Posts
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return Posts
     */
    public function setContent(?string $content): Posts
    {
        $this->content = $content;
        return $this;
    }
    
}