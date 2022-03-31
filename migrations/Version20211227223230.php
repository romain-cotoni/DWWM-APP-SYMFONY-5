<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211227223230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session ADD titres_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D457C2ADE9 FOREIGN KEY (titres_id_id) REFERENCES titre (id)');
        $this->addSql('CREATE INDEX IDX_D044D5D457C2ADE9 ON session (titres_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D457C2ADE9');
        $this->addSql('DROP INDEX IDX_D044D5D457C2ADE9 ON session');
        $this->addSql('ALTER TABLE session DROP titres_id_id');
    }
}
