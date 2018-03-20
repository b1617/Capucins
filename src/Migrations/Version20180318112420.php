<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180318112420 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE prof (id INT AUTO_INCREMENT NOT NULL, nom_prof VARCHAR(255) NOT NULL, prenom_prof VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, present TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE eleve ADD nom_eleve VARCHAR(255) NOT NULL, ADD prenom_eleve VARCHAR(255) NOT NULL, ADD classe_eleve VARCHAR(255) NOT NULL, ADD annee_scolaire VARCHAR(255) NOT NULL, ADD login VARCHAR(255) NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD role VARCHAR(255) NOT NULL, ADD present TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tuteur ADD nom_tuteur VARCHAR(255) NOT NULL, ADD prenom_tuteur VARCHAR(255) NOT NULL, ADD mail_tuteur VARCHAR(255) NOT NULL, ADD tel_tuteur INT NOT NULL, ADD id_entreprise INT NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE prof');
        $this->addSql('ALTER TABLE eleve DROP nom_eleve, DROP prenom_eleve, DROP classe_eleve, DROP annee_scolaire, DROP login, DROP password, DROP role, DROP present');
        $this->addSql('ALTER TABLE tuteur DROP nom_tuteur, DROP prenom_tuteur, DROP mail_tuteur, DROP tel_tuteur, DROP id_entreprise');
    }
}
