<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231223203411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lien_tag (lien_id INTEGER NOT NULL, tag_id INTEGER NOT NULL, PRIMARY KEY(lien_id, tag_id), CONSTRAINT FK_EDD5450BEDAAC352 FOREIGN KEY (lien_id) REFERENCES lien (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_EDD5450BBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_EDD5450BEDAAC352 ON lien_tag (lien_id)');
        $this->addSql('CREATE INDEX IDX_EDD5450BBAD26311 ON lien_tag (tag_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE lien_tag');
    }
}
