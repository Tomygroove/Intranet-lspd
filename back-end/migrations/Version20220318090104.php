<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220318090104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE guide (id INT AUTO_INCREMENT NOT NULL, droit_miranda VARCHAR(255) NOT NULL, code_radio VARCHAR(255) NOT NULL, reglement_interne VARCHAR(255) NOT NULL, tenues_agents VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information (id INT AUTO_INCREMENT NOT NULL, referent_unite VARCHAR(255) NOT NULL, referent_formation VARCHAR(255) NOT NULL, liste_agents VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE guide');
        $this->addSql('DROP TABLE information');
        $this->addSql('ALTER TABLE agent CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mot_de_passe mot_de_passe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE avertissement CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE avis_recherche CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE casier_judiciaire CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE temps_detention temps_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fin_detention fin_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_saisi bien_saisi LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_rendre bien_rendre LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_suspect img_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE declaration_vol CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_vehicule description_vehicule LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE plaque_immatriculation plaque_immatriculation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE degre CHANGE libelle_degre libelle_degre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE grade CHANGE libelle_grade libelle_grade VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE mandat CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_faits id_faits VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_mandat description_mandat LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lien_dossier lien_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE plainte CHANGE nom_citoyen nom_citoyen VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_faits description_faits LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE rapport CHANGE nom_dossier nom_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lien_dossier lien_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE saisie CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_saisie img_saisie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE saisie_type CHANGE libelle_saisie_type libelle_saisie_type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE service CHANGE libelle_service libelle_service VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
