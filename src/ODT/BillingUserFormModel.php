<?php

namespace App\ODT;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use App\Validator\UniqueUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="billing_user")
 */
class BillingUserFormModel
{
    /**
    * @Assert\NotBlank(message="Blank email")
    * @Assert\Email(message="Invalid email")
    * @JMS\Type("string")
    * @UniqueUser()
    */
    public $email;

    /**

    * @Assert\NotBlank(message="Blank password")
    * @Assert\Length(min=6, minMessage="Password must be at least 6 symbols")
    * @JMS\Type("string")
    */
    public $password;
}
