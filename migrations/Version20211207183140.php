<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207183140 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jury (id INT AUTO_INCREMENT NOT NULL, nom_jury_1 VARCHAR(255) DEFAULT NULL, prenom_jury_1 VARCHAR(255) DEFAULT NULL, nom_jury_2 VARCHAR(255) DEFAULT NULL, prenom_jury_2 VARCHAR(255) DEFAULT NULL, nom_jury_3 VARCHAR(255) DEFAULT NULL, prenom_jury_3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_jury (session_id INT NOT NULL, jury_id INT NOT NULL, INDEX IDX_D544B006613FECDF (session_id), INDEX IDX_D544B006E560103C (jury_id), PRIMARY KEY(session_id, jury_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE session_jury ADD CONSTRAINT FK_D544B006613FECDF FOREIGN KEY (session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session_jury ADD CONSTRAINT FK_D544B006E560103C FOREIGN KEY (jury_id) REFERENCES jury (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session_jury DROP FOREIGN KEY FK_D544B006E560103C');
        $this->addSql('DROP TABLE jury');
        $this->addSql('DROP TABLE session_jury');
    }
}
