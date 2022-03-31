<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207180108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, raison_sociale VARCHAR(255) NOT NULL, adresse_entreprise VARCHAR(255) DEFAULT NULL, code_postal_entreprise VARCHAR(255) DEFAULT NULL, ville_entreprise VARCHAR(255) DEFAULT NULL, telephone_entreprise VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable_entreprise (id INT AUTO_INCREMENT NOT NULL, entreprise_id_id INT DEFAULT NULL, nom_responsable_entreprise VARCHAR(255) DEFAULT NULL, prenom_responsable_entreprise VARCHAR(255) DEFAULT NULL, fonction_responsable_entreprise VARCHAR(255) DEFAULT NULL, tel_fixe_responsable_entreprise VARCHAR(255) DEFAULT NULL, tel_mob_responsable_entreprise VARCHAR(255) DEFAULT NULL, INDEX IDX_F9300960DAC5BE2B (entreprise_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE responsable_entreprise ADD CONSTRAINT FK_F9300960DAC5BE2B FOREIGN KEY (entreprise_id_id) REFERENCES entreprise (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE responsable_entreprise DROP FOREIGN KEY FK_F9300960DAC5BE2B');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE responsable_entreprise');
    }
}
