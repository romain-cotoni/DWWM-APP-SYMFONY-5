<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207192247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD jury_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B34C40AA28 FOREIGN KEY (jury_id_id) REFERENCES jury (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B34C40AA28 ON utilisateur (jury_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B34C40AA28');
        $this->addSql('DROP INDEX IDX_1D1C63B34C40AA28 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP jury_id_id');
    }
}
