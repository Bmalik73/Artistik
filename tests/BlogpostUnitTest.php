<?php

namespace App\Tests;

use App\Entity\Blogpost;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\DateTime;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre(('titre'))
                 ->setCreatedAt($datetime)
                 ->setContenu('contenu')
                 ->setSlug('slug');

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getCreatedAt() === $datetime);
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
    }

    public function testIsFalse(): void
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre(('titre'))
                 ->setCreatedAt($datetime)
                 ->setContenu('contenu')
                 ->setSlug('slug');

        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === $datetime);
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
    }

    public function testIsEmpty(): void
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
    }
}
