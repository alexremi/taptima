<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201116031136 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_product DROP FOREIGN KEY FK_2890CCAA1AD5CDBF');
        $this->addSql('ALTER TABLE app_cart DROP FOREIGN KEY FK_E8DAD179395C3F3');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B79395C3F3');
        $this->addSql('ALTER TABLE cart_product DROP FOREIGN KEY FK_2890CCAA4584665A');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FF64A679D');
        $this->addSql('ALTER TABLE ceramic DROP FOREIGN KEY FK_5F088C592EEE268A');
        $this->addSql('ALTER TABLE farfor_category DROP FOREIGN KEY FK_441783DA3256915B');
        $this->addSql('ALTER TABLE artefacts DROP FOREIGN KEY FK_5E5C86F3F8896BCD');
        $this->addSql('ALTER TABLE artefacts DROP FOREIGN KEY FK_5E5C86F32F3345ED');
        $this->addSql('ALTER TABLE corollas DROP FOREIGN KEY FK_9EE708F4A64A6311');
        $this->addSql('ALTER TABLE kl_pr DROP FOREIGN KEY FK_AFE4F991C030E5D8');
        $this->addSql('ALTER TABLE zn_pr DROP FOREIGN KEY FK_586D8F28ED4B199F');
        $this->addSql('ALTER TABLE klass DROP FOREIGN KEY FK_DD3B525E6ABF0352');
        $this->addSql('ALTER TABLE priznak DROP FOREIGN KEY FK_4381F2476ABF0352');
        $this->addSql('ALTER TABLE kl_pr DROP FOREIGN KEY FK_AFE4F99167C663E7');
        $this->addSql('ALTER TABLE prizna_area DROP FOREIGN KEY FK_FEFB5D34357EE8CD');
        $this->addSql('ALTER TABLE zn_pr DROP FOREIGN KEY FK_586D8F2867C663E7');
        $this->addSql('ALTER TABLE zn_pr DROP FOREIGN KEY FK_586D8F286059800F');
        $this->addSql('ALTER TABLE artefacts DROP FOREIGN KEY FK_5E5C86F3A76ED395');
        $this->addSql('ALTER TABLE artefacts DROP FOREIGN KEY FK_5E5C86F3DF074B51');
        $this->addSql('ALTER TABLE priznak DROP FOREIGN KEY FK_4381F247E9D1CC1D');
        $this->addSql('DROP TABLE app_cart');
        $this->addSql('DROP TABLE app_customer');
        $this->addSql('DROP TABLE app_product');
        $this->addSql('DROP TABLE artefacts');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE cart_product');
        $this->addSql('DROP TABLE ceramic');
        $this->addSql('DROP TABLE ceramic_category');
        $this->addSql('DROP TABLE corollas');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE ent1');
        $this->addSql('DROP TABLE farfor');
        $this->addSql('DROP TABLE farfor_category');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE kl_pr');
        $this->addSql('DROP TABLE klas');
        $this->addSql('DROP TABLE klass');
        $this->addSql('DROP TABLE klass_priznak');
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('DROP TABLE prizn');
        $this->addSql('DROP TABLE prizna_area');
        $this->addSql('DROP TABLE priznak');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE zn_pr');
        $this->addSql('DROP TABLE zn_priznak');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_cart (id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, date_time DATETIME NOT NULL, UNIQUE INDEX UNIQ_E8DAD179395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE app_customer (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, phone_number VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE app_product (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE artefacts (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, klas_id INT NOT NULL, kl_pr_id INT NOT NULL, zn_pr_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATE NOT NULL, place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, period VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(1024) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_5E5C86F35E237E06 (name), INDEX IDX_5E5C86F32F3345ED (klas_id), INDEX IDX_5E5C86F3DF074B51 (zn_pr_id), INDEX IDX_5E5C86F3A76ED395 (user_id), INDEX IDX_5E5C86F3F8896BCD (kl_pr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cart (id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, date_time DATETIME NOT NULL, UNIQUE INDEX UNIQ_BA388B79395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cart_product (cart_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_2890CCAA4584665A (product_id), INDEX IDX_2890CCAA1AD5CDBF (cart_id), PRIMARY KEY(cart_id, product_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ceramic (id INT AUTO_INCREMENT NOT NULL, ceramic_category_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5F088C592EEE268A (ceramic_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ceramic_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE corollas (id INT AUTO_INCREMENT NOT NULL, corolla_class INT NOT NULL, image VARCHAR(1024) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_9EE708F4A64A6311 (corolla_class), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, phone_number VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ent1 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE farfor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE farfor_category (id INT AUTO_INCREMENT NOT NULL, relation_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_441783DA3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, post2_id INT NOT NULL, filename VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, path VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_C53D045FF64A679D (post2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE kl_pr (id INT AUTO_INCREMENT NOT NULL, kl_id INT DEFAULT NULL, pr_id INT DEFAULT NULL, INDEX IDX_AFE4F991C030E5D8 (kl_id), INDEX IDX_AFE4F99167C663E7 (pr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE klas (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE klass (id INT AUTO_INCREMENT NOT NULL, klass_priznak_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_DD3B525E6ABF0352 (klass_priznak_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE klass_priznak (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, executed_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prizn (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prizna_area (id INT AUTO_INCREMENT NOT NULL, prizn_id_id INT DEFAULT NULL, zn VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_FEFB5D34357EE8CD (prizn_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE priznak (id INT AUTO_INCREMENT NOT NULL, klass_priznak_id INT DEFAULT NULL, zn_priznak_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_4381F2476ABF0352 (klass_priznak_id), INDEX IDX_4381F247E9D1CC1D (zn_priznak_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE zn_pr (id INT AUTO_INCREMENT NOT NULL, pr_id INT DEFAULT NULL, prizna_area_id INT DEFAULT NULL, class INT NOT NULL, INDEX IDX_586D8F2867C663E7 (pr_id), INDEX IDX_586D8F28ED4B199F (class), INDEX IDX_586D8F286059800F (prizna_area_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE zn_priznak (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE app_cart ADD CONSTRAINT FK_E8DAD179395C3F3 FOREIGN KEY (customer_id) REFERENCES app_customer (id)');
        $this->addSql('ALTER TABLE artefacts ADD CONSTRAINT FK_5E5C86F32F3345ED FOREIGN KEY (klas_id) REFERENCES klas (id)');
        $this->addSql('ALTER TABLE artefacts ADD CONSTRAINT FK_5E5C86F3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE artefacts ADD CONSTRAINT FK_5E5C86F3DF074B51 FOREIGN KEY (zn_pr_id) REFERENCES zn_pr (id)');
        $this->addSql('ALTER TABLE artefacts ADD CONSTRAINT FK_5E5C86F3F8896BCD FOREIGN KEY (kl_pr_id) REFERENCES kl_pr (id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B79395C3F3 FOREIGN KEY (customer_id) REFERENCES app_customer (id)');
        $this->addSql('ALTER TABLE cart_product ADD CONSTRAINT FK_2890CCAA1AD5CDBF FOREIGN KEY (cart_id) REFERENCES app_cart (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cart_product ADD CONSTRAINT FK_2890CCAA4584665A FOREIGN KEY (product_id) REFERENCES app_product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ceramic ADD CONSTRAINT FK_5F088C592EEE268A FOREIGN KEY (ceramic_category_id) REFERENCES ceramic_category (id)');
        $this->addSql('ALTER TABLE corollas ADD CONSTRAINT FK_9EE708F4A64A6311 FOREIGN KEY (corolla_class) REFERENCES klas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE farfor_category ADD CONSTRAINT FK_441783DA3256915B FOREIGN KEY (relation_id) REFERENCES farfor (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF64A679D FOREIGN KEY (post2_id) REFERENCES ceramic (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kl_pr ADD CONSTRAINT FK_AFE4F99167C663E7 FOREIGN KEY (pr_id) REFERENCES prizn (id)');
        $this->addSql('ALTER TABLE kl_pr ADD CONSTRAINT FK_AFE4F991C030E5D8 FOREIGN KEY (kl_id) REFERENCES klas (id)');
        $this->addSql('ALTER TABLE klass ADD CONSTRAINT FK_DD3B525E6ABF0352 FOREIGN KEY (klass_priznak_id) REFERENCES klass_priznak (id)');
        $this->addSql('ALTER TABLE prizna_area ADD CONSTRAINT FK_FEFB5D34357EE8CD FOREIGN KEY (prizn_id_id) REFERENCES prizn (id)');
        $this->addSql('ALTER TABLE priznak ADD CONSTRAINT FK_4381F2476ABF0352 FOREIGN KEY (klass_priznak_id) REFERENCES klass_priznak (id)');
        $this->addSql('ALTER TABLE priznak ADD CONSTRAINT FK_4381F247E9D1CC1D FOREIGN KEY (zn_priznak_id) REFERENCES zn_priznak (id)');
        $this->addSql('ALTER TABLE zn_pr ADD CONSTRAINT FK_586D8F286059800F FOREIGN KEY (prizna_area_id) REFERENCES prizna_area (id)');
        $this->addSql('ALTER TABLE zn_pr ADD CONSTRAINT FK_586D8F2867C663E7 FOREIGN KEY (pr_id) REFERENCES prizn (id)');
        $this->addSql('ALTER TABLE zn_pr ADD CONSTRAINT FK_586D8F28ED4B199F FOREIGN KEY (class) REFERENCES klas (id) ON DELETE CASCADE');
    }
}
