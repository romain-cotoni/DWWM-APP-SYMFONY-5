<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211210083105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, date_jour DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_jour (session_id INT NOT NULL, jour_id INT NOT NULL, INDEX IDX_1C66D9EF613FECDF (session_id), INDEX IDX_1C66D9EF220C6AD0 (jour_id), PRIMARY KEY(session_id, jour_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE session_jour ADD CONSTRAINT FK_1C66D9EF613FECDF FOREIGN KEY (session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session_jour ADD CONSTRAINT FK_1C66D9EF220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session_jour DROP FOREIGN KEY FK_1C66D9EF220C6AD0');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE session_jour');
    }
}
