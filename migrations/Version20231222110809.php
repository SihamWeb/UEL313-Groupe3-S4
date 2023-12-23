<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231222110809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lien ADD COLUMN lien_image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__lien AS SELECT id, lien_url, lien_titre, lien_desc FROM lien');
        $this->addSql('DROP TABLE lien');
        $this->addSql('CREATE TABLE lien (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, lien_url VARCHAR(255) NOT NULL, lien_titre VARCHAR(255) NOT NULL, lien_desc CLOB NOT NULL)');
        $this->addSql('INSERT INTO lien (id, lien_url, lien_titre, lien_desc) SELECT id, lien_url, lien_titre, lien_desc FROM __temp__lien');
        $this->addSql('DROP TABLE __temp__lien');
    }
}