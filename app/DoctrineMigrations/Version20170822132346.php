<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170822132346 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE digikey (id INT AUTO_INCREMENT NOT NULL, pdf LONGTEXT DEFAULT NULL, category VARCHAR(255) DEFAULT NULL, sub_category VARCHAR(255) DEFAULT NULL, image LONGTEXT DEFAULT NULL, digi_key_part_number VARCHAR(255) DEFAULT NULL, manufacturer_part_number VARCHAR(255) DEFAULT NULL, manufacturer VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, quantity_available VARCHAR(255) DEFAULT NULL, unit_price_usd VARCHAR(255) DEFAULT NULL, minimum_quantity VARCHAR(255) DEFAULT NULL, packaging VARCHAR(255) DEFAULT NULL, series VARCHAR(255) DEFAULT NULL, part_status VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, contact_type VARCHAR(255) DEFAULT NULL, contact_size VARCHAR(255) DEFAULT NULL, wire_gauge_range_awg VARCHAR(255) DEFAULT NULL, wire_gauge_or_range_mm² VARCHAR(255) DEFAULT NULL, wire_gauge_or_range_coaxial VARCHAR(255) DEFAULT NULL, contact_termination VARCHAR(255) DEFAULT NULL, contact_material VARCHAR(255) DEFAULT NULL, contact_finish VARCHAR(255) DEFAULT NULL, contact_finish_thickness VARCHAR(255) DEFAULT NULL, termination_finish VARCHAR(255) DEFAULT NULL, features VARCHAR(255) DEFAULT NULL, number_of_positions VARCHAR(255) DEFAULT NULL, pitch VARCHAR(255) DEFAULT NULL, style VARCHAR(255) DEFAULT NULL, for_use_with_related_products VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, legend VARCHAR(255) DEFAULT NULL, length_overall VARCHAR(255) DEFAULT NULL, length_pin VARCHAR(255) DEFAULT NULL, insulation VARCHAR(255) DEFAULT NULL, terminal_block_type VARCHAR(255) DEFAULT NULL, number_of_circuits VARCHAR(255) DEFAULT NULL, number_of_wire_entries VARCHAR(255) DEFAULT NULL, number_of_rows VARCHAR(255) DEFAULT NULL, current_rating VARCHAR(255) DEFAULT NULL, voltage_rating VARCHAR(255) DEFAULT NULL, wire_gauge VARCHAR(255) DEFAULT NULL, top_termination VARCHAR(255) DEFAULT NULL, bottom_termination VARCHAR(255) DEFAULT NULL, barrier_type VARCHAR(255) DEFAULT NULL, connector_style VARCHAR(255) DEFAULT NULL, accessory_type VARCHAR(255) DEFAULT NULL, body_material VARCHAR(255) DEFAULT NULL, body_finish VARCHAR(255) DEFAULT NULL, adapter_type VARCHAR(255) DEFAULT NULL, conversion_type VARCHAR(255) DEFAULT NULL, adapter_series VARCHAR(255) DEFAULT NULL, center_gender VARCHAR(255) DEFAULT NULL, convert_from_adapter_end LONGTEXT DEFAULT NULL, convert_to_adapter_end LONGTEXT DEFAULT NULL, impedance LONGTEXT DEFAULT NULL, mounting_type LONGTEXT DEFAULT NULL, mounting_feature LONGTEXT DEFAULT NULL, fastening_type LONGTEXT DEFAULT NULL, frequency_max LONGTEXT DEFAULT NULL, ingress_protection LONGTEXT DEFAULT NULL, center_contact_plating LONGTEXT DEFAULT NULL, cable_group LONGTEXT DEFAULT NULL, center_conductor_diameter LONGTEXT DEFAULT NULL, pin_or_socket LONGTEXT DEFAULT NULL, board_thickness LONGTEXT DEFAULT NULL, disconnect_type LONGTEXT DEFAULT NULL, number_of_levels LONGTEXT DEFAULT NULL, terminal_width LONGTEXT DEFAULT NULL, termination_style LONGTEXT DEFAULT NULL, currentIEC LONGTEXT DEFAULT NULL, voltage_iec LONGTEXT DEFAULT NULL, current_ul LONGTEXT DEFAULT NULL, voltage_ul LONGTEXT DEFAULT NULL, wire_gauge_or_range_awgl LONGTEXT DEFAULT NULL, positions_per_level LONGTEXT DEFAULT NULL, header_orientation LONGTEXT DEFAULT NULL, plug_wire_entry VARCHAR(255) DEFAULT NULL, operating_temperature VARCHAR(255) DEFAULT NULL, contact_mating_finish VARCHAR(255) DEFAULT NULL, process_side_connection VARCHAR(255) DEFAULT NULL, control_side_connection VARCHAR(255) DEFAULT NULL, control_side_cable_retainer VARCHAR(255) DEFAULT NULL, positions_poles VARCHAR(255) DEFAULT NULL, voltage_rated VARCHAR(255) DEFAULT NULL, current_rating_per_contact VARCHAR(255) DEFAULT NULL, length VARCHAR(255) DEFAULT NULL, width VARCHAR(255) DEFAULT NULL, front_panel_wire_connection VARCHAR(255) DEFAULT NULL, rear_panel_wire_connection VARCHAR(255) DEFAULT NULL, panel_thickness VARCHAR(255) DEFAULT NULL, panel_mount_type VARCHAR(255) DEFAULT NULL, number_of_poles VARCHAR(255) DEFAULT NULL, line_side_connections_per_pole VARCHAR(255) DEFAULT NULL, load_side_connections_per_pole VARCHAR(255) DEFAULT NULL, line_side_connection_type VARCHAR(255) DEFAULT NULL, load_side_connection_type VARCHAR(255) DEFAULT NULL, line_side_wire_stud_size VARCHAR(255) DEFAULT NULL, load_side_wire_stud_size VARCHAR(255) DEFAULT NULL, housing_color VARCHAR(255) DEFAULT NULL, mating_orientation VARCHAR(255) DEFAULT NULL, current VARCHAR(255) DEFAULT NULL, voltage VARCHAR(255) DEFAULT NULL, wire_termination VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, stacking_direction VARCHAR(255) DEFAULT NULL, height_stacking_mating VARCHAR(255) DEFAULT NULL, tail_type LONGTEXT DEFAULT NULL, accepts_pin_diameter LONGTEXT DEFAULT NULL, mounting_hole_diameter LONGTEXT DEFAULT NULL, pin_hole_diameter LONGTEXT DEFAULT NULL, flange_diameter LONGTEXT DEFAULT NULL, tail_diameter LONGTEXT DEFAULT NULL, socket_depth LONGTEXT DEFAULT NULL, table_headers LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE digikey');
    }
}
