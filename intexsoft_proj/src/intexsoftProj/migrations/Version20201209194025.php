<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201209194025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE career_summary (id INT AUTO_INCREMENT NOT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, position VARCHAR(255) NOT NULL, job_description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE education (id INT AUTO_INCREMENT NOT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, title VARCHAR(255) NOT NULL, disciplines VARCHAR(255) NOT NULL, result VARCHAR(255) NOT NULL, date_of_create DATE NOT NULL, date_of_update DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE languages (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_data (id INT AUTO_INCREMENT NOT NULL, date_of_birthday DATE NOT NULL, marital_status VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, about VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, internal_title VARCHAR(255) NOT NULL, external_title VARCHAR(255) NOT NULL, period_start DATE NOT NULL, period_end DATE DEFAULT NULL, role_id INT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_skills (project_id INT NOT NULL, skills_id INT NOT NULL, INDEX IDX_C295FD3A166D1F9C (project_id), INDEX IDX_C295FD3A7FF61858 (skills_id), PRIMARY KEY(project_id, skills_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_roles (id INT AUTO_INCREMENT NOT NULL, еtitle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spoken_languages (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, language_id INT NOT NULL, level_id INT NOT NULL, date_of_create DATE NOT NULL, date_of_update DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technical_experience (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, skill_id INT NOT NULL, experienceЕ�term INT NOT NULL, level INT NOT NULL, last_year_used SMALLINT NOT NULL, date_of_create DATE NOT NULL, date_of_update DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, date_of_create DATE NOT NULL, date_of_update DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_skills ADD CONSTRAINT FK_C295FD3A166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skills ADD CONSTRAINT FK_C295FD3A7FF61858 FOREIGN KEY (skills_id) REFERENCES skills (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_skills DROP FOREIGN KEY FK_C295FD3A166D1F9C');
        $this->addSql('ALTER TABLE project_skills DROP FOREIGN KEY FK_C295FD3A7FF61858');
        $this->addSql('DROP TABLE career_summary');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE education');
        $this->addSql('DROP TABLE languages');
        $this->addSql('DROP TABLE personal_data');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_skills');
        $this->addSql('DROP TABLE project_roles');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE spoken_languages');
        $this->addSql('DROP TABLE technical_experience');
        $this->addSql('DROP TABLE user');
    }
}
