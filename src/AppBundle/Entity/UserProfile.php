<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfile
 *
 * @ORM\Table(name="user_profile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserProfileRepository")
 */
class UserProfile
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
     * @ORM\Column(name="profile", type="text", nullable=true)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_artist", type="string", length=255)
     */
    private $favArtist;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_animal", type="string", length=255)
     */
    private $favAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_quote", type="string", length=255)
     */
    private $favQuote;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=255)
     */
    private $youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="bleh", type="string", length=255)
     */
    private $bleh;


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
     * Set profile
     *
     * @param string $profile
     *
     * @return UserProfile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set favArtist
     *
     * @param string $favArtist
     *
     * @return UserProfile
     */
    public function setFavArtist($favArtist)
    {
        $this->favArtist = $favArtist;

        return $this;
    }

    /**
     * Get favArtist
     *
     * @return string
     */
    public function getFavArtist()
    {
        return $this->favArtist;
    }

    /**
     * Set favAnimal
     *
     * @param string $favAnimal
     *
     * @return UserProfile
     */
    public function setFavAnimal($favAnimal)
    {
        $this->favAnimal = $favAnimal;

        return $this;
    }

    /**
     * Get favAnimal
     *
     * @return string
     */
    public function getFavAnimal()
    {
        return $this->favAnimal;
    }

    /**
     * Set favQuote
     *
     * @param string $favQuote
     *
     * @return UserProfile
     */
    public function setFavQuote($favQuote)
    {
        $this->favQuote = $favQuote;

        return $this;
    }

    /**
     * Get favQuote
     *
     * @return string
     */
    public function getFavQuote()
    {
        return $this->favQuote;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return UserProfile
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return UserProfile
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return UserProfile
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return UserProfile
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set bleh
     *
     * @param string $bleh
     *
     * @return UserProfile
     */
    public function setBleh($bleh)
    {
        $this->bleh = $bleh;

        return $this;
    }

    /**
     * Get bleh
     *
     * @return string
     */
    public function getBleh()
    {
        return $this->bleh;
    }
}

