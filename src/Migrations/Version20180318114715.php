<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180318114715 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entreprise CHANGE nom_entreprise nom_entreprise VARCHAR(255) NOT NULL, CHANGE mail mail VARCHAR(255) NOT NULL, CHANGE tel tel VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE stage ADD id_user_eleve INT NOT NULL, ADD id_user_prof INT NOT NULL, ADD id_tuteur INT NOT NULL, ADD date_stage DATE NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entreprise CHANGE nom_entreprise nom_entreprise VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE mail mail VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, CHANGE tel tel INT NOT NULL');
        $this->addSql('ALTER TABLE stage DROP id_user_eleve, DROP id_user_prof, DROP id_tuteur, DROP date_stage');
    }
}
