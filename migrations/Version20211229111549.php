<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229111549 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE titre_ccp (titre_id INT NOT NULL, ccp_id INT NOT NULL, INDEX IDX_4CD7BEFDD54FAE5E (titre_id), INDEX IDX_4CD7BEFD130F6D74 (ccp_id), PRIMARY KEY(titre_id, ccp_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE titre_ccp ADD CONSTRAINT FK_4CD7BEFDD54FAE5E FOREIGN KEY (titre_id) REFERENCES titre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE titre_ccp ADD CONSTRAINT FK_4CD7BEFD130F6D74 FOREIGN KEY (ccp_id) REFERENCES ccp (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE titre_ccp');
    }
}
