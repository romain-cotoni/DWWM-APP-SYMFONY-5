<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207200257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet ADD candidat_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA9BFA9F225 FOREIGN KEY (candidat_id_id) REFERENCES candidat (id)');
        $this->addSql('CREATE INDEX IDX_50159CA9BFA9F225 ON projet (candidat_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9BFA9F225');
        $this->addSql('DROP INDEX IDX_50159CA9BFA9F225 ON projet');
        $this->addSql('ALTER TABLE projet DROP candidat_id_id');
    }
}
