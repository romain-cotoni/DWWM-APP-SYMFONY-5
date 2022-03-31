<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207194523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habilitation ADD titre_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE habilitation ADD CONSTRAINT FK_A7BC2768D6840B39 FOREIGN KEY (titre_id_id) REFERENCES titre (id)');
        $this->addSql('CREATE INDEX IDX_A7BC2768D6840B39 ON habilitation (titre_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habilitation DROP FOREIGN KEY FK_A7BC2768D6840B39');
        $this->addSql('DROP INDEX IDX_A7BC2768D6840B39 ON habilitation');
        $this->addSql('ALTER TABLE habilitation DROP titre_id_id');
    }
}
