<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229112145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE titre_habilitation (titre_id INT NOT NULL, habilitation_id INT NOT NULL, INDEX IDX_E8E82974D54FAE5E (titre_id), INDEX IDX_E8E82974389712CD (habilitation_id), PRIMARY KEY(titre_id, habilitation_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE titre_habilitation ADD CONSTRAINT FK_E8E82974D54FAE5E FOREIGN KEY (titre_id) REFERENCES titre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE titre_habilitation ADD CONSTRAINT FK_E8E82974389712CD FOREIGN KEY (habilitation_id) REFERENCES habilitation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE titre_habilitation');
    }
}
