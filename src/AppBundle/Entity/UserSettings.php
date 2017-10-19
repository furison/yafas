<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSettings
 *
 * @ORM\Table(name="user_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserSettingsRepository")
 */
class UserSettings
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
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=100)
     */
    private $theme;

    /**
     * @var int
     *
     * @ORM\Column(name="list_size", type="integer")
     */
    private $listSize;

    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=true)
     */
    private $private;

    /**
     * @var string
     *
     * @ORM\Column(name="date_string", type="string", length=50, nullable=true)
     */
    private $dateString;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return UserSettings
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set listSize
     *
     * @param integer $listSize
     *
     * @return UserSettings
     */
    public function setListSize($listSize)
    {
        $this->listSize = $listSize;

        return $this;
    }

    /**
     * Get listSize
     *
     * @return int
     */
    public function getListSize()
    {
        return $this->listSize;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return UserSettings
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set dateString
     *
     * @param string $dateString
     *
     * @return UserSettings
     */
    public function setDateString($dateString)
    {
        $this->dateString = $dateString;

        return $this;
    }

    /**
     * Get dateString
     *
     * @return string
     */
    public function getDateString()
    {
        return $this->dateString;
    }
}

