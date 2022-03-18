<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220318120809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avertissement_agent (avertissement_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_57E7BC94246B5DFD (avertissement_id), INDEX IDX_57E7BC943414710B (agent_id), PRIMARY KEY(avertissement_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avis_recherche_agent (avis_recherche_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_8412EDA8585C1D33 (avis_recherche_id), INDEX IDX_8412EDA83414710B (agent_id), PRIMARY KEY(avis_recherche_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casier_judiciaire_agent (casier_judiciaire_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_B3D3F63A65D6D512 (casier_judiciaire_id), INDEX IDX_B3D3F63A3414710B (agent_id), PRIMARY KEY(casier_judiciaire_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declaration_vol_agent (declaration_vol_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_E13930F9BD3A08AC (declaration_vol_id), INDEX IDX_E13930F93414710B (agent_id), PRIMARY KEY(declaration_vol_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information_agent (information_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_45AC584D2EF03101 (information_id), INDEX IDX_45AC584D3414710B (agent_id), PRIMARY KEY(information_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport_agent (rapport_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_6B985431DFBCC46 (rapport_id), INDEX IDX_6B985433414710B (agent_id), PRIMARY KEY(rapport_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saisie_agent (saisie_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_56DC0549A12433ED (saisie_id), INDEX IDX_56DC05493414710B (agent_id), PRIMARY KEY(saisie_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saisie_saisie_type (saisie_id INT NOT NULL, saisie_type_id INT NOT NULL, INDEX IDX_E621483FA12433ED (saisie_id), INDEX IDX_E621483FA9CBD73F (saisie_type_id), PRIMARY KEY(saisie_id, saisie_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avertissement_agent ADD CONSTRAINT FK_57E7BC94246B5DFD FOREIGN KEY (avertissement_id) REFERENCES avertissement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avertissement_agent ADD CONSTRAINT FK_57E7BC943414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis_recherche_agent ADD CONSTRAINT FK_8412EDA8585C1D33 FOREIGN KEY (avis_recherche_id) REFERENCES avis_recherche (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis_recherche_agent ADD CONSTRAINT FK_8412EDA83414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casier_judiciaire_agent ADD CONSTRAINT FK_B3D3F63A65D6D512 FOREIGN KEY (casier_judiciaire_id) REFERENCES casier_judiciaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casier_judiciaire_agent ADD CONSTRAINT FK_B3D3F63A3414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE declaration_vol_agent ADD CONSTRAINT FK_E13930F9BD3A08AC FOREIGN KEY (declaration_vol_id) REFERENCES declaration_vol (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE declaration_vol_agent ADD CONSTRAINT FK_E13930F93414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE information_agent ADD CONSTRAINT FK_45AC584D2EF03101 FOREIGN KEY (information_id) REFERENCES information (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE information_agent ADD CONSTRAINT FK_45AC584D3414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rapport_agent ADD CONSTRAINT FK_6B985431DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rapport_agent ADD CONSTRAINT FK_6B985433414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saisie_agent ADD CONSTRAINT FK_56DC0549A12433ED FOREIGN KEY (saisie_id) REFERENCES saisie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saisie_agent ADD CONSTRAINT FK_56DC05493414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saisie_saisie_type ADD CONSTRAINT FK_E621483FA12433ED FOREIGN KEY (saisie_id) REFERENCES saisie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saisie_saisie_type ADD CONSTRAINT FK_E621483FA9CBD73F FOREIGN KEY (saisie_type_id) REFERENCES saisie_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agent ADD id_grade_id INT DEFAULT NULL, ADD id_service_id INT DEFAULT NULL, DROP id_service, DROP id_grade');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DAEC24D3D FOREIGN KEY (id_grade_id) REFERENCES grade (id)');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D48D62931 FOREIGN KEY (id_service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9DAEC24D3D ON agent (id_grade_id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D48D62931 ON agent (id_service_id)');
        $this->addSql('ALTER TABLE avertissement DROP id_agent');
        $this->addSql('ALTER TABLE avis_recherche ADD id_degre_id INT DEFAULT NULL, DROP id_agent, DROP id_degre');
        $this->addSql('ALTER TABLE avis_recherche ADD CONSTRAINT FK_12720487BBCD69A1 FOREIGN KEY (id_degre_id) REFERENCES degre (id)');
        $this->addSql('CREATE INDEX IDX_12720487BBCD69A1 ON avis_recherche (id_degre_id)');
        $this->addSql('ALTER TABLE casier_judiciaire DROP id_agent');
        $this->addSql('ALTER TABLE declaration_vol DROP id_agent');
        $this->addSql('ALTER TABLE information DROP liste_agents');
        $this->addSql('ALTER TABLE mandat ADD id_degre_id INT DEFAULT NULL, DROP id_degre');
        $this->addSql('ALTER TABLE mandat ADD CONSTRAINT FK_1E53EFD5BBCD69A1 FOREIGN KEY (id_degre_id) REFERENCES degre (id)');
        $this->addSql('CREATE INDEX IDX_1E53EFD5BBCD69A1 ON mandat (id_degre_id)');
        $this->addSql('ALTER TABLE plainte ADD id_degre_id INT DEFAULT NULL, DROP id_degre, DROP id_agent');
        $this->addSql('ALTER TABLE plainte ADD CONSTRAINT FK_D88CE90FBBCD69A1 FOREIGN KEY (id_degre_id) REFERENCES degre (id)');
        $this->addSql('CREATE INDEX IDX_D88CE90FBBCD69A1 ON plainte (id_degre_id)');
        $this->addSql('ALTER TABLE rapport DROP id_agent');
        $this->addSql('ALTER TABLE saisie DROP id_agent, DROP type_saisie');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE avertissement_agent');
        $this->addSql('DROP TABLE avis_recherche_agent');
        $this->addSql('DROP TABLE casier_judiciaire_agent');
        $this->addSql('DROP TABLE declaration_vol_agent');
        $this->addSql('DROP TABLE information_agent');
        $this->addSql('DROP TABLE rapport_agent');
        $this->addSql('DROP TABLE saisie_agent');
        $this->addSql('DROP TABLE saisie_saisie_type');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DAEC24D3D');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D48D62931');
        $this->addSql('DROP INDEX IDX_268B9C9DAEC24D3D ON agent');
        $this->addSql('DROP INDEX IDX_268B9C9D48D62931 ON agent');
        $this->addSql('ALTER TABLE agent ADD id_service INT NOT NULL, ADD id_grade INT NOT NULL, DROP id_grade_id, DROP id_service_id, CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mot_de_passe mot_de_passe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE avertissement ADD id_agent INT NOT NULL, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE avis_recherche DROP FOREIGN KEY FK_12720487BBCD69A1');
        $this->addSql('DROP INDEX IDX_12720487BBCD69A1 ON avis_recherche');
        $this->addSql('ALTER TABLE avis_recherche ADD id_agent INT NOT NULL, ADD id_degre INT NOT NULL, DROP id_degre_id, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE casier_judiciaire ADD id_agent INT NOT NULL, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE temps_detention temps_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fin_detention fin_detention VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_saisi bien_saisi LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bien_rendre bien_rendre LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_suspect img_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE declaration_vol ADD id_agent INT NOT NULL, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_vehicule description_vehicule LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE plaque_immatriculation plaque_immatriculation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE degre CHANGE libelle_degre libelle_degre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE grade CHANGE libelle_grade libelle_grade VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE guide CHANGE droit_miranda droit_miranda VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_radio code_radio VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE reglement_interne reglement_interne VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tenues_agents tenues_agents VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE information ADD liste_agents VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE referent_unite referent_unite VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE referent_formation referent_formation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE mandat DROP FOREIGN KEY FK_1E53EFD5BBCD69A1');
        $this->addSql('DROP INDEX IDX_1E53EFD5BBCD69A1 ON mandat');
        $this->addSql('ALTER TABLE mandat ADD id_degre INT NOT NULL, DROP id_degre_id, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_faits id_faits VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_mandat description_mandat LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lien_dossier lien_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE plainte DROP FOREIGN KEY FK_D88CE90FBBCD69A1');
        $this->addSql('DROP INDEX IDX_D88CE90FBBCD69A1 ON plainte');
        $this->addSql('ALTER TABLE plainte ADD id_degre INT NOT NULL, ADD id_agent INT NOT NULL, DROP id_degre_id, CHANGE nom_citoyen nom_citoyen VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_faits description_faits LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE rapport ADD id_agent INT NOT NULL, CHANGE nom_dossier nom_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lien_dossier lien_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE saisie ADD id_agent INT NOT NULL, ADD type_saisie INT NOT NULL, CHANGE nom_suspect nom_suspect VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_saisie img_saisie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE saisie_type CHANGE libelle_saisie_type libelle_saisie_type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE service CHANGE libelle_service libelle_service VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
