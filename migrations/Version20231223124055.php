<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231223124055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lien (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, lien_url VARCHAR(255) NOT NULL, lien_titre VARCHAR(255) NOT NULL, lien_desc CLOB NOT NULL, lien_image VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE tag (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, tag_name VARCHAR(50) NOT NULL)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE lien');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE user');
    }
}
