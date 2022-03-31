<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207193631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ccp (id INT AUTO_INCREMENT NOT NULL, titre_id INT DEFAULT NULL, code_ccp VARCHAR(255) DEFAULT NULL, libelle_ccp VARCHAR(255) DEFAULT NULL, INDEX IDX_AB05E533D54FAE5E (titre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, titre_id INT DEFAULT NULL, code_niveau VARCHAR(255) DEFAULT NULL, libelle_niveau VARCHAR(255) DEFAULT NULL, INDEX IDX_4BDFF36BD54FAE5E (titre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE titre (id INT AUTO_INCREMENT NOT NULL, libelle_court VARCHAR(255) DEFAULT NULL, libelle_long VARCHAR(255) DEFAULT NULL, referentiel_libelle VARCHAR(255) DEFAULT NULL, referentiel_document VARCHAR(255) DEFAULT NULL, referentiel_date_debut VARCHAR(255) DEFAULT NULL, referentiel_date_fin VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ccp ADD CONSTRAINT FK_AB05E533D54FAE5E FOREIGN KEY (titre_id) REFERENCES titre (id)');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36BD54FAE5E FOREIGN KEY (titre_id) REFERENCES titre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ccp DROP FOREIGN KEY FK_AB05E533D54FAE5E');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36BD54FAE5E');
        $this->addSql('DROP TABLE ccp');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE titre');
    }
}
