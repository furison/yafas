<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="submission_comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubmisionRepository")
 */
class SubmisionComment extends Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="submission_id", type="integer")
     */
    private $submissionId;

    public function getSubmissionId()
    {
        return $this->submissionId;
    }

    public function setSubmissionId($subId)
    {
        $this->submissionId = $subId;

        return $this;
    }
}