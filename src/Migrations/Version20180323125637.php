<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180323125637 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stage ADD idUserEleve INT DEFAULT NULL, ADD idUserProf INT DEFAULT NULL, ADD idTuteur INT DEFAULT NULL, DROP id_user_eleve, DROP id_user_prof, DROP id_tuteur');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369F62E3D77 FOREIGN KEY (idUserEleve) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369E568DAF FOREIGN KEY (idUserProf) REFERENCES prof (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936935508AF2 FOREIGN KEY (idTuteur) REFERENCES tuteur (id)');
        $this->addSql('CREATE INDEX IDX_C27C9369F62E3D77 ON stage (idUserEleve)');
        $this->addSql('CREATE INDEX IDX_C27C9369E568DAF ON stage (idUserProf)');
        $this->addSql('CREATE INDEX IDX_C27C936935508AF2 ON stage (idTuteur)');
        $this->addSql('ALTER TABLE tuteur CHANGE id_entreprise entreprise INT NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369F62E3D77');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369E568DAF');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936935508AF2');
        $this->addSql('DROP INDEX IDX_C27C9369F62E3D77 ON stage');
        $this->addSql('DROP INDEX IDX_C27C9369E568DAF ON stage');
        $this->addSql('DROP INDEX IDX_C27C936935508AF2 ON stage');
        $this->addSql('ALTER TABLE stage ADD id_user_eleve INT NOT NULL, ADD id_user_prof INT NOT NULL, ADD id_tuteur INT NOT NULL, DROP idUserEleve, DROP idUserProf, DROP idTuteur');
        $this->addSql('ALTER TABLE tuteur CHANGE entreprise id_entreprise INT NOT NULL');
    }
}
