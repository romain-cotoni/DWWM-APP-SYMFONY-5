<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207195937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(255) DEFAULT NULL, domaine VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, nom_projet VARCHAR(255) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_produit (projet_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_AB8FB156C18272 (projet_id), INDEX IDX_AB8FB156F347EFB (produit_id), PRIMARY KEY(projet_id, produit_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projet_produit ADD CONSTRAINT FK_AB8FB156C18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_produit ADD CONSTRAINT FK_AB8FB156F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet_produit DROP FOREIGN KEY FK_AB8FB156F347EFB');
        $this->addSql('ALTER TABLE projet_produit DROP FOREIGN KEY FK_AB8FB156C18272');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE projet_produit');
    }
}
