<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170822135157 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE digikey ADD shell_size_insert LONGTEXT DEFAULT NULL, ADD shell_material_finish LONGTEXT DEFAULT NULL, ADD shell_size_mil LONGTEXT DEFAULT NULL, ADD orientation LONGTEXT DEFAULT NULL, ADD connector_type LONGTEXT DEFAULT NULL, CHANGE mating_orientation mating_orientation LONGTEXT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE digikey DROP shell_size_insert, DROP shell_material_finish, DROP shell_size_mil, DROP orientation, DROP connector_type, CHANGE mating_orientation mating_orientation VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
