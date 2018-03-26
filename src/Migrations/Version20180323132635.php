<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180323132635 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936956412268');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C93695BBA70BB');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369ECA105F7');
        $this->addSql('DROP INDEX IDX_C27C9369ECA105F7 ON stage');
        $this->addSql('DROP INDEX IDX_C27C93695BBA70BB ON stage');
        $this->addSql('DROP INDEX IDX_C27C936956412268 ON stage');
        $this->addSql('ALTER TABLE stage ADD idEleve INT DEFAULT NULL, ADD idProf INT DEFAULT NULL, ADD idTuteur INT DEFAULT NULL, DROP eleve, DROP prof, DROP tuteur');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369FB6546EA FOREIGN KEY (idEleve) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936928472E25 FOREIGN KEY (idProf) REFERENCES prof (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936935508AF2 FOREIGN KEY (idTuteur) REFERENCES tuteur (id)');
        $this->addSql('CREATE INDEX IDX_C27C9369FB6546EA ON stage (idEleve)');
        $this->addSql('CREATE INDEX IDX_C27C936928472E25 ON stage (idProf)');
        $this->addSql('CREATE INDEX IDX_C27C936935508AF2 ON stage (idTuteur)');
        $this->addSql('ALTER TABLE tuteur DROP FOREIGN KEY FK_56412268D19FA60');
        $this->addSql('DROP INDEX IDX_56412268D19FA60 ON tuteur');
        $this->addSql('ALTER TABLE tuteur CHANGE entreprise idEntreprise INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tuteur ADD CONSTRAINT FK_564122688FEDE48A FOREIGN KEY (idEntreprise) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX IDX_564122688FEDE48A ON tuteur (idEntreprise)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369FB6546EA');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936928472E25');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936935508AF2');
        $this->addSql('DROP INDEX IDX_C27C9369FB6546EA ON stage');
        $this->addSql('DROP INDEX IDX_C27C936928472E25 ON stage');
        $this->addSql('DROP INDEX IDX_C27C936935508AF2 ON stage');
        $this->addSql('ALTER TABLE stage ADD eleve INT DEFAULT NULL, ADD prof INT DEFAULT NULL, ADD tuteur INT DEFAULT NULL, DROP idEleve, DROP idProf, DROP idTuteur');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936956412268 FOREIGN KEY (tuteur) REFERENCES tuteur (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C93695BBA70BB FOREIGN KEY (prof) REFERENCES prof (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369ECA105F7 FOREIGN KEY (eleve) REFERENCES eleve (id)');
        $this->addSql('CREATE INDEX IDX_C27C9369ECA105F7 ON stage (eleve)');
        $this->addSql('CREATE INDEX IDX_C27C93695BBA70BB ON stage (prof)');
        $this->addSql('CREATE INDEX IDX_C27C936956412268 ON stage (tuteur)');
        $this->addSql('ALTER TABLE tuteur DROP FOREIGN KEY FK_564122688FEDE48A');
        $this->addSql('DROP INDEX IDX_564122688FEDE48A ON tuteur');
        $this->addSql('ALTER TABLE tuteur CHANGE identreprise entreprise INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tuteur ADD CONSTRAINT FK_56412268D19FA60 FOREIGN KEY (entreprise) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX IDX_56412268D19FA60 ON tuteur (entreprise)');
    }
}
