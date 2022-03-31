<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205205312 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, identification VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat_session (candidat_id INT NOT NULL, session_id INT NOT NULL, INDEX IDX_8949233E8D0EB82 (candidat_id), INDEX IDX_8949233E613FECDF (session_id), PRIMARY KEY(candidat_id, session_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session (id INT AUTO_INCREMENT NOT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, nb_jours INT DEFAULT NULL, responsable VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, site_session VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat_session ADD CONSTRAINT FK_8949233E8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_session ADD CONSTRAINT FK_8949233E613FECDF FOREIGN KEY (session_id) REFERENCES session (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat_session DROP FOREIGN KEY FK_8949233E8D0EB82');
        $this->addSql('ALTER TABLE candidat_session DROP FOREIGN KEY FK_8949233E613FECDF');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE candidat_session');
        $this->addSql('DROP TABLE session');
    }
}
