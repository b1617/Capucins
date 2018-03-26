<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180323133441 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE eleve DROP classe_eleve, DROP annee_scolaire, DROP login, DROP password, DROP role, DROP present');
        $this->addSql('ALTER TABLE prof DROP login, DROP password, DROP role, DROP present');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE eleve ADD classe_eleve VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD annee_scolaire VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD login VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD role VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD present TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE prof ADD login VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD role VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD present TINYINT(1) NOT NULL');
    }
}
