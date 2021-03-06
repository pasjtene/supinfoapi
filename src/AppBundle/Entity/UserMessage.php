<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMessage
 *
 * @ORM\Table(name="user_message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserMessageRepository")
 */
class UserMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="readDate", type="datetime")
     */
    private $readDate;



    /**
     * @var bool
     *
     * @ORM\Column(name="isLocked", type="boolean")
     */
    private $isLocked;


    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $receiver;



    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Message",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $message;




    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return boolean
     */
    public function isIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * @param boolean $isLocked
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
    }



    /**
     * @return User
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param User $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }



    /**
     * Get isLocked
     *
     * @return boolean
     */
    public function getIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * Set receiver
     *
     * @param \AppBundle\Entity\User $receiver
     *
     * @return UserMessage
     */
    public function setReceiver(\AppBundle\Entity\User $receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set readDate
     *
     * @param \DateTime $readDate
     *
     * @return UserMessage
     */
    public function setReadDate($readDate)
    {
        $this->readDate = $readDate;

        return $this;
    }

    /**
     * Get readDate
     *
     * @return \DateTime
     */
    public function getReadDate()
    {
        return $this->readDate;
    }
}
