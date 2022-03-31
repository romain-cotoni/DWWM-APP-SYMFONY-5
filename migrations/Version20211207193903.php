<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207193903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session ADD titre_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4D6840B39 FOREIGN KEY (titre_id_id) REFERENCES titre (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D044D5D4D6840B39 ON session (titre_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4D6840B39');
        $this->addSql('DROP INDEX UNIQ_D044D5D4D6840B39 ON session');
        $this->addSql('ALTER TABLE session DROP titre_id_id');
    }
}
