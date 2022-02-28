<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220120093127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD categories_id INT DEFAULT NULL, ADD auteurs_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66A21214B7 FOREIGN KEY (categories_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66AE784107 FOREIGN KEY (auteurs_id) REFERENCES auteur (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66A21214B7 ON article (categories_id)');
        $this->addSql('CREATE INDEX IDX_23A0E66AE784107 ON article (auteurs_id)');
        $this->addSql('ALTER TABLE commentaire ADD articles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC1EBAF6CC FOREIGN KEY (articles_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC1EBAF6CC ON commentaire (articles_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66A21214B7');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66AE784107');
        $this->addSql('DROP INDEX IDX_23A0E66A21214B7 ON article');
        $this->addSql('DROP INDEX IDX_23A0E66AE784107 ON article');
        $this->addSql('ALTER TABLE article DROP categories_id, DROP auteurs_id');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC1EBAF6CC');
        $this->addSql('DROP INDEX IDX_67F068BC1EBAF6CC ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP articles_id');
    }
}
