<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231121180518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opening_monday_afternoon TIME NOT NULL, ADD closing_monday_afternoon TIME NOT NULL, DROP opening_monday_afeternoon, DROP closing_monday_aftetnoon');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opening_monday_afeternoon TIME NOT NULL, ADD closing_monday_aftetnoon TIME NOT NULL, DROP opening_monday_afternoon, DROP closing_monday_afternoon');
    }
}
