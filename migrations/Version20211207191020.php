<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207191020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE habilitation (id INT AUTO_INCREMENT NOT NULL, titre_habilitation VARCHAR(255) DEFAULT NULL, date_debut_habilitation DATE DEFAULT NULL, date_fin_habilitation DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, insee VARCHAR(255) DEFAULT NULL, nom_utilisateur VARCHAR(255) DEFAULT NULL, prenom_utilisateur VARCHAR(255) DEFAULT NULL, adresse_utilisateur VARCHAR(255) DEFAULT NULL, code_postal_utilisateur VARCHAR(255) DEFAULT NULL, ville_utilisateur VARCHAR(255) DEFAULT NULL, tel_mob_utilisateur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_habilitation (utilisateur_id INT NOT NULL, habilitation_id INT NOT NULL, INDEX IDX_CE4E039BFB88E14F (utilisateur_id), INDEX IDX_CE4E039B389712CD (habilitation_id), PRIMARY KEY(utilisateur_id, habilitation_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur_habilitation ADD CONSTRAINT FK_CE4E039BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur_habilitation ADD CONSTRAINT FK_CE4E039B389712CD FOREIGN KEY (habilitation_id) REFERENCES habilitation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur_habilitation DROP FOREIGN KEY FK_CE4E039B389712CD');
        $this->addSql('ALTER TABLE utilisateur_habilitation DROP FOREIGN KEY FK_CE4E039BFB88E14F');
        $this->addSql('DROP TABLE habilitation');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE utilisateur_habilitation');
    }
}
