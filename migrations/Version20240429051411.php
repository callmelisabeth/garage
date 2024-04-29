<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429051411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opening_monday TIME NOT NULL, ADD opening_tuesday TIME NOT NULL, ADD closing_tuesday TIME NOT NULL, ADD opening_wednesday TIME NOT NULL, ADD closing_wednesday TIME NOT NULL, ADD opening_thursday TIME NOT NULL, ADD closing_thursday TIME NOT NULL, ADD opening_friday TIME NOT NULL, ADD closing_friday TIME NOT NULL, ADD opening_saturday TIME NOT NULL, ADD closing_saturday TIME NOT NULL, ADD opening_sunday TIME NOT NULL, ADD closing_sunday TIME NOT NULL, DROP opening_monday_morning, DROP closing_monday_morning, DROP opening_tuesday_morning, DROP closing_tuesday_morning, DROP opening_tuesday_afternoon, DROP closing_tuesday_afternoon, DROP opening_wednesday_morning, DROP closing_wednesday_afternoon, DROP opening_thursday_morning, DROP closing_thursday_afternoon, DROP opening_friday_morning, DROP closing_friday_morning, DROP opening_friday_afternon, DROP closing_friday_afternoon, DROP opening_saturday_morning, DROP closing_saturday_morning, DROP opening_saturday_afternoon, DROP closing_saturday_afternoon, DROP opening_sunday_morning, DROP closing_sunday_morning, DROP opening_sunday_afternoon, DROP closing_sunday_afternoon, DROP opening_monday_afternoon, DROP closing_monday_afternoon, DROP closing_wednesday_morning, DROP opening_wednesday_afternoon, DROP closing_thursday_morning, DROP opening_thursday_afternoon');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opening_monday_morning TIME NOT NULL, ADD closing_monday_morning TIME NOT NULL, ADD opening_tuesday_morning TIME NOT NULL, ADD closing_tuesday_morning TIME NOT NULL, ADD opening_tuesday_afternoon TIME NOT NULL, ADD closing_tuesday_afternoon TIME NOT NULL, ADD opening_wednesday_morning TIME NOT NULL, ADD closing_wednesday_afternoon TIME NOT NULL, ADD opening_thursday_morning TIME NOT NULL, ADD closing_thursday_afternoon TIME NOT NULL, ADD opening_friday_morning TIME NOT NULL, ADD closing_friday_morning TIME NOT NULL, ADD opening_friday_afternon TIME NOT NULL, ADD closing_friday_afternoon TIME NOT NULL, ADD opening_saturday_morning TIME NOT NULL, ADD closing_saturday_morning TIME NOT NULL, ADD opening_saturday_afternoon TIME NOT NULL, ADD closing_saturday_afternoon TIME NOT NULL, ADD opening_sunday_morning TIME NOT NULL, ADD closing_sunday_morning TIME NOT NULL, ADD opening_sunday_afternoon TIME NOT NULL, ADD closing_sunday_afternoon TIME NOT NULL, ADD opening_monday_afternoon TIME NOT NULL, ADD closing_monday_afternoon TIME NOT NULL, ADD closing_wednesday_morning TIME NOT NULL, ADD opening_wednesday_afternoon TIME NOT NULL, ADD closing_thursday_morning TIME NOT NULL, ADD opening_thursday_afternoon TIME NOT NULL, DROP opening_monday, DROP opening_tuesday, DROP closing_tuesday, DROP opening_wednesday, DROP closing_wednesday, DROP opening_thursday, DROP closing_thursday, DROP opening_friday, DROP closing_friday, DROP opening_saturday, DROP closing_saturday, DROP opening_sunday, DROP closing_sunday');
    }
}
