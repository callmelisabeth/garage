<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231121142835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cars ADD content LONGTEXT NOT NULL, ADD date INT NOT NULL, DROP image, CHANGE brand brand TINYTEXT NOT NULL, CHANGE price price INT NOT NULL, CHANGE kilometers kilometer INT NOT NULL');
        $this->addSql('ALTER TABLE comments ADD title VARCHAR(255) DEFAULT NULL, ADD name LONGTEXT NOT NULL, ADD grade INT NOT NULL, ADD viewable TINYINT(1) NOT NULL, DROP created_at, CHANGE feedback content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE contact ADD subject VARCHAR(255) NOT NULL, ADD handle TINYINT(1) NOT NULL, ADD date_created DATETIME NOT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE number number INT NOT NULL, CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE image ADD car_id INT DEFAULT NULL, CHANGE name title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FC3C6F69F FOREIGN KEY (car_id) REFERENCES cars (id)');
        $this->addSql('CREATE INDEX IDX_C53D045FC3C6F69F ON image (car_id)');
        $this->addSql('ALTER TABLE opening_hours ADD opening_monday_morning TIME NOT NULL, ADD closing_monday_morning TIME NOT NULL, ADD opening_monday_afeternoon TIME NOT NULL, ADD closing_monday_aftetnoon TIME NOT NULL, ADD opening_tuesday_morning TIME NOT NULL, ADD closing_tuesday_morning TIME NOT NULL, ADD opening_tuesday_afternoon TIME NOT NULL, ADD closing_tuesday_afternoon TIME NOT NULL, ADD opening_wednesday_morning TIME NOT NULL, ADD closing_wednesday_afternoon TIME NOT NULL, ADD opening_thursday_morning TIME NOT NULL, ADD closing_thursday_afternoon TIME NOT NULL, ADD opening_friday_morning TIME NOT NULL, ADD closing_friday_morning TIME NOT NULL, ADD opening_friday_afternon TIME NOT NULL, ADD closing_friday_afternoon TIME NOT NULL, ADD opening_saturday_morning TIME NOT NULL, ADD closing_saturday_morning TIME NOT NULL, ADD opening_saturday_afternoon TIME NOT NULL, ADD closing_saturday_afternoon TIME NOT NULL, ADD opening_sunday_morning TIME NOT NULL, ADD closing_sunday_morning TIME NOT NULL, ADD opening_sunday_afternoon TIME NOT NULL, ADD closing_sunday_afternoon TIME NOT NULL, DROP day, DROP start_time, DROP time, DROP closing_time');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cars ADD kilometers INT NOT NULL, ADD image VARCHAR(255) NOT NULL, DROP content, DROP kilometer, DROP date, CHANGE brand brand VARCHAR(255) NOT NULL, CHANGE price price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE comments ADD feedback LONGTEXT NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP title, DROP content, DROP name, DROP grade, DROP viewable');
        $this->addSql('ALTER TABLE contact DROP subject, DROP handle, DROP date_created, CHANGE name name VARCHAR(255) NOT NULL, CHANGE message message VARCHAR(255) NOT NULL, CHANGE number number VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FC3C6F69F');
        $this->addSql('DROP INDEX IDX_C53D045FC3C6F69F ON image');
        $this->addSql('ALTER TABLE image DROP car_id, CHANGE title name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE opening_hours ADD day VARCHAR(255) NOT NULL, ADD start_time TIME NOT NULL, ADD time VARCHAR(255) NOT NULL, ADD closing_time TIME NOT NULL, DROP opening_monday_morning, DROP closing_monday_morning, DROP opening_monday_afeternoon, DROP closing_monday_aftetnoon, DROP opening_tuesday_morning, DROP closing_tuesday_morning, DROP opening_tuesday_afternoon, DROP closing_tuesday_afternoon, DROP opening_wednesday_morning, DROP closing_wednesday_afternoon, DROP opening_thursday_morning, DROP closing_thursday_afternoon, DROP opening_friday_morning, DROP closing_friday_morning, DROP opening_friday_afternon, DROP closing_friday_afternoon, DROP opening_saturday_morning, DROP closing_saturday_morning, DROP opening_saturday_afternoon, DROP closing_saturday_afternoon, DROP opening_sunday_morning, DROP closing_sunday_morning, DROP opening_sunday_afternoon, DROP closing_sunday_afternoon');
    }
}
