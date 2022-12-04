<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\DateTime;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        $commentaire->setAuteur('auteur')
                    ->setEmail('email@test.com')
                    ->setCreatedAt($datetime)
                    ->setContenu('contenu')
                    ->setBlogpost($blogpost)
                    ->setPeinture($peinture);

                    $this->assertTrue($commentaire->getAuteur() === 'auteur');
                    $this->assertTrue($commentaire->getEmail() === 'email@test.com');
                    $this->assertTrue($commentaire->getCreatedAt() === $datetime);
                    $this->assertTrue($commentaire->getContenu() === 'contenu');
                    $this->assertTrue($commentaire->getBlogpost() === $blogpost);
                    $this->assertTrue($commentaire->getPeinture() === $peinture);
    }

    public function testIsFalse(): void
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        $commentaire->setAuteur('false')
                    ->setEmail('false@test.com')
                    ->setCreatedAt(new datetime)
                    ->setContenu('false')
                    ->setBlogpost(new $blogpost())
                    ->setPeinture(new $peinture());

        $this->assertFalse($commentaire->getAuteur() === 'auteur');
        $this->assertFalse($commentaire->getEmail() === 'email@test.com');
        $this->assertFalse($commentaire->getCreatedAt() === $datetime);
        $this->assertFalse($commentaire->getContenu() === 'contenu');
        $this->assertFalse($commentaire->getBlogpost() === $blogpost);
        $this->assertFalse($commentaire->getPeinture() === $peinture);
    }

    public function testIsEmpty(): void
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());
    }
}
