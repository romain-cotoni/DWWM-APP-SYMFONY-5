<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207181223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session ADD entreprise_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4DAC5BE2B FOREIGN KEY (entreprise_id_id) REFERENCES entreprise (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D044D5D4DAC5BE2B ON session (entreprise_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4DAC5BE2B');
        $this->addSql('DROP INDEX UNIQ_D044D5D4DAC5BE2B ON session');
        $this->addSql('ALTER TABLE session DROP entreprise_id_id');
    }
}
