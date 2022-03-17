<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220317142626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plainte (id INT AUTO_INCREMENT NOT NULL, nom_citoyen VARCHAR(255) NOT NULL, date DATETIME NOT NULL, id_degre INT NOT NULL, description_faits LONGTEXT NOT NULL, telephone VARCHAR(255) NOT NULL, id_agent INT NOT NULL, statut_plainte TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, nom_dossier VARCHAR(255) NOT NULL, date DATETIME NOT NULL, id_faits INT NOT NULL, lien_dossier VARCHAR(255) NOT NULL, id_agent INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis_recherche CHANGE id_degre_recherche id_degre INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE plainte');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('ALTER TABLE agent CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mot_de_passe mot_de_passe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE avis_recherche CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_degre id_degre_recherche INT NOT NULL');
        $this->addSql('ALTER TABLE casier_judiciaire CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE temps_detention temps_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fin_detention fin_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_saisi bien_saisi LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_rendre bien_rendre LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_suspect img_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE grade CHANGE libelle_grade libelle_grade VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE service CHANGE libelle_service libelle_service VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
